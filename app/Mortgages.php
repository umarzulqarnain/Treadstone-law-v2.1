<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mortgages extends Model
{
    protected $fillable =[

        'account_holder' , 'bank_institution' , 'priority' , 'agreement','fire_insurance' ,

        'holder_account_holder' , 'holder_bank_institution' , 'holder_priority' , 'holder_agreement',
        'holder_fire_insurance' ,

        'approved_account_holder' , 'approved_bank_institution' , 'approved_priority' , 'approved_agreement',
        'approved_fire_insurance' ,

        'rejected_account_holder' , 'rejected_bank_institution' , 'rejected_priority' , 'rejected_agreement',
        'rejected_fire_insurance' ,


       'submitted_by',  'approved_by' , 'rejected_by' ,  'status', 'ref_file' ,  'created_at' , 'updated_at'];
}
