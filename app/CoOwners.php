<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoOwners extends Model
{
    protected $fillable =['id' , 'first_name' ,'last_name' , 'birth_date'  , 'address' ,
                        'city' , 'postal_code' , 'email' ,'phone' , 'ref_seller'];
}
