<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class Products extends Model
{
    use HasFactory;

    public static function insertnewproduct($info){

       $counter = 1;


        $id = DB::table('products')
                ->insertGetId([
                    'product_name' => $info['product_name'],
                    'category' => $info['category'],
                    'color' => $info['color'],
                    'size' => $info['size'],
                    'price' => $info['price'],
                    'quantity' => $info['quantity'],
                    'description' => $info['description'],
                ]);
        
        
        foreach($info->file('pictures') as $file){
            $file->move(public_path('/mainpage/images'), $file->getClientOriginalName());
            
            DB::table('products')
                ->where('product_id',$id)
                ->update([
                    'picture'.$counter => $file->getClientOriginalName()
                ]);
            
            $counter = $counter + 1;
        }
    }

    public static function addproductvariation($info,$product){

        $counter = 1;
 
 
         $id = DB::table('products')
                 ->insertGetId([
                     'product_name' => $product->product_name,
                     'category' => $product->category,
                     'color' => $info['color'],
                     'size' => $info['size'],
                     'price' => $info['price'],
                     'quantity' => $info['quantity'],
                     'description' => $product->description,
                 ]);
         
         
         foreach($info->file('pictures') as $file){
             $file->move(public_path('/mainpage/images'), $file->getClientOriginalName());
             
             DB::table('products')
                 ->where('product_id',$id)
                 ->update([
                     'picture'.$counter => $file->getClientOriginalName()
                 ]);
             
             $counter = $counter + 1;
         }
     }

    public static function productedit($info){

        DB::table('products')
            ->where('product_id',$info['product_id'])
            ->update([
                'product_name' => $info['product_name'],
                    'category' => $info['category'],
                    'color' => $info['color'],
                    'size' => $info['size'],
                    'price' => $info['price'],
                    'quantity' => $info['quantity'],
                    'description' => $info['description']
            ]);
    }

    public static function updateStock($productID,$quantity){
        DB::table('products')
            ->where('product_id',$productID)
            ->decrement('quantity',$quantity);
    }

    public static function addCancelledStock($productID,$quantity){
        DB::table('products')
            ->where('product_id',$productID)
            ->increment('quantity',$quantity);
    }

    public static function changeproductstatus($data){
        DB::table('products')
            ->where('product_id',$data['product_id'])
            ->update([
                'status' => $data['status']
            ]);
    }
}
