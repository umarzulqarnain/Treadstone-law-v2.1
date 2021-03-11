<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [
        'type' , 'roll_number'  , 'amount'  , 'payment_method'  ,  'account_number' ,  'need_to_be_paid',
        'email' ,  'phone'  , 'name' , 'doc' , 'priority' , 'payee_name' , 'mailing_address' , 'payable_to' ,
        'city' , 'postal_code', 'pay_type',

        'holder_type' , 'holder_roll_number'  , 'holder_amount'  , 'holder_payment_method'  ,  'holder_account_number' ,
        'holder_need_to_be_paid', 'holder_email' ,  'holder_phone'  , 'holder_name' , 'holder_doc' , 'holder_priority' ,
        'holder_payee_name' , 'holder_mailing_address' , 'holder_payable_to' ,  'holder_city' , 'holder_postal_code',
        'holder_pay_type',

        'approved_type' , 'approved_roll_number'  , 'approved_amount'  , 'approved_payment_method'  ,  'approved_account_number' ,
        'approved_need_to_be_paid', 'approved_email' ,  'approved_phone'  , 'approved_name' , 'approved_doc' , 'approved_priority' ,
        'approved_payee_name' , 'approved_mailing_address' , 'approved_payable_to' ,  'approved_city' , 'approved_postal_code',
        'approved_pay_type',

        'rejected_type' , 'rejected_roll_number'  , 'rejected_amount'  , 'rejected_payment_method'  ,  'rejected_account_number' ,
        'rejected_need_to_be_paid', 'rejected_email' ,  'rejected_phone'  , 'rejected_name' , 'approved_doc' , 'rejected_priority' ,
        'rejected_payee_name' , 'rejected_mailing_address' , 'rejected_payable_to' ,  'rejected_city' , 'rejected_postal_code',
        'rejected_pay_type',


       'submitted_by' ,  'approved_by' , 'rejected_by' ,  'status' , 'ref_file' ,  'created_at' , 'updated_at' ];

}
