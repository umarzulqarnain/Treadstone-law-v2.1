<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_IN extends Model
{
    protected $table = 'payment_in';

    protected $fillable = ['company_name' , 'payment_method', 'amount', 'account_number', 'payee_name' ,'bank_name' , 'payment_type', 'doc' ,'ref_file'];
}
