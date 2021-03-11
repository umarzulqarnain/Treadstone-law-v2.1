<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sellers extends Model
{

    protected $fillable = [

        'id',
        'first_name' , 'last_name' , 'birth_date' , 'address' , 'city' , 'gender','postal_code' ,
        'email' , 'phone' , 'is_client_primary' ,'is_married' , 'is_spouse_on_title' ,

        'holder_first_name' , 'holder_last_name' , 'holder_birth_date' , 'holder_address' , 'holder_city' , 'holder_gender','holder_postal_code' ,
        'holder_email' , 'holder_phone' , 'holder_is_client_primary' ,'holder_is_married' , 'holder_is_spouse_on_title' ,

        'approved_first_name' , 'approved_last_name' , 'approved_birth_date' , 'approved_address' , 'approved_city' , 'approved_gender','approved_postal_code' ,
        'approved_email' , 'approved_phone' , 'approved_is_client_primary' ,'approved_is_married' , 'approved_is_spouse_on_title' ,

         'rejected_first_name' , 'rejected_last_name' , 'rejected_birth_date' , 'rejected_address' , 'rejected_city' , 'rejected_gender','rejected_postal_code' ,
        'rejected_email' , 'rejected_phone' , 'rejected_is_client_primary' ,'rejected_is_married' , 'rejected_is_spouse_on_title' ,

        'submitted_by', 'approved_by', 'rejected_by',  'status',  'ref_file' ,  'created_at' , 'updated_at'

    ];




    function service(){

      return  $this->hasOne(ServiceAddress::class , 'ref_seller');
    }

    function seller_ids(){

      return  $this->hasOne(GovID::class , 'ref_seller');

    }



}