<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryKey extends Model
{
    protected $fillable = [

        'name',

        'holder_name' ,

        'approved_name' ,

        'rejected_name' ,

        'submitted_by' ,'approved_by' , 'rejected_by' , 'status' , 'ref_file' ,  'created_at' , 'updated_at'];
}
