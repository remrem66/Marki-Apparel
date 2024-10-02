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
        'product_id'
    ];

    public static function addtocart($data){

        DB::table('carts')
            ->updateOrInsert([
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id'],
                'quantity' => $data['quantity']
            ]);
    }
}
