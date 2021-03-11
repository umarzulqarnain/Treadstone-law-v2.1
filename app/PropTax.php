<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropTax extends Model
{
    protected $fillable = [

        'roll_number' , 'city' , 'annual_tax' , 'annual_paid_to_date' , 'tax_bill'  ,

        'holder_roll_number' , 'holder_city' , 'holder_annual_tax' , 'holder_annual_paid_to_date' , 'holder_tax_bill'  ,

        'approved_roll_number' , 'approved_city' , 'approved_annual_tax' , 'approved_annual_paid_to_date' , 'approved_tax_bill'  ,

        'rejected_roll_number' , 'rejected_city' , 'rejected_annual_tax' , 'rejected_annual_paid_to_date' , 'rejected_tax_bill'  ,

       'submitted_by' ,  'approved_by' , 'rejected_by' ,  'status', 'ref_file' ,  'created_at' , 'updated_at' ];
}
