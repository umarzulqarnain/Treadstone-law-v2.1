<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFileTypes extends Model{


    protected $fillable = [

        'file_id' , 'user_id' , 'type' ,'homeowners_section_submitted' , 'sellers_buyers_section_submitted' ,  'financial_section_submitted' ,

        'realestae_section_submitted'

    ];


    public function User(){

        return $this->belongsTo(User::class , 'user_id');
    }

    public function File(){

        return $this->belongsTo(Files::class , 'file_id');
    }


}
