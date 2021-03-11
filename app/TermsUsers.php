<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TermsUsers extends Model
{
    protected $fillable = ['id' , 'user_id' , 'file_id' , 'created_at'];

}

