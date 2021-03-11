<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileInformation extends Model
{

    protected $fillable = [

        'file_price','is_deposit_received' , 'much_received' , 'who_received' , 'other_receiver',

        'holder_file_price', 'holder_is_deposit_received' , 'holder_much_received' , 'holder_who_received' ,
        'holder_other_receiver',

        'approved_file_price', 'approved_is_deposit_received' , 'approved_much_received' , 'approved_who_received' ,
        'approved_other_receiver',

        'rejected_file_price', 'rejected_is_deposit_received' , 'rejected_much_received' , 'rejected_who_received' ,
        'rejected_other_receiver',


        'submitted_by' , 'approved_by' , 'rejected_by'  ,    'status' , 'ref_file' , 'created_at' , 'updated_at'];
}
