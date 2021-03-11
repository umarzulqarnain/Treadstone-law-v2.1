<?php

namespace App\Http\Controllers;

use App\DepositeSale;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DepositeSaleController extends Controller
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
    public function store(Request $request)
    {
        $client_bank_name = $request->get('client_bank_name');
        $client_account_holder = $request->get('client_account_holder');
        $client_account_number = $request->get('client_account_number');
        $client_transit_number = $request->get('client_transit_number');
        $fileid = $request->get('ref_file');


        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = DepositeSale::where('ref_file' , $fileid)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }

        //last time the file was edited
        fileLastTimeEdited($fileid);

        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
        }
        else{
            $user_type = auth()->user()->type;
        }

        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))

        if($status == "pending") {

            if (
                empty($client_bank_name) &&
                empty($client_account_holder) &&
                empty($client_account_number) &&
                empty($client_transit_number)

            ) {

                $status = 'completed';

            }
        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {
            if($file = $request->file('client_void_check')) {

                $client_void_check = date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads/voidChecks'), $client_void_check);

                if(DepositeSale::updateOrCreate(
                    [ 'ref_file' => $fileid ],
                    [

                        'client_bank_name' => $client_bank_name ,
                        'client_account_holder' =>  ucwords(strtolower($client_account_holder)) ,
                        'client_account_number' => $client_account_number,
                        'client_transit_number' => $client_transit_number,
                        'client_void_check' => $client_void_check,
                        'status' => 'completed',
                        'ref_file' => $fileid

                    ]
                )){

                    if(request()->ajax()){


                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }
                    else{

                        return redirect()->back();

                    }
                }else {

                    echo 'Error' ;
                }



            }
            else{

                if(DepositeSale::updateOrCreate(
                    [ 'ref_file' => $fileid ],
                    [

                        'client_bank_name' => $client_bank_name,
                        'client_account_holder' => $client_account_holder,
                        'client_account_number' => $client_account_number,
                        'client_transit_number' => $client_transit_number,
                        'status' => 'completed',

                    ]
                )){

                    if(request()->ajax()){


                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }
                    else{

                        return redirect()->back();

                    }
                }else {

                    echo 'Error' ;
                }

            }


        }
        else{

            if($status == 'completed'){

                if($file = $request->file('client_void_check')) {

                    $client_void_check = date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/voidChecks'), $client_void_check);

                    if(DepositeSale::updateOrCreate(
                        [ 'ref_file' => $fileid ],
                        [

                            'client_bank_name' => $client_bank_name ,
                            'client_account_holder' =>  ucwords(strtolower($client_account_holder)) ,
                            'client_account_number' => $client_account_number,
                            'client_transit_number' => $client_transit_number,
                            'client_void_check' => $client_void_check,
                            'status' => $status,
                            'ref_file' => $fileid

                        ]
                    )){

                        if(request()->ajax()){


                            return response()->json([

                                'message'   => 'SUCCESS',
                            ]);

                        }
                        else{

                            return redirect()->back();

                        }
                    }else {

                        echo 'Error' ;
                    }



                }
                else{

                    if(DepositeSale::updateOrCreate(
                        [ 'ref_file' => $fileid ],
                        [

                            'client_bank_name' => $client_bank_name,
                            'client_account_holder' => $client_account_holder,
                            'client_account_number' => $client_account_number,
                            'client_transit_number' => $client_transit_number,
                            'status' => $status,

                        ]
                    )){

                        if(request()->ajax()){


                            return response()->json([

                                'message'   => 'SUCCESS',
                            ]);

                        }
                        else{

                            return redirect()->back();

                        }
                    }else {

                        echo 'Error' ;
                    }

                }
            }

            elseif ($status == 'pending'){

                if($file = $request->file('client_void_check')) {

                    $client_void_check = date('Y-m-d-H-i-s') . '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/voidChecks'), $client_void_check);

                    if(DepositeSale::updateOrCreate(
                        [ 'ref_file' => $fileid ],
                        [

                            'holder_client_bank_name' => $client_bank_name ,
                            'holder_client_account_holder' =>  ucwords(strtolower($client_account_holder)) ,
                            'holder_client_account_number' => $client_account_number,
                            'holder_client_transit_number' => $client_transit_number,
                            'holder_client_void_check' => $client_void_check,

                            'submitted_by'=>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => $status,

                        ]
                    )){
                        if(request()->ajax()){


                            echo 'SUCCESS';


                        }
                        else{

                            return redirect()->back();

                        }
                    }else {

                        echo 'Error' ;
                    }



                }
                else{

                    if(DepositeSale::updateOrCreate(
                        [ 'ref_file' => $fileid ],
                        [

                            'holder_client_bank_name' => $client_bank_name ,
                            'holder_client_account_holder' =>  ucwords(strtolower($client_account_holder)) ,
                            'holder_client_account_number' => $client_account_number,
                            'holder_client_transit_number' => $client_transit_number,

                            'submitted_by'=>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => $status,

                        ]
                    )){

                        if(request()->ajax()){


                            echo 'SUCCESS';


                        }
                        else{

                            return redirect()->back();

                        }
                    }else {

                        echo 'Error' ;
                    }

                }


            }

            elseif ($status == 'approve'){

                $Info = DepositeSale::where('ref_file', $fileid)->first();


                if(DepositeSale::updateOrCreate(
                    [ 'ref_file' => $fileid ],
                    [

                        'client_bank_name' => $Info->holder_client_bank_name ,
                        'client_account_holder' =>  ucwords(strtolower($Info->holder_client_account_holder)) ,
                        'client_account_number' => $Info->holder_client_account_number,
                        'client_transit_number' => $Info->holder_client_transit_number,
                        'client_void_check' => $Info->holder_client_void_check,

                        'approved_client_bank_name' => $Info->holder_client_bank_name ,
                        'approved_client_account_holder' =>  ucwords(strtolower($Info->holder_client_account_holder)) ,
                        'approved_client_account_number' => $Info->holder_client_account_number,
                        'approved_client_transit_number' => $Info->holder_client_transit_number,
                        'approved_client_void_check' => $Info->holder_client_void_check,

                        'approved_by' =>  auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Approval Date/Time: ' . Carbon::now() ,


                        'status' => 'completed',

                    ]
                )){
                    if(request()->ajax()){


                        echo 'SUCCESS';


                    }
                    else{

                        return redirect()->back();

                    }
                }else {

                    echo 'Error' ;
                }
            }

            elseif ($status == 'reject'){

                $Info = DepositeSale::where('ref_file', $fileid)->first();

                if(DepositeSale::updateOrCreate(
                    [ 'ref_file' => $fileid ],
                    [

                        'rejected_client_bank_name' => $Info->holder_client_bank_name ,
                        'rejected_client_account_holder' =>  ucwords(strtolower($Info->holder_client_account_holder)) ,
                        'rejected_client_account_number' => $Info->holder_client_account_number,
                        'rejected_client_transit_number' => $Info->holder_client_transit_number,
                        'rejected_client_void_check' => $Info->holder_client_void_check,

                        'rejected_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now() ,

                        'status' => 'completed',

                    ]
                )){
                    if(request()->ajax()){

                        echo 'SUCCESS';


                    }
                    else{

                        return redirect()->back();

                    }
                }else {

                    echo 'Error' ;
                }

            }

        }





    }

    public function check_delete($id)
    {
        if(Payment::where('id' , $id)->update(['client_void_check'=>''])){
            return redirect()->back();
        }
    }

    public function check_download($path)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/voidChecks/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\DepositeSale  $depostiteSale
     * @return \Illuminate\Http\Response
     */
    public function show(DepositeSale $depostiteSale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DepositeSale  $depostiteSale
     * @return \Illuminate\Http\Response
     */
    public function edit(DepositeSale $depostiteSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DepositeSale  $depostiteSale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepositeSale $depostiteSale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DepositeSale  $depostiteSale
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepositeSale $depostiteSale)
    {
        //
    }
}
