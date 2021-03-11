<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositeSale extends Model
{
    protected $fillable = [

        'client_bank_name' , 'client_account_holder' , 'client_account_number' ,'client_transit_number','client_void_check' ,

        'holder_client_bank_name' , 'holder_client_account_holder' , 'holder_client_account_number' ,'holder_client_transit_number',
        'holder_client_void_check' ,

        'approved_client_bank_name' , 'approved_client_account_holder' , 'approved_client_account_number' ,'approved_client_transit_number',
        'approved_client_void_check' ,

        'rejected_client_bank_name' , 'rejected_client_account_holder' , 'rejected_client_account_number' ,'rejected_client_transit_number',
        'rejected_client_void_check' ,

        'submitted_by' , 'approved_by', 'rejected_by', 'status', 'ref_file' ,  'created_at' , 'updated_at'  ];
}
