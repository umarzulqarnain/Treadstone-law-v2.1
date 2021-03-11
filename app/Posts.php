<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['id' , 'post' , 'ref_author' , 'ref_file' ,  'created_at'];


    public function author(){

        return $this->belongsTo(User::class , 'ref_author');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class , 'ref_post');
    }



}
