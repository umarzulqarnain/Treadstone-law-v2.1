<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\UserFileTypes;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $app_time = $request->get('app_time');
        $app_address = $request->get('app_address');
        $app_officer = $request->get('app_officer');
        $fileid = $request->get('fileid');

        if($request->ajax()) {

            if(UserFileTypes::updateOrCreate(

                [
                    'user_id' => $app_officer,
                    'file_id' => $request->get('fileid'),
                ]

            )){

                if(Appointments::Create(

                    [
                        'ref_file' => $fileid ,
                        'appointment_time' => $app_time,
                        'address' => $app_address,
                        'signing_officer' => $app_officer,

                    ]

                )){

                    echo 'SUCCESS';

                }
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
