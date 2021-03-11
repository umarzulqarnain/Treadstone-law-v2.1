<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Realtors extends Model
{

    protected $fillable = [

        'id',  'used_realtor' , 'realtor_type',  'first_name' , 'last_name' , 'gender' ,'email' , 'phone' ,
        'total_commission' , 'percentage_commission'  ,

        'holder_used_realtor' , 'holder_realtor_type',  'holder_first_name' , 'holder_last_name' , 'holder_gender' ,
        'holder_email' , 'holder_phone' , 'holder_total_commission' , 'holder_percentage_commission' ,

        'approved_used_realtor' , 'approved_realtor_type',  'approved_first_name' , 'approved_last_name' , 'approved_gender' ,
        'approved_email' , 'approved_phone' , 'approved_total_commission' , 'approved_percentage_commission' ,


        'rejected_used_realtor' , 'rejected_realtor_type',  'rejected_first_name' , 'rejected_last_name' , 'rejected_gender' ,
        'rejected_email' , 'rejected_phone' , 'rejected_total_commission' , 'rejected_percentage_commission' ,


        'submitted_by' ,  'rejected_by' , 'approved_by' ,  'status' , 'ref_file' ,  'created_at' , 'updated_at' ];


}
