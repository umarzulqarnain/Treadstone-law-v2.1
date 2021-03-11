<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BridgeLoan extends Model
{
    protected $fillable =[

        'id' ,'obtain_bridge_loan' , 'presents_you' ,  'account_holder' , 'bank_institution' , 'priority' ,
        'agreement','fire_insurance' , 'firm_name' , 'first_name' , 'last_name' , 'gender' ,  'email' ,
        'phone', 'fax' ,

        'holder_obtain_bridge_loan' ,'holder_account_holder' , 'holder_bank_institution' , 'holder_priority' ,
        'holder_agreement','holder_fire_insurance' ,'holder_presents_you' , 'holder_firm_name' , 'holder_first_name' , 'holder_last_name' ,
        'holder_gender' , 'holder_email' , 'holder_phone', 'holder_fax',

        'approved_obtain_bridge_loan' ,'approved_account_holder' , 'approved_bank_institution' , 'approved_priority' ,
        'approved_agreement','approved_fire_insurance' ,'holder_presents_you' , 'approved_firm_name' , 'approved_first_name' , 'approved_last_name' ,
        'approved_gender' , 'approved_email' , 'approved_phone', 'approved_fax',

        'rejected_obtain_bridge_loan' ,'rejected_account_holder' , 'rejected_bank_institution' , 'rejected_priority' ,
        'rejected_agreement','rejected_fire_insurance' ,'rejected_presents_you' , 'rejected_firm_name' , 'rejected_first_name' , 'rejected_last_name' ,
        'rejected_gender' , 'rejected_email' , 'rejected_phone', 'rejected_fax',

        'submitted_by' , 'approved_by' , 'rejected_by' ,   'status' , 'created_at' , 'updated_at', 'ref_file'];
}
