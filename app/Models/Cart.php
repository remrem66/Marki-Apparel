<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'user_id',
        'product_id',
        'cart_quantity'
    ];

    public static function addtocart($data){

        DB::table('carts')
            ->updateOrInsert([
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id'],
                'cart_quantity' => $data['quantity']
            ]);
    }

    public static function addQuantityToProductCart($data){

        DB::table('carts')
            ->where([
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id']
            ])->update([
                'cart_quantity' => $data['quantity']
            ]);
    }

    public static function editproductcart($data){
        DB::table('carts')
            ->where('cart_id',$data['cartID'])
            ->update([
                'cart_quantity' => $data['cartProductQuantity']
            ]);
    }
}
