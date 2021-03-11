<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    protected $fillable = [ 'appointment_time' , 'address' , 'signing_officer' , 'ref_file' ];

    public function User()
    {
        return $this->belongsTo(User::class , 'signing_officer');
    }

}
