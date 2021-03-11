<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MortgageInformation extends Model
{
    protected $fillable = ['used_mortgage_broker' , 'first_name'  ,'last_name' ,'email' , 'phone' , 'ref_file' ];
}
