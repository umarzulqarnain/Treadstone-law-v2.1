<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finances extends Model
{
    protected $fillable = [ 'bank_name' , 'account_holder' ,'account_number' , 'transit_number' ,
                            'void_check' ,'total_amount' ,  'ref_payment'];

}
