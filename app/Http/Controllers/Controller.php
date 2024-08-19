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

class Controller extends BaseController
{
    public function registerUser(Request $info){ 

        User::registerUser($info);

        return view('mainpage.LoginRegister');
    }

    public function insertnewproduct(Request $info){

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
}
