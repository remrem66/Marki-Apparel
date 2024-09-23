<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Products;
use Mail;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    public function registerUser(Request $info){ 

        User::registerUser($info);

        return view('mainpage.LoginRegister');
    }

    public function insertnewproduct(Request $info){

        $validateProduct = Products::query()
                            ->where([
                                'product_name' => $info['product_name'],
                                'category' => $info['category'],
                                'color' => $info['color'],
                                'size' => $info['size']
                            ])->exists();
        
        if($validateProduct){
            return back()->withErrors([
                'message' => 'Product with this kind of details already exists in the database! Please input a unique one.'
            ]);
        }
        
        Products::insertnewproduct($info);

        return redirect('/addnewproduct');
    }

    public function viewproducts(){

        $data = Products::all();

        return view('admin.viewProduct',compact('data'));
    }

    public function addproductvariation(Request $info){

        $product = DB::table('products')
                    ->select('*')
                    ->where('product_id',$info['product_id'])
                    ->first();

        Products::addproductvariation($info,$product);

        return redirect('/viewproducts');
    }

    public function editproduct($id){
        $info = DB::table('products')
                    ->select('*')
                    ->where('product_id',$id)
                    ->first();

        return view('admin.editproduct',compact('info'));
    }

    public function productedit(Request $info){

        Products::productedit($info);

        return redirect('/viewproducts');
     }

     public function shopcategory($category){

        $products = DB::table('products')
                    ->select('*')
                    ->groupBy('product_name')
                    ->where('category',$category)
                    ->where('quantity','>=',1)
                    ->get();

        return view('mainpage.shop',compact('products'));
     }

    public function singleproduct($itemDetails){

        $itemDetails = explode(":",$itemDetails);  

       $sizes = [];
       $colors = [];
       $colorsStock = [];
       $sizesStock = [];

       $productsFirst = DB::table('products')
                    ->select('*')
                    ->where([
                        'category' => $itemDetails[1],
                        'product_name' => $itemDetails[0],
                        'color' => $itemDetails[2],
                        'size' => $itemDetails[3],
                    ])->first();
        
    
        
        $products = DB::table('products')
                    ->select('*')
                    ->where('category',$itemDetails[1])
                    ->where('product_name',$itemDetails[0])
                    ->groupBy('size','color')
                    ->get();

        foreach($products as $product){
            array_push($sizes, $product->size);
            array_push($colors, $product->color);
        }
        
        $sizes = array_unique($sizes);
        $sizes = array_values($sizes);
        $colors = array_unique($colors);
        $colors = array_values($colors);

        for($x = 0; $x < count($colors); $x++){
            $colorQuantity = DB::table('products')
                                        ->select('quantity')
                                        ->where([
                                            'category' => $itemDetails[1],
                                            'product_name' => $itemDetails[0],
                                            'color' => $colors[$x],
                                            'size' => $productsFirst->size,
                                        ])->first();
            $colorsStock[$colors[$x]] = $colorQuantity->quantity;
        }

        for($x = 0; $x < count($sizes); $x++){
            $sizeQuantity = DB::table('products')
                                        ->select('quantity')
                                        ->where([
                                            'category' => $itemDetails[1],
                                            'product_name' => $itemDetails[0],
                                            'color' => $productsFirst->color,
                                            'size' => $sizes[$x],
                                        ])->first();
            if($sizeQuantity){
                $sizesStock[$sizes[$x]] = $sizeQuantity->quantity;
            }
            else{
                $sizesStock[$sizes[$x]] = 0;
            }
            
            
        }

        
        return view('mainpage.single-product',compact('productsFirst','sizes','colors','sizesStock','colorsStock'));
    }

    public function userlogin(Request $info){

        if (Auth::attempt(['email_address' => $info['email_address'], 'password' => $info['password']])) {

            $userData = User::all()->where('email',$info['email'])->first();

            if($userData->user_status == 0){
                return back()->withErrors([
                    'email' => 'Your account is disabled. Please contact your administrator for further assistance.',
                ])->onlyInput('email');
            }

            if($userData->user_type == 0){
                
                return redirect()->route('dashboard');

            }

            if($userData->is_verified == 0){

                $info->session()->put('temp_user_id', $userData->user_id);
                return redirect()->route('emailVerification');
            }
            else{
                $info->session()->regenerate();

                $info->session()->put('logged', true);
                $info->session()->put('user_id', $userData->user_id);
                $info->session()->put('user_type', $userData->user_type);
        
                return redirect('/')->with('message', 'Successful Login!');
            }
        }

        return back()->withErrors([
            'notif' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(){

        auth()->logout();

        session()->invalidate();
        session()->regenerateToken();
        session()->flush();

        return redirect('/')->with('message', 'Logout Successful');
    }
    
    public function emailverification(){

        if(empty(session('temp_user_id'))){

            return redirect('/');
        }
        else{
            $str_result = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle($str_result),0,6);
            $userID = session('temp_user_id');

            $userInfo = User::all()->where('user_id',$userID)->first();

            User::insertVerificationCode($code,$userID);

            $data = [
                'name' => $userInfo->first_name,
                'body1' => 'We are happy you signed up for Marki Apparel!',
                'body2' => 'To start exploring Marki Apparel and neighborhood,',
                'body3' => 'please confirm your email address by entering the code below on the Marki Apparel website',
                'code' => $code,
                'body4' => 'Welcome!',
                'body5' => 'Marki Apparel team'
            ];


            Mail::to($userInfo->email_address)->send(new EmailVerification($data));


            return view('mainpage.emailVerification',compact('userID'));
            
        }

        
    }

    public function resendcode(Request $info){

        $str_result = '123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($str_result),0,6);

        $userID = $info['user_id'];

        $userInfo = User::all()->where('user_id',$userID)->first();

        User::insertVerificationCode($code,$userID);

        $data = [
            'name' => $userInfo->first_name,
            'body1' => 'We are happy you signed up for Marki Apparel!',
            'body2' => 'To start exploring Marki Apparel and neighborhood,',
            'body3' => 'please confirm your email address by entering the code below on the Marki Apparel website',
            'code' => $code,
            'body4' => 'Welcome!',
            'body5' => 'Marki Apparel team'
        ];
        
        Mail::to($userInfo->email_address)->send(new EmailVerification($data));
    }

    public function verifyemail(Request $info){

        $userData = User::all()->where('user_id',$info['user_id'])->first();

        if($userData->verification_code == $info['code']){
            User::verifyUser($info['user_id']);

            session()->invalidate();
            session()->regenerateToken();
            session()->flush();

            if($userData->user_status == 0){
                return back()->withErrors([
                    'message' => 'Your account is disabled. Please contact your administrator for further assistance.',
                ])->onlyInput('email');
            }
            else{

                $info->session()->regenerate();

                $info->session()->put('logged', true);
                $info->session()->put('user_id', $userData->user_id);
                $info->session()->put('user_type', $userData->user_type);
        
                return redirect('/')->with('message', 'Successful Login!');
            }

        }
        else{
            return back()->withErrors([
                'notif' => 'Incorrect code. Please try again'
            ])->onlyInput('email');
        }
    }

    public function test(){
        
        return view('mainpage.emailVerification');
    }
}