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
use App\Models\Cart;
use App\Models\Orders;
use App\Models\Audittrail;
use App\Models\Comments;
use App\Models\CancelOrders;
use Mail;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Curl;
use Illuminate\Support\Facades\Redirect;


class Controller extends BaseController
{
    public function registerUser(Request $info){ 

        User::registerUser($info);

        return redirect('/')->with('message', 'Successfully Created Account!');
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

        $audittrail = "Admin ".session('user_name')." added a new product (".$info['product_name'].")";

        Audittrail::addNewAction($audittrail);

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

        $audittrail = "Admin ".session('user_name')." added a new product variation (".$info['product_name'].")";

        Audittrail::addNewAction($audittrail);

        return redirect('/viewproducts');
    }

    public function editproduct($id){
        $info = DB::table('products')
                    ->select('*')
                    ->where('product_id',$id)
                    ->first();

        $audittrail = "Admin ".session('user_name')." edit the product (".$id.")";

        Audittrail::addNewAction($audittrail);

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

            if($colorQuantity){
                $colorsStock[$colors[$x]] = $colorQuantity->quantity;
            }
            else{
                $colorsStock[$colors[$x]] = 0;
            }
            
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

        $reviews = DB::table('comments')
                    ->join('products','products.product_id','=','comments.product_id')
                    ->join('users','users.user_id','=','comments.user_id')
                    ->select('comments.*','users.*')
                    ->where('comments.product_id',$productsFirst->product_id)
                    ->get();

        
        return view('mainpage.single-product',compact('productsFirst','sizes','colors','sizesStock','colorsStock','reviews'));
    }

    public function userlogin(Request $info){

        if (Auth::attempt(['email_address' => $info['email_address'], 'password' => $info['password']])) {

            $userData = DB::table('users')
                        ->select('*')
                        ->where('email_address',$info['email_address'])
                        ->first();

            if($userData->user_status == 0){
                return back()->withErrors([
                    'email' => 'Your account is disabled. Please contact your administrator for further assistance.',
                ])->onlyInput('email');
            }

            if($userData->is_verified == 0){

                $info->session()->put('temp_user_id', $userData->user_id);
                return redirect()->route('emailVerification');
            }
            else{

                $fullName = $userData->first_name." ".$userData->last_name;
                $info->session()->regenerate();

                $info->session()->put('logged', true);
                $info->session()->put('user_id', $userData->user_id);
                $info->session()->put('user_name', $fullName);
                $info->session()->put('user_type', $userData->user_type);

                if($userData->user_type == 0 || $userData->user_type == 2 || $userData->user_type == 3){
                
                    return redirect()->route('dashboard');
    
                }
                else{

                    $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();

                    $info->session()->put('cartCount', count($cartProducts));
                    $info->session()->put('cartItems', $cartProducts);

                    return redirect('/')->with('message', 'Successful Login!');
                }
        
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
                $userInfo = User::all()->where('user_id',session('temp_user_id'))->first();

                if($userInfo->verification_code == ""){

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
                else{

                    $userID = session('temp_user_id');
                    return view('mainpage.emailVerification',compact('userID'));
                }
                
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

        $userData = DB::table('users')
                        ->select('*')
                        ->where('user_id',$info['user_id'])
                        ->first();

        $userData = User::all()->where('user_id',$info['user_id'])->first();
        $userID = $info['user_id'];

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

                $fullName = $userData->first_name." ".$userData->last_name;

                $info->session()->regenerate();

                $info->session()->put('logged', true);
                $info->session()->put('user_id', $userData->user_id);
                $info->session()->put('user_name', $fullName);
                $info->session()->put('user_type', $userData->user_type);

                if($userData->user_type == 0 || $userData->user_type == 2 || $userData->user_type == 3){
                    return redirect()->route('dashboard');
                }
                else{
                    
                    return redirect('/')->with('message', 'Successful Login!');
                }

            }

        }
        else{

            $codeError = "Incorrect code. Please try again";
            
            return view('mainpage.emailVerification',compact('userID','codeError'));
        }
    }

    public function addtocart(Request $info){
        
        
        $productDetails = DB::table('carts')
                            ->select('*')
                            ->where([
                                'user_id' => session('user_id'),
                                'product_id' => $info['productID'],
                                'cart_status' => 0
                            ])->first();

        if($productDetails){

            $totalQuantity = $productDetails->cart_quantity + $info['quantity'];

            $data = [
                'user_id' => session('user_id'),
                'product_id' => $info['productID'],
                'quantity' => $totalQuantity
            ];


            Cart::addQuantityToProductCart($data);
        }
        else{

            $totalQuantity = $info['quantity'];

            $data = [
                'user_id' => session('user_id'),
                'product_id' => $info['productID'],
                'quantity' => $totalQuantity
            ];
    
            
            Cart::addtocart($data);
        }

        
        $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();
        
        session()->put('cartCount', count($cartProducts));
        session()->put('cartItems', $cartProducts);

    }

    public function fullcartdetails(){

        $grandTotal = 0;

        $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();

        foreach($cartProducts as $product){
            $grandTotal = $grandTotal + ($product->price * $product->cart_quantity);
        }
        
        return view('mainpage.cartdetails',compact('cartProducts','grandTotal'));
    }

    public function editproductcart(Request $info){
        Cart::editproductcart($info);
    }

    public function deletecartproduct(Request $info){
        
        Cart::where('cart_id',$info['cartID'])->delete();

        $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();
        
        session()->put('cartCount', count($cartProducts));
        session()->put('cartItems', $cartProducts);
    }

    public function loginregister(){

        $provinces = DB::table('provinces')
                        ->select('*')
                        ->orderBy('province_name')
                        ->get();

        return view('mainpage.LoginRegister',compact('provinces'));

    }

    public function getmunicipality(Request $data){

        $municipalities = DB::table('municipalities')
                            ->select('*')
                            ->where('province_code',$data['province_code'])
                            ->get();

        return response()->json($municipalities);
    }

    public function getbarangay(Request $data){

        $barangays = DB::table('barangays')
                            ->select('*')
                            ->where([
                                'province_code' => $data['province_code'],
                                'municipality_code' => $data['municipality_code'],
                            ])->get();
                            

        return response()->json($barangays);
    }

    public function checkoutdetails(){

        $grandTotal = 0;

        $userinfo = DB::table('users')
                            ->join('provinces','provinces.province_code','=','users.province')
                            ->join('municipalities','municipalities.municipality_code','=','users.municipality')
                            ->join('barangays','barangays.barangay_id','=','users.barangay')
                            ->select('provinces.province_name','municipalities.municipality_name','barangays.barangay_name','users.*')
                            ->where('users.user_id',session('user_id'))
                            ->first();
        
        $barangays = DB::table('barangays')
                        ->select('*')
                        ->orderBy('barangay_name')
                        ->get();

        $municipalities = DB::table('municipalities')
                        ->select('*')
                        ->orderBy('municipality_name')
                        ->get();

        $provinces = DB::table('provinces')
                        ->select('*')
                        ->orderBy('province_name')
                        ->get();

        
        $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();

        foreach($cartProducts as $product){
            $grandTotal = $grandTotal + ($product->price * $product->cart_quantity);
        }
       
        return view('mainpage.checkoutdetails',compact('userinfo','barangays','municipalities','provinces','grandTotal'));
    }

    public function test(){

        return view('admin.generateSalesReport');
        
    }

    public function placeorder(Request $data){

        $paymentStatus;
        $orderStatus;
        $paymentURL = null;

        if($data['payment_type'] == "Online Payment"){

            $info = $data->toArray();

            session()->put('checkoutInfo',$info);

            $paymentURL = $this->onlinePayment($data);

            return Redirect::to($paymentURL);
        }
        else{
            
            $itemsOrdered = "";

            foreach(session('cartItems') as $product){

                if($itemsOrdered == ""){
                    $itemsOrdered = $itemsOrdered.$product->product_id."-".$product->cart_quantity;
                }
                else{
                    $itemsOrdered = $itemsOrdered.",".$product->product_id."-".$product->cart_quantity;
                }

                Cart::changeCartStatus($product->cart_id);
            }
       
            Orders::insertOrder($data,"Pending",$itemsOrdered);

            $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();
        
            session()->put('cartCount', count($cartProducts));
            session()->put('cartItems', $cartProducts);

            return view('mainpage.successPayment');
        }

    
    }

    public function onlinePayment($data){

        $data['total'] = $data['total']."00";

        $total = (int)$data['total'];

        $info = [
            'data' => [
                'attributes' => [
                    'line_items' => [
                        [
                            'currency' => 'PHP',
                            'amount' => $total,
                            'description' => 'Marki Apparel item checkout',
                            'name' => 'Marki Apparel',
                            'quantity' => 1
                        ]
                    ],
                    'payment_method_types' => [
                        'card',
                        'gcash'
                    ],
                    'success_url' =>'http://127.0.0.1:8000/successpayment',
                    'cancel_url' => 'http://127.0.0.1:8000/checkoutdetails',
                    'description' => 'Marki Apparel'
                ],
            ]
        ];

        $response = Curl::to("https://api.paymongo.com/v1/checkout_sessions")
                    ->withHeader('Content-Type: application/json')
                    ->withHeader('accept: application/json')
                    ->withHeader('Authorization: Basic '.env('AUTH_PAY'))
                    ->withData($info)
                    ->asJson()
                    ->post();
        
        return $response->data->attributes->checkout_url;
    }

    public function successpayment(){
        
        $itemsOrdered = "";

        foreach(session('cartItems') as $product){

            if($itemsOrdered == ""){
                $itemsOrdered = $itemsOrdered.$product->product_id."-".$product->cart_quantity;
            }
            else{
                $itemsOrdered = $itemsOrdered.",".$product->product_id."-".$product->cart_quantity;
            }

            Cart::changeCartStatus($product->cart_id);
        }
       
        $cartProducts = DB::table('carts')
                        ->join('products','products.product_id','=','carts.product_id')
                        ->select('products.*','carts.*')
                        ->where('carts.user_id',session('user_id'))
                        ->where('carts.cart_status',0)
                        ->get();
        
        session()->put('cartCount', count($cartProducts));
        session()->put('cartItems', $cartProducts);

        Orders::insertOrder(session('checkoutInfo'),"Success",$itemsOrdered);

        return view('mainpage.successPayment');
    }

    public function orderstatus($status){

        $productIDs = [];
        $quantities = [];
        $orderIDs = [];

        $data = DB::table('orders')
                ->select('*')
                ->where('order_status',$status)
                ->where('user_id',session('user_id'))
                ->get('*');

        foreach($data as $info){
            $item = explode(',',$info->items_ordered);

            
            for($x = 0; $x < count($item); $x++){
                
                $products = explode('-',$item[$x]);
                
                array_push($productIDs,$products[0]);
                array_push($quantities,$products[1]);
                array_push($orderIDs,$info->order_id);
            }
        }

        $productDetails = DB::table('products')
                        ->select('*')
                        ->whereIn('product_id',$productIDs)
                        ->get();

        

        return view('mainpage.orderStatus',compact('productDetails','quantities','status','orderIDs'));
    }

    public function productdetails($id){

        $data = DB::table('products')
                ->select('*')
                ->where('product_id',$id)
                ->first();

        return view('admin.productDetails',compact('data'));
    }
    
    public function orders(){

        $info = [];

        $data = DB::table('orders')
                ->select('*')
                ->get();

        $counter = 0;
        foreach($data as $product){

            $itemsOrdered = "";

            $province = DB::table('provinces')
                        ->select('*')
                        ->where('province_code',$product->province)
                        ->first();
            
            $municipality = DB::table('municipalities')
                        ->select('*')
                        ->where('municipality_code',$product->municipality)
                        ->first();

            $barangay = DB::table('barangays')
                        ->select('*')
                        ->where('barangay_id',$product->barangay)
                        ->first();  
                        
            

            $item = explode(',',$product->items_ordered);

            
            for($x = 0; $x < count($item); $x++){
                
                $productQuantity = explode('-',$item[$x]);

                $productInfo = DB::table('products')
                                ->select('*')
                                ->where('product_id',$productQuantity[0])
                                ->first();

                if($itemsOrdered != ""){
                    $itemsOrdered = $itemsOrdered.'<br>'.$productInfo->product_name." - ".$productQuantity[1];
                }
                else{
                    $itemsOrdered = $itemsOrdered.$productInfo->product_name." - ".$productQuantity[1];
                }

                
            }

            

            $info[$counter] = [
                'Item Receiver' => $product->first_name." ".$product->last_name,
                'Shipping Address' => $product->address_information." Barangay ".$barangay->barangay_name.", ".$province->province_name." ".$municipality->municipality_name,
                'Contact Number' => $product->contact_number,
                'Item Orders' => $itemsOrdered,
                'Total' => $product->total,
                'Payment Type' => $product->payment_type,
                'Payment Status' => $product->payment_status,
                'Courier' => $product->courier,
                'Order Status' => $product->order_status,
                'Order Date' => date("F j, Y",strtotime($product->order_date)),
                'Order ID' => $product->order_id
            ];
            $lastProduct = $product;
            $counter++;
        }

        if ($lastProduct) { 
            $audittrail = "Admin " . session('user_name') . " changed order status of order (" . $lastProduct->order_id . ") to (" . $lastProduct->order_status . ")";
            Audittrail::addNewAction($audittrail);
        }

        return view ('admin.orderStatus', compact('info'));    
    }

    public function selectcourier(Request $data){

        Orders::selectcourier($data);

    }

    public function changeorderstatus(Request $data){

        Orders::changeorderstatus($data);
    }

    public function insertnewadminuser(Request $info){

        User::addnewadminuser($info);

        $audittrail = "Admin ".session('user_name')." added a new admin user (".$info['email_address'].")";

        Audittrail::addNewAction($audittrail);

        return redirect('/addnewadminuser');
    }

    public function viewadminusers(){

        $data = DB::table('users')
                    ->select('*')
                    ->where('user_type',2)
                    ->orWhere('user_type',3)
                    ->get();
        
        return view('admin.viewAdminUsers',compact('data'));
        
    }

    public function editadminuser($id){
        $info = DB::table('users')
                    ->select('*')
                    ->where('user_id',$id)
                    ->first();

        return view('admin.editadminuser',compact('info'));
    }

    public function adminuseredit(Request $info){

        User::adminuseredit($info);

        return redirect('/dashboard');
    }

    public function changeuserstatus(Request $data){

        User::changeuserstatus($data);
    }

    public function userprofile(){

        $info = DB::table('users')
                    ->select('*')
                    ->where('user_id', session('user_id'))
                    ->first();

        $province = DB::table('provinces')
                    ->select('*')
                    ->where('province_code',$info->province)
                    ->first();
        
        $municipality = DB::table('municipalities')
                    ->select('*')
                    ->where('municipality_code',$info->municipality)
                    ->first();

        $barangay = DB::table('barangays')
                    ->select('*')
                    ->where('barangay_id',$info->barangay)
                    ->first(); 

        $fullAddress = $info->address_information.", Barangay ".$barangay->barangay_name.", ".$municipality->municipality_name.", ".$province->province_name;

        return view('mainpage.userprofile',compact('info','fullAddress'));
    }

    public function customerprofileedit($id){

        $info = DB::table('users')
                    ->select('*')
                    ->where('user_id', $id)
                    ->first();

        $provinces = DB::table('provinces')
                    ->select('*')
                    ->get(); 
        
        $municipalities = DB::table('municipalities')
                    ->select('*')
                    ->get();

        $barangays = DB::table('barangays')
                    ->select('*')
                    ->get(); 
        
        return view('mainpage.customerprofileedit',compact('info','provinces','municipalities','barangays'));
    }

    public function editcustomerprofile(Request $data){

        User::editcustomerprofile($data);

        return redirect('/')->with('message', 'Successfully Edited Profile!');
    }
  
  public function audittrail(){

    $info = DB::table('audittrail')
            ->select('*')
            ->get();

        return view('admin.auditTrail' ,compact('info'));
  }
  public function showusers(){
      
    $users = User::all();

        return view('admin.allUsers', compact('users'));
  }

  public function postareview(Request $data){

    $product = DB::table('products')
                ->select('*')
                ->where('product_id',$data['product_id'])
                ->first();
    
    Comments::writeReview($data,session('user_id'));

    return redirect('/single-product/'.$product->product_name.":".$product->category.":".$product->color.":".$product->size)->with('message', 'Successfully Posted Review!');
  }

  public function generatemonthlysalesreport(){

    $years = [];

    $data = DB::table('orders')
            ->select('*')
            ->where('order_status','Delivered')
            ->get();

    foreach($data as $info){
        
        array_push($years,date("Y",strtotime($info->order_date)));
        
    }

    $years = array_unique($years);

    return view('admin.generateSalesReport',compact('years'));

  }

  public function monthsalesreport(Request $data){

    $orderIDs = [];
    $quantities = [];

    $sales = DB::table('orders')
                ->join('users','users.user_id','=','orders.user_id')
                ->select('orders.*','users.first_name as userfname','users.last_name as userlname')
                ->where('order_status','Delivered')
                ->whereMonth('order_date',$data['month'])
                ->whereYear('order_date',$data['year'])
                ->get();
    
    foreach($sales as $info){
        $item = explode(',',$info->items_ordered);
        
        for($x = 0; $x < count($item); $x++){
            
            $products = explode('-',$item[$x]);
            
            array_push($orderIDs,$products[0]);
            array_push($quantities,$products[1]);
        }
    }
        
    $productDetails = DB::table('products')
                        ->select('*')
                        ->whereIn('product_id',$orderIDs)
                        ->get();

    return view('admin.monthsalesreport',compact('sales','productDetails'));
  }

  public function cancelitemonorder(Request $info){

    $newItemsOrdered = "";

    $orderIDproductIDQuantity = explode("-",$info['productOrder']);

    $itemOrdered = DB::table('orders')
                    ->select('*')
                    ->where('order_id',$orderIDproductIDQuantity[0])
                    ->first();

    $orderedItems = explode(",",$itemOrdered->items_ordered);

    for($x = 0; $x < count($orderedItems); $x++){

        $productOrdered = explode("-",$orderedItems[$x]);

        if($orderIDproductIDQuantity[1] != $productOrdered[0]){
            if($newItemsOrdered == ""){
                $newItemsOrdered = $orderedItems[$x];
            }
            else{
                $newItemsOrdered = $newItemsOrdered.",".$orderedItems[$x];
            }
        }
    }

    if($newItemsOrdered == ""){

        $newItemsOrdered = "All items ordered are cancelled";
        
        Orders::cancelOrder($orderIDproductIDQuantity[0],$newItemsOrdered);
    }
    else{
        
        $product = DB::table('products')
                    ->select('*')
                    ->where('product_id',$orderIDproductIDQuantity[1])
                    ->first();

        $totalProductPrice = $product->price * $orderIDproductIDQuantity[2];

        $newTotal = $itemOrdered->total - $totalProductPrice;

        Orders::updateOrder($orderIDproductIDQuantity[0],$newItemsOrdered,$newTotal);
    }

    CancelOrders::insertCancelItem(session('user_id'),$orderIDproductIDQuantity[1],$orderIDproductIDQuantity[2],$info['cancelReason']);
    
  }

}