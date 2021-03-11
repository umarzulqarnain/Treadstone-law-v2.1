<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileDocuments extends Model
{
    protected $fillable  = ['title', 'doc' , 'doc_two' , 'instructions' , 'comment' , 'status' ,  'type','requested_from',  'ref_file' , 'created_at'];
}
