<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payouts extends Model
{
    protected $fillable = ['bank_institution' ,'account_number' ,
                        'priority' , 'amount' , 'per_dim' , 'discharge_statement' , 'ref_file'];
}
