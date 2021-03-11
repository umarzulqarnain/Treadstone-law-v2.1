<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $fillable = ['task' , 'due' ,'type' , 'ref_file'];
}
