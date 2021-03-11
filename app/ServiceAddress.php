<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceAddress extends Model
{
    protected $fillable = [
        'id' ,

        'address' , 'city' , 'province'  , 'postal_code'  ,

        'holder_address' , 'holder_city' , 'holder_province'  , 'holder_postal_code'  ,

        'approved_address' , 'approved_city' , 'approved_province'  , 'approved_postal_code'  ,

        'rejected_address' , 'rejected_city' , 'rejected_province'  , 'rejected_postal_code'  ,

        'submitted_by' , 'approved_by'  , 'rejected_by',   'status', 'ref_seller' ,  'created_at' , 'updated_at' ];
}
