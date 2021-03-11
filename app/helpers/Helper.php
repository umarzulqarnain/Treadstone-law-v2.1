<?php


use App\Finances;
use App\Lawyers;
use App\Lenders;
use App\MortgageInformation;
use App\Mortgages;
use App\Payment;
use App\Payment_IN;
use App\Payouts;
use App\Posts;
use App\Props;
use App\PropTax;
use App\Realtors;
use App\Sellers;
use App\Tasks;
use App\User;
use App\UserFileTypes;
use Illuminate\Support\Facades\DB;


if (!function_exists('complete_percentage')) {


    function complete_percentage($model, $table_name, $resource, $ref, $counted_columns, $uncounted_columns){

        // $uncounted_columns > the count of all the columns that are always filled and not null
        // $counted_columns > count of base cols
        $pos_info = DB::select(DB::raw('SHOW COLUMNS FROM ' . $table_name));
        //  $base_columns = count($pos_info);
        $base_columns = $counted_columns;
        $not_null = 0;

        // getting the count of the filled columns ( including id , created_at , updated_at..etc ) that are always filled
        //  , that's why they are not counted
        foreach ( $pos_info as $col ) {

            $not_null += app('App\\' . $model)::selectRaw('SUM(CASE WHEN ' . $col->Field . ' IS NOT NULL THEN 1 ELSE 0 END) AS not_null')->where($ref, '=', $resource)->first()->not_null;
        }

        return (($not_null - $uncounted_columns) / $base_columns) * 100;


    }
}

if (!function_exists('getPercentage')) {


    function getPercentage($model , $colsCount , $filedsArray  , $record_id ){


        $filledCols= 0;

        for($i=0; $i< $colsCount; $i++){

            $rowInfo = app('App\\' . $model)::where('ref_file' , $record_id )->first();
            if(!empty( $rowInfo[$filedsArray[$i]])){
                $filledCols++;
            }

        }
        echo ( $filledCols / $colsCount) * 100;


    }

    // to use this
    //ex :  $fields = array('firm_name' , 'first_name' , 'last_name',  'gender' ,'email' ,'phone' , 'fax');
    //    getPercentage('Lawyers' , count($fields) , $fields , 1 );
}

if (!function_exists('fileLastTimeEdited')) {


    function fileLastTimeEdited($id){

        \App\Files::where('id' , $id)->update([

            'updated_at'=> \Carbon\Carbon::now()

        ]);



    }


}


























?>
