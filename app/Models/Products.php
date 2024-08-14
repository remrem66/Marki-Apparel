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
}
