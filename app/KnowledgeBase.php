<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBase extends Model
{

    protected $fillable = [ 'question', 'answer', 'video_url' , 'type' , 'user_type' , 'created_at'];

}
