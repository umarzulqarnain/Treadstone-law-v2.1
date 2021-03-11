<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyers extends Model{


    protected $fillable = [
        'id',

        'first_name' , 'last_name'  , 'gender', 'address' ,  'city'  , 'postal_code' , 'email' ,

        'holder_first_name' , 'holder_last_name'  , 'holder_gender', 'holder_address' , 'hoder_city'  , 'holder_postal_code' , 'holder_email'  ,

        'approved_first_name' , 'approved_last_name'  , 'approved_gender', 'approved_address' , 'approved_city'  , 'approved_postal_code' , 'approved_email'  ,

        'rejected_first_name' , 'rejected_last_name'  , 'rejected_gender', 'rejected_address', 'rejected_city'  , 'rejected_postal_code' , 'rejected_email'  ,

        'submitted_by' ,  'rejected_by' , 'approved_by' , 'status', 'ref_file' ,  'created_at' , 'updated_at'] ;


}
