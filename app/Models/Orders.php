<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class Orders extends Model
{
    use HasFactory;


    public static function insertOrder($data,$paymentStatus,$itemsOrdered){

        DB::table('orders')
            ->insert([
                'user_id' => session('user_id'),
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'province' => $data['province'],
                'municipality' => $data['municipality'],
                'barangay' => $data['barangay'],
                'address_information' => $data['address_information'],
                'contact_number' => $data['contact_number'],
                'items_ordered' => $itemsOrdered,
                'total' => $data['total'],
                'payment_type' => $data['payment_type'],
                'payment_status' => $paymentStatus
            ]);
    }

    public static function selectcourier($data){

        DB::table('orders')
            ->where('order_id', $data['orderID'])
            ->update([
                'courier' => $data['courier'],
                'order_status' => "Dispatched"
            ]);
    }

    public static function changeorderstatus($data){

        DB::table('orders')
            ->where('order_id', $data['orderID'])
            ->update([
                'order_status' => $data['status']
            ]);
    }

    public static function cancelOrder($orderID,$itemsOrdered){

        DB::table('orders')
            ->where('order_id', $orderID)
            ->update([
                'items_ordered' => $itemsOrdered,
                'order_status' => "Cancelled"
            ]);
    }

    public static function updateOrder($orderID,$itemsOrdered,$total){

        DB::table('orders')
            ->where('order_id', $orderID)
            ->update([
                'items_ordered' => $itemsOrdered,
                'total' => $total
            ]);
    }
}
