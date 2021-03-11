<?php

namespace App\Http\Controllers;

use App\ServiceAddress;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceAddressController extends Controller
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
        $file_address  = $request->get('file_address');
        $file_city = $request->get('file_city');
        $file_province = $request->get('file_province');
        $file_postal_code = $request->get('file_postal_code');
        $status = $request->get('status');
        $ref_seller = $request->get('refseller');

        if($request->ajax()) {


            // to be done later : check if requested fields are all empty and current data is empty as well ,
            // i.e : if(empty($name) && empty($row->name))
            if($status == "pending"){

                if(
                    empty($file_address) &&
                    empty($file_city) &&
                    empty($file_province) &&
                    empty($file_postal_code)
                    ) {

                        $status = 'completed';

                    }

            }


            if(auth()->user()->type == "Client" && ( $status == "pending" || $status =="completed") ) {
                if(ServiceAddress::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [
                        'address' => ucwords(strtolower($file_address))  ,
                        'city' => ucwords(strtolower($file_city))  ,
                        'province' => $file_province ,
                        'postal_code' => $file_postal_code ,
                        'status' => 'completed' ,

                    ]
                )){

                    echo 'SUCCESS';

                }

            }
            else{

                if($status == 'completed'){

                    if(ServiceAddress::updateOrCreate(
                        ['ref_seller' => $ref_seller ],
                        [
                            'address' => ucwords(strtolower($file_address))  ,
                            'city' => ucwords(strtolower($file_city))  ,
                            'province' => $file_province ,
                            'postal_code' => $file_postal_code ,
                            'status' => 'completed' ,

                        ]
                    )){

                        echo 'SUCCESS';

                    }

                }

                elseif ($status == 'pending'){

                    if(ServiceAddress::updateOrCreate(
                        ['ref_seller' => $ref_seller ],
                        [
                            'holder_address' => ucwords(strtolower($file_address))  ,
                            'holder_city' => ucwords(strtolower($file_city))  ,
                            'holder_province' => $file_province ,
                            'holder_postal_code' => $file_postal_code ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => 'pending' ,


                        ]
                    )){

                        echo 'SUCCESS';

                    }
                }

                elseif ($status == 'approve'){

                    $addressInfo = ServiceAddress::where('ref_seller' , $ref_seller )->first();

                    if(ServiceAddress::updateOrCreate(
                        ['ref_seller' => $ref_seller ],
                        [
                            'address' => ucwords(strtolower($addressInfo->holder_address))  ,
                            'city' => ucwords(strtolower($addressInfo->holder_city))  ,
                            'province' => $addressInfo->holder_province ,
                            'postal_code' => $addressInfo->holder_postal_code ,

                            'approved_address' => ucwords(strtolower($addressInfo->holder_address))  ,
                            'approved_city' => ucwords(strtolower($addressInfo->holder_city))  ,
                            'approved_province' => $addressInfo->holder_province ,
                            'approved_postal_code' => $addressInfo->holder_postal_code ,

                            'approved_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Approval Date/Time: ' . Carbon::now() ,



                            'status' => 'completed' ,

                        ]
                    )){

                        echo 'SUCCESS';

                    }

                }

                elseif ($status == 'reject'){

                    $addressInfo = ServiceAddress::where('ref_seller' , $ref_seller )->first();


                    if(ServiceAddress::updateOrCreate(
                        ['ref_seller' => $ref_seller ],
                        [

                            'rejected_address' => ucwords(strtolower($addressInfo->holder_address))  ,
                            'rejected_city' => ucwords(strtolower($addressInfo->holder_city))  ,
                            'rejected_province' => $addressInfo->holder_province ,
                            'rejected_postal_code' => $addressInfo->holder_postal_code ,

                            'rejected_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Rejection Date/Time: ' . Carbon::now() ,

                            'status' => 'completed' ,

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
     * @param  \App\ServiceAddress  $serviceAddress
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceAddress $serviceAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceAddress  $serviceAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceAddress $serviceAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceAddress  $serviceAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceAddress $serviceAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceAddress  $serviceAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceAddress $serviceAddress)
    {
        //
    }
}
