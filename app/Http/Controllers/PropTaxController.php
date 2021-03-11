<?php

namespace App\Http\Controllers;

use App\PropTax;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropTaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


        $roll_number = $request->get('roll_number');
        $city = $request->get('city');
        $annual_taxes = $request->get('annual_taxes');
        $annual_paid_to  = $request->get('annual_paid_to');
        $fileid = $request->get('fileid');

        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = PropTax::where('ref_file' , $fileid)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }


        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
        }else{
            $user_type = auth()->user()->type;
        }



        //last time the file was edited
        fileLastTimeEdited($fileid);

        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))
        if($status == "pending") {

            if (
                empty($roll_number) &&
                empty($city) &&
                empty($annual_taxes) &&
                empty($annual_paid_to)

            ) {

                $status = 'completed';

            }
        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if($file = $request->file('tax_bill')){

                $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads/TaxBills'), $new_name);

                if(DB::table('prop_taxes')->updateOrInsert(
                    ['ref_file' => $fileid ],
                    [

                        'roll_number' => $roll_number,
                        'city' => $city,
                        'annual_tax' => $annual_taxes,
                        'annual_paid_to_date' => $annual_paid_to ,
                        'tax_bill' => $new_name ,
                        'status' => 'completed' ,

                    ] )){

                    return response()->json([

                        'message'   => 'SUCCESS',

                    ]);

                }

            }
            else {

                if(PropTax::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [
                        'roll_number' => $roll_number,
                        'city' => $city,
                        'annual_tax' => $annual_taxes,
                        'annual_paid_to_date' => $annual_paid_to ,
                        'status' => 'completed' ,

                    ]
                )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);
                }


            }





        }
        else{


            if($status == 'completed'){

                if($file = $request->file('tax_bill')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/TaxBills'), $new_name);

                    if(DB::table('prop_taxes')->updateOrInsert(
                        ['ref_file' => $fileid ],
                        [

                            'roll_number' => $roll_number,
                            'city' => $city,
                            'annual_tax' => $annual_taxes,
                            'annual_paid_to_date' => $annual_paid_to ,
                            'tax_bill' => $new_name ,
                            'status' => $status ,

                        ] )){

                        return response()->json([

                            'message'   => 'SUCCESS',

                        ]);

                    }

                }
                else {

                    if(PropTax::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [
                            'roll_number' => $roll_number,
                            'city' => $city,
                            'annual_tax' => $annual_taxes,
                            'annual_paid_to_date' => $annual_paid_to ,
                            'status' => $status ,

                        ]
                    )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }


                }

            }

            elseif ($status == 'pending'){

                if($file = $request->file('tax_bill')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/TaxBills'), $new_name);

                    if(DB::table('prop_taxes')->updateOrInsert(
                        ['ref_file' => $fileid ],
                        [

                            'holder_roll_number' => $roll_number,
                            'holder_city' => $city,
                            'holder_annual_tax' => $annual_taxes,
                            'holder_annual_paid_to_date' => $annual_paid_to ,
                            'holder_tax_bill' => $new_name ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => $status ,


                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }

                }
                else {

                    if(PropTax::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [
                            'holder_roll_number' => $roll_number,
                            'holder_city' => $city,
                            'holder_annual_tax' => $annual_taxes,
                            'holder_annual_paid_to_date' => $annual_paid_to ,

                            'submitted_by'=> auth()->user()->type ,

                            'status' => $status ,


                        ]
                    )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }


                }
            }

            elseif ($status == 'approve'){

                $Info = PropTax::where('ref_file', $fileid)->first();

                if(DB::table('prop_taxes')->updateOrInsert(
                    ['ref_file' => $fileid ],
                    [

                        'roll_number' => $Info->holder_roll_number,
                        'city' => $Info->holder_city,
                        'annual_tax' => $Info->holder_annual_tax,
                        'annual_paid_to_date' => $Info->holder_annual_paid_to_date ,
                        'tax_bill' => $Info->holder_tax_bill ,

                        'approved_roll_number' => $Info->holder_roll_number,
                        'approved_city' => $Info->holder_city,
                        'approved_annual_tax' => $Info->holder_annual_tax,
                        'approved_annual_paid_to_date' => $Info->holder_annual_paid_to_date ,
                        'approved_tax_bill' => $Info->holder_tax_bill ,

                        'approved_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Approval Date/Time: ' . Carbon::now() ,


                        'status' => 'completed' ,


                    ] )){


                    echo 'SUCCESS';



                }



            }

            elseif ($status == 'reject'){

                $Info = PropTax::where('ref_file', $fileid)->first();

                if(DB::table('prop_taxes')->updateOrInsert(
                    ['ref_file' => $fileid ],
                    [

                        'rejected_roll_number' => $Info->holder_roll_number,
                        'rejected_city' => $Info->holder_city,
                        'rejected_annual_tax' => $Info->holder_annual_tax,
                        'rejected_annual_paid_to_date' => $Info->holder_annual_paid_to_date ,
                        'rejected_tax_bill' => $Info->holder_tax_bill ,

                        'rejected_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now() ,

                        'status' => 'completed' ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }

            }


        }





    }

    public function bill_download($path){

        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/TaxBills/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }

    public function bill_delete($id)
    {
        if(PropTax::where('id' , $id)->update(['tax_bill'=>''])){

            return redirect()->back();
        }else {

            echo 'Error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropTax  $propTax
     * @return \Illuminate\Http\Response
     */
    public function show(PropTax $propTax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropTax  $propTax
     * @return \Illuminate\Http\Response
     */
    public function edit(PropTax $propTax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropTax  $propTax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropTax $propTax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropTax  $propTax
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropTax $propTax)
    {
        //
    }
}
