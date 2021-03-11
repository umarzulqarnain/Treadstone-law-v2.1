<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{


    protected $fillable = ['sender_id', 'subject' , 'body' , 'date' , 'address' , 'closing_date' , 'seen' , 'user_id' , 'created_at'];


    public function sender()
    {
        return $this->belongsTo(User::class , 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class , 'user_id');
    }






















}
