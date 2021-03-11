<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lenders extends Model
{
    protected $fillable =  ['name' ,'address' , 'converge_value' , 'priority' , 'gauranteed_replacement_cost' , 'doc'  , 'ref_file'];
}
