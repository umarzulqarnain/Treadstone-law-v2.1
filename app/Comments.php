<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['comment' , 'ref_author' , 'ref_post'];



    public function author()
    {
        return $this->belongsTo(User::class , 'ref_author');
    }
}
