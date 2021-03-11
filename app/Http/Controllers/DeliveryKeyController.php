<?php

namespace App\Http\Controllers;

use App\DeliveryKey;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DeliveryKeyController extends Controller
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

        $delivery_key_select = $request->get('delivery_key_select');
        $fileid = $request->get('fileid');


        //last time the file was edited
        fileLastTimeEdited($fileid);

        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = DeliveryKey::where('ref_file' , $fileid)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }


        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))

        if($status == "pending") {

            if (
            empty($delivery_key_select)


            ) {

                $status = 'completed';

            }
        }


        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
        }else{
            $user_type = auth()->user()->type;
        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if($request->ajax()){

                if(DeliveryKey::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [
                        'name' => $delivery_key_select,
                        'status' => 'completed',

                    ]
                )){

                    echo 'SUCCESS';

                }


            }


        }
        else{

            if($status == 'completed'){

                if($request->ajax()){

                    if(DeliveryKey::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [
                            'name' => $delivery_key_select,
                            'status' => 'completed',

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }


            }

            elseif ($status == 'pending'){

                if($request->ajax()){

                    if(DeliveryKey::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [
                            'holder_name' => $delivery_key_select,


                            'submitted_by'=>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => 'pending',

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }

            }

            elseif ($status == 'approve'){

                $Info = DeliveryKey::where('ref_file', $fileid)->first();


                if($request->ajax()){

                    if(DeliveryKey::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [
                            'name' => $Info->holder_name,

                            'approved_name' => $Info->holder_name,

                            'approved_by' =>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Approval Date/Time: ' . Carbon::now() ,

                            'status' => 'completed',

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }



            }

            elseif ($status == 'reject'){

                $Info = DeliveryKey::where('ref_file', $fileid)->first();

                if($request->ajax()){

                    if(DeliveryKey::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'rejected_name' => $Info->holder_name,

                            'rejected_by' =>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Rejection Date/Time: ' . Carbon::now()  ,

                            'status' => 'completed',

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }


            }

        }






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DeliveryKey  $deliveryKey
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryKey $deliveryKey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeliveryKey  $deliveryKey
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryKey $deliveryKey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeliveryKey  $deliveryKey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryKey $deliveryKey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeliveryKey  $deliveryKey
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryKey $deliveryKey)
    {
        //
    }
}
