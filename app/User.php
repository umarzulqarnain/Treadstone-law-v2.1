<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;



class User extends Authenticatable //implements MustVerifyEmail
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'id' , 'name', 'last_name',  'email', 'fake_email','password' , 'type' ,'phone' ,'image' , 'last_name' , 'home_phone' ,
        'business_phone' , 'contact_method' , 'gender' , 'address_line_one' , 'address_line_two' , 'city' ,'postal_code' ,
        'province' , 'birth_date' , 'transactions' , 'agreed_to_terms' , 'first_login' 

    ];


    public function active_files(){

        return $this->hasMany(Files::class , 'user_id')->where('status' , 'active');
    }

//    public function userType($file_id){
//
//        return $this->hasMany(UserFileTypes::class , 'user_id')->where('status' , 'active');
//    }




    public function completed_files()
    {
        return $this->hasMany(Files::class , 'user_id')->where('status' , 'closed');
    }

    public function opened_for_first_time($id){

        return $this->hasOne(TermsUsers::class , 'user_id')->where('file_id' , $id);
    }


//    public function payments()
//    {
//        return $this->hasMany(Payment::class , 'user_id');
//    }



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     *
     *
     *
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
