<?php

namespace App\Http\Controllers;

use App\Files;
use App\Realtors;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RealtorsController extends Controller
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

        $used_realtor = $request->get('used_realtor');
        $realor_type = $request->get('realtor_type');
        $realtor_first_name = $request->get('realtor_first_name');
        $realtor_last_name = $request->get('realtor_last_name');
        $realtor_gender = $request->get('realtor_gender');
        $realtor_email = $request->get('realtor_email');
        $realtor_phone = $request->get('realtor_phone');
        $commission = $request->get('realtor_total_commission');
        $percentage_commission = $request->get('realtor_percentage_commission');
        $fileid = $request->get('fileid');
        $realtorid = $request->get('realtorid');

        $file_data = Files::find($fileid);

//        if($realor_type == "Other"){
            $commission = 0;
            $percentage_commission = 0 ;
//        }

        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = Realtors::where('id' , $realtorid)->first();

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
                empty($used_realtor) &&
                empty($realor_type) &&
                empty($realtor_first_name) &&
                empty($realtor_last_name) &&
                empty($realtor_gender) &&
                empty($realtor_email) &&
                empty($realtor_phone)

            ) {

                $status = 'completed';

            }

        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if(Realtors::updateOrCreate(
                ['id' => $realtorid],
                [
                    'used_realtor' => $used_realtor ,
                    'realtor_type' => $realor_type ,
                    'first_name' => ucwords(strtolower($realtor_first_name))   ,
                    'last_name' =>  ucwords(strtolower($realtor_last_name))  ,
                    'gender' => $realtor_gender   ,
                    'email' =>  strtolower($realtor_email)  ,
                    'phone' => $realtor_phone ,
                    'total_commission' => $commission ,
                    'percentage_commission' => $percentage_commission ,
                    'status' => 'completed' ,
                    'ref_file' => $fileid

                ]
            )){


                if($file_data->file_type == "Sale"){
                    if($realor_type == "Buyer's Realtor"){

                        UserFileTypes::updateOrCreate(
                            [
                                'file_id'=>$fileid ,
                                'user_id'=>$realtor_email

                            ] ,
                            [
                                'type'=> 'OtherSide'

                            ]);

                    }
                    else{

                        UserFileTypes::updateOrCreate(
                            [
                                'file_id'=>$fileid ,
                                'user_id'=>$realtor_email

                            ] ,
                            [
                                'type'=> 'Realtor'

                            ]);

                    }
                }

                if($file_data->file_type == "Purchase"){
                    if($realor_type == "Seller's Realtor"){

                        UserFileTypes::updateOrCreate(
                            [
                                'file_id'=>$fileid ,
                                'user_id'=>$realtor_email

                            ] ,
                            [
                                'type'=> 'OtherSide'

                            ]);

                    }
                    elseif ($realor_type == "Mortgage Broker"){

                        UserFileTypes::updateOrCreate(
                            [
                                'file_id'=>$fileid ,
                                'user_id'=>$realtor_email

                            ] ,
                            [
                                'type'=> 'MortgageBroker'

                            ]);

                    }
                    else{

                        UserFileTypes::updateOrCreate(
                            [
                                'file_id'=>$fileid ,
                                'user_id'=>$realtor_email

                            ] ,
                            [
                                'type'=> 'Realtor'

                            ]);

                    }
                }

                if(request()->ajax()){



                    return response()->json([

                        'message'   => 'SUCCESS',
                    ]);


                }
                else{

                    return redirect()->back();

                }



            }
            else{

                echo 'ERROR';
            }




        }
        else{

            if($status == 'completed'){

                if(Realtors::updateOrCreate(
                    ['id' => $realtorid],
                    [
                        'used_realtor' => $used_realtor ,
                        'realtor_type' => $realor_type ,
                        'first_name' => ucwords(strtolower($realtor_first_name))   ,
                        'last_name' =>  ucwords(strtolower($realtor_last_name))  ,
                        'gender' => $realtor_gender   ,
                        'email' =>  strtolower($realtor_email)  ,
                        'phone' => $realtor_phone ,
                        'total_commission' => $commission ,
                        'percentage_commission' => $percentage_commission ,
                        'status' => 'completed' ,
                        'ref_file' => $fileid

                    ]
                )){

                    if($file_data->file_type == "Sale"){
                        if($realor_type == "Buyer's Realtor"){

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$realtor_email

                                ] ,
                                [
                                    'type'=> 'OtherSide'

                                ]);

                        }
                        else{

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$realtor_email

                                ] ,
                                [
                                    'type'=> 'Realtor'

                                ]);

                        }
                    }

                    if($file_data->file_type == "Purchase"){
                        if($realor_type == "Seller's Realtor"){

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$realtor_email

                                ] ,
                                [
                                    'type'=> 'OtherSide'

                                ]);

                        }
                        elseif ($realor_type == "Mortgage Broker"){

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$realtor_email

                                ] ,
                                [
                                    'type'=> 'MortgageBroker'

                                ]);

                        }
                        else{

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$realtor_email

                                ] ,
                                [
                                    'type'=> 'Realtor'

                                ]);

                        }
                    }

                    if(request()->ajax()){

                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }
                    else{

                        return redirect()->back();

                    }


                }
                else{

                    echo 'ERROR';
                }
            }

            elseif ($status == 'pending'){

                if(Realtors::updateOrCreate(
                    ['id' => $realtorid],
                    [
                        'holder_used_realtor' => $used_realtor ,
                        'holder_realtor_type' => $realor_type ,
                        'holder_first_name' => ucwords(strtolower($realtor_first_name))   ,
                        'holder_last_name' =>  ucwords(strtolower($realtor_last_name))  ,
                        'holder_gender' => $realtor_gender   ,
                        'holder_email' =>  strtolower($realtor_email)  ,
                        'holder_phone' => $realtor_phone ,
                        'holder_total_commission' => $commission ,
                        'holder_percentage_commission' => $percentage_commission ,

                        'submitted_by'=> auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Submission Date/Time: ' . Carbon::now(),

                        'status' => 'pending' ,
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


                }
                else{

                    echo 'ERROR';
                }

            }

            elseif ($status == 'approve'){

                $Info = Realtors::where('id', $realtorid)->first();

                if(Realtors::updateOrCreate(
                    ['id' => $realtorid],
                    [
                        'used_realtor' => $Info->holder_used_realtor ,
                        'realtor_type' => $Info->holder_realtor_type ,
                        'first_name' => ucwords(strtolower($Info->holder_first_name))   ,
                        'last_name' =>  ucwords(strtolower($Info->holder_last_name))  ,
                        'gender' => $Info->holder_gender   ,
                        'email' =>  strtolower($Info->holder_email)  ,
                        'phone' => $Info->holder_phone ,
                        'total_commission' => $Info->holder_total_commission ,
                        'percentage_commission' => $Info->holder_percentage_commission ,

                        'approved_used_realtor' => $Info->holder_used_realtor ,
                        'approved_realtor_type' => $Info->holder_realtor_type ,
                        'approved_first_name' => ucwords(strtolower($Info->holder_first_name))   ,
                        'approved_last_name' =>  ucwords(strtolower($Info->holder_last_name))  ,
                        'approved_gender' => $Info->holder_gender   ,
                        'approved_email' =>  strtolower($Info->holder_email)  ,
                        'approved_phone' => $Info->holder_phone ,
                        'approved_total_commission' => $Info->holder_total_commission ,
                        'approved_percentage_commission' => $Info->holder_percentage_commission ,

                        'approved_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Approval Date/Time: ' . Carbon::now() ,

                        'status' => 'completed' ,
                        'ref_file' => $fileid

                    ]
                )){


                    if($file_data->file_type == "Sale"){
                        if($Info->holder_used_realtor == "Buyer's Realtor"){

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$Info->holder_email

                                ] ,
                                [
                                    'type'=> 'OtherSide'

                                ]);

                        }
                        else{

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$realtor_email

                                ] ,
                                [
                                    'type'=> 'Realtor'

                                ]);

                        }
                    }

                    if($file_data->file_type == "Purchase"){
                        if($Info->holder_used_realtor == "Seller's Realtor"){

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$Info->holder_email

                                ] ,
                                [
                                    'type'=> 'OtherSide'

                                ]);

                        }
                        elseif ($Info->holder_used_realtor == "Mortgage Broker"){

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$Info->holder_email

                                ] ,
                                [
                                    'type'=> 'MortgageBroker'

                                ]);

                        }
                        else{

                            UserFileTypes::updateOrCreate(
                                [
                                    'file_id'=>$fileid ,
                                    'user_id'=>$Info->holder_email

                                ] ,
                                [
                                    'type'=> 'Realtor'

                                ]);

                        }
                    }


                    if(request()->ajax()){

                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }
                    else{

                        return redirect()->back();

                    }


                }
                else{

                    echo 'ERROR';
                }
            }

            elseif ($status == 'reject'){

                $Info = Realtors::where('id', $realtorid)->first();


                if(Realtors::updateOrCreate(
                    ['id' => $realtorid],
                    [

                        'rejected_used_realtor' => $Info->holder_used_realtor ,
                        'rejected_realtor_type' => $Info->holder_realtor_type ,
                        'rejected_first_name' => ucwords(strtolower($Info->holder_first_name))   ,
                        'rejected_last_name' =>  ucwords(strtolower($Info->holder_last_name))  ,
                        'rejected_gender' => $Info->holder_gender   ,
                        'rejected_email' =>  strtolower($Info->holder_email)  ,
                        'rejected_phone' => $Info->holder_phone ,
                        'rejected_total_commission' => $Info->holder_total_commission ,
                        'rejected_percentage_commission' => $Info->holder_percentage_commission ,

                        'rejected_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now() ,

                        'status' => 'completed' ,
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


                }
                else{

                    echo 'ERROR';
                }

            }



        }




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Realtors  $realtors
     * @return \Illuminate\Http\Response
     */
    public function show(Realtors $realtors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Realtors  $realtors
     * @return \Illuminate\Http\Response
     */
    public function edit(Realtors $realtors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Realtors  $realtors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realtors $realtors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Realtors  $realtors
     * @return \Illuminate\Http\Response
     */
    public function delete($id){

        if(Realtors::where('id' , $id)->delete()){

            return redirect()->back();
        }else{

            echo 'Error';
        }
    }
}
