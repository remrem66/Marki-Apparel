<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class Comments extends Model
{
    use HasFactory;

    public static function writeReview($data,$user_id){

        DB::table('comments')
            ->insert([
                'product_id' => $data['product_id'],
                'user_id' => $user_id,
                'comment' => $data['review']
            ]);
    }
}
