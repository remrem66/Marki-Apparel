<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'contact_number',
        'address',
        'user_type',
        'password',
        'gender',
        'birthday',
        'date_created'
    ];


    public static function registeruser($info){

        if(!empty($info['profile_picture'])){

            DB::table('users')
                ->insert([
                    'first_name' => $info['first_name'],
                    'last_name' => $info['last_name'],
                    'gender' => $info['gender'],
                    'birthday' => $info['birthday'],
                    'province' => $info['province'],
                    'municipality' => $info['municipality'],
                    'barangay' => $info['barangay'],
                    'address_information' => $info['address_information'],
                    'email_address' => $info['email_address'],
                    'contact_number' => $info['contact_number'],
                    'password' => Hash::make($info['password']),
                    'profile_picture' => $info->file('profile_picture')->getClientOriginalName()
                ]);

            $info->file('profile_picture')->move(public_path('/profile pictures'),$info->file('profile_picture')->getClientOriginalName());
        }
        else{
            DB::table('users')
                ->insert([
                    'first_name' => $info['first_name'],
                    'last_name' => $info['last_name'],
                    'gender' => $info['gender'],
                    'birthday' => $info['birthday'],
                    'province' => $info['province'],
                    'municipality' => $info['municipality'],
                    'barangay' => $info['barangay'],
                    'address_information' => $info['address_information'],
                    'email_address' => $info['email_address'],
                    'contact_number' => $info['contact_number'],
                    'password' => Hash::make($info['password'])
                ]);
        }
        
    }

    public static function insertVerificationCode($code,$userID){
        DB::table('users')
            ->where('user_id',$userID)
            ->update([
                'verification_code' => $code,
            ]);
    }

    public static function verifyUser($userID){
        DB::table('users')
            ->where('user_id',$userID)
            ->update([
                'is_verified' => 1
            ]);
    }
}


