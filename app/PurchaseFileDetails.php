<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseFileDetails extends Model
{
    protected $fillable =[
        'id' , 'closing_date'  , 'is_condo' , 'require_certificate',
        'status_certificate' ,'company_name' ,'address' , 'email', 'number' ,

        'holder_closing_date'  , 'holder_is_condo' , 'holder_require_certificate',
        'holder_status_certificate' ,'holder_company_name' ,'holder_address' , 'holder_email', 'holder_number' ,

        'approved_closing_date'  , 'approved_is_condo' , 'approved_require_certificate',
        'approved_status_certificate' ,'approved_company_name' ,'approved_address' , 'approved_email', 'approved_number' ,

        'rejected_closing_date'  , 'rejected_is_condo' , 'rejected_require_certificate',
        'rejected_status_certificate' ,'rejected_company_name' ,'rejected_address' , 'rejected_email', 'rejected_number' ,

        'submitted_by' , 'approved_by' , 'rejected_by' ,  'status', 'ref_file' ,  'created_at' , 'updated_at' ];
}
