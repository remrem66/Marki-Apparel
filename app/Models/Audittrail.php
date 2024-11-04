<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class Audittrail extends Model
{

    protected $fillable = [
        'action', 
        'date_added'
    ];

    public static function addNewAction($info){
    
        DB::table('audittrail')
            ->insert([
                'action' => $info
            ]);
        }
}