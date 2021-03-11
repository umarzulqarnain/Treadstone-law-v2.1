<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyers extends Model
{
    protected $fillable = [

        'id', 'firm_name' , 'first_name' , 'last_name' , 'gender' ,  'email' , 'phone', 'fax' ,

        'holder_firm_name' , 'holder_first_name' , 'holder_last_name' , 'holder_gender' ,
        'holder_email' , 'holder_phone', 'holder_fax',

        'approved_firm_name' , 'approved_first_name' , 'approved_last_name' , 'approved_gender' ,
        'approved_email' , 'approved_phone', 'approved_fax',

        'rejected_firm_name' , 'rejected_first_name' , 'rejected_last_name' , 'rejected_gender' ,
        'rejected_email' , 'rejected_phone', 'rejected_fax',

        'submitted_by' ,    'approved_by' , 'rejected_by' ,    'status' , 'ref_file' ,  'created_at' , 'updated_at'
    ];
}
