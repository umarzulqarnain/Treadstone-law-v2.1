<?php

namespace App\Http\Controllers;

use App\Props;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PropsController extends Controller
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

        $property_address = $request->get('property_address');
        $property_city = $request->get('property_city');
        $property_province = $request->get('property_province');
        $property_postal_code = $request->get('property_postal_code');
        $fileid = $request->get('fileid');

        $status = $request->get('status');
        if(isset($status)){

            $status = $request->get('status');
        }
        else{

            $checkprop = Props::where('ref_file' , $fileid)->first();

            if(isset($checkprop)){
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
        }else{
            $user_type = auth()->user()->type;
        }


        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))
        if($status == "pending") {

            if (
                empty($property_address) &&
                empty($property_city) &&
                empty($property_province) &&
                empty($property_postal_code)

            ) {

                $status = 'completed';

            }
        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if($request->ajax()) {

                if( Props::updateOrCreate(
                    ['ref_file' => $fileid],
                    [
                        'street_address' => ucwords(strtolower($property_address)) ,
                        'city' => ucwords(strtolower($property_city))  ,
                        'province' => ucwords(strtolower($property_province))   ,
                        'postal_code' => strtoupper($property_postal_code)  ,
                        'status' => 'completed'  ,
                        'ref_file' => $fileid

                    ]
                )){

                    echo 'SUCCESS';

                }


            }



        }
        else{


            if($status == 'completed'){

                if($request->ajax()) {

                    if( Props::updateOrCreate(
                        ['ref_file' => $fileid],
                        [
                            'street_address' => ucwords(strtolower($property_address)) ,
                            'city' => ucwords(strtolower($property_city))  ,
                            'province' => ucwords(strtolower($property_province))   ,
                            'postal_code' => strtoupper($property_postal_code)  ,
                            'status' => $status  ,
                            'ref_file' => $fileid

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }
            }

            elseif ($status == 'pending'){

                if($request->ajax()) {

                    if( Props::updateOrCreate(
                        ['ref_file' => $fileid],
                        [
                            'holder_street_address' => ucwords(strtolower($property_address)) ,
                            'holder_city' => ucwords(strtolower($property_city))  ,
                            'holder_province' => ucwords(strtolower($property_province))   ,
                            'holder_postal_code' => strtoupper($property_postal_code)  ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => $status  ,
                            'ref_file' => $fileid
                        ]
                    )){

                        echo 'SUCCESS';

                    }

                }
            }

            elseif ($status == 'approve'){

                $propInfo = Props::where('ref_file', $fileid)->first();

                if($request->ajax()) {

                    if( Props::updateOrCreate(
                        ['ref_file' => $fileid],
                        [
                            'street_address' => ucwords(strtolower($propInfo->holder_street_address)) ,
                            'city' => ucwords(strtolower($propInfo->holder_city))  ,
                            'province' => ucwords(strtolower($propInfo->holder_province))   ,
                            'postal_code' => strtoupper($propInfo->holder_postal_code)  ,

                            'approved_street_address' => ucwords(strtolower($propInfo->holder_street_address)) ,
                            'approved_city' => ucwords(strtolower($propInfo->holder_city))  ,
                            'approved_province' => ucwords(strtolower($propInfo->holder_province))   ,
                            'approved_postal_code' => strtoupper($propInfo->holder_postal_code)  ,

                            'approved_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Approval Date/Time: ' . Carbon::now() ,


                            'status' => 'completed'  ,
                            'ref_file' => $fileid
                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }

            }

            elseif ($status == 'reject'){

                $propInfo = Props::where('ref_file', $fileid)->first();


                if($request->ajax()) {

                    if( Props::updateOrCreate(
                        ['ref_file' => $fileid],
                        [

                            'rejected_street_address' => ucwords(strtolower($propInfo->holder_street_address)) ,
                            'rejected_city' => ucwords(strtolower($propInfo->holder_city))  ,
                            'rejected_province' => ucwords(strtolower($propInfo->holder_province))   ,
                            'rejected_postal_code' => strtoupper($propInfo->holder_postal_code)  ,

                            'rejected_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Rejection Date/Time: ' . Carbon::now() ,

                            'status' => 'completed'  ,
                            'ref_file' => $fileid

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
     * @param  \App\Props  $props
     * @return \Illuminate\Http\Response
     */
    public function show(Props $props)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Props  $props
     * @return \Illuminate\Http\Response
     */
    public function edit(Props $props)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Props  $props
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Props $props)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Props  $props
     * @return \Illuminate\Http\Response
     */
    public function destroy(Props $props)
    {
        //
    }
}
