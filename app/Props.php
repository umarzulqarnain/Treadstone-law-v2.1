<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Props extends Model
{
    protected $fillable = [

        'street_address'  , 'city' , 'province' , 'postal_code' ,

        'holder_street_address'  , 'holder_city' , 'holder_province' , 'holder_postal_code' ,

        'approved_street_address'  , 'approved_city' , 'approved_province' , 'approved_postal_code' ,

        'rejected_street_address'  , 'rejected_city' , 'rejected_province' , 'rejected_postal_code' ,

        'submitted_by' ,    'rejected_by'  , 'approved_by', 'status' , 'ref_file' ,  'created_at' , 'updated_at' ];
}
