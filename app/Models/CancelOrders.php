<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class CancelOrders extends Model
{
    use HasFactory;

    public static function insertCancelItem($user_id,$product_id,$quantity,$reason){

        DB::table('cancel_orders')
            ->insert([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'cancel_reason' => $reason
            ]);
    }
}
