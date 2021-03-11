<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discharges extends Model
{

    protected $fillable = [ 'method' , 'bank_name' , 'registered' , 'ref_file'];
}
