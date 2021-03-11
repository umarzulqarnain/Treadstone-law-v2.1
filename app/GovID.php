<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GovID extends Model
{

    protected $table = 'gov_ids';

    protected $fillable = [

        'id' ,

        'id_one_front' , 'id_one_back'  , 'id_two_front' , 'id_two_back'  ,

        'holder_id_one_front' , 'holder_id_one_back' , 'holder_id_two_front' , 'holder_id_two_back' ,

        'approved_id_one_front' , 'approved_id_one_back' , 'approved_id_two_front' , 'approved_id_two_back' ,

        'rejected_id_one_front' , 'rejected_id_one_back' , 'rejected_id_two_front' , 'rejected_id_two_back' ,

        'status_one_front', 'status_one_back' , 'status_two_front' ,'status_two_back' ,

        'submitted_by' , 'approved_by' , 'rejected_by',  'ref_seller'

    ];


}
