<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $fillable =[

        'file_name' ,'closing_date','first_name', 'last_name','address','city' , 'province',
        'postal_code','email',  'status','progress' , 'closing_document_status'  , 'singing_document_status' ,
        'homeowners_section_submitted' , 'file_type' , 'deal_firm', 'token' , 'created_at'

    ];


    public function sellers()
    {
        return $this->hasMany(Sellers::class , 'ref_file');
    }

    public function file_info()
    {
        return $this->hasOne(FileInformation::class , 'ref_file');
    }

    public function prop()
    {
        return $this->hasOne(Props::class , 'ref_file');
    }

    public function tasks()
    {
        return $this->hasMany(Tasks::class , 'ref_file')->count();
    }

    public function posts()
    {
        return $this->hasMany(Posts::class , 'ref_file')->count();
    }

}
