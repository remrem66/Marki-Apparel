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
}
