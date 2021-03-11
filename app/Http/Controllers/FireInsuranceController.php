<?php

namespace App\Http\Controllers;

use App\FireInsurance;
use Illuminate\Http\Request;

class FireInsuranceController extends Controller
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
        $name = $request->get('fire_insurance_instructions');
        $id = $request->get('fire_id');
        $fileid = $request->get('fileid');

        FireInsurance::updateOrCreate(
                [ 'id' => $id ],
                [
                    'name' => ucwords(strtolower($name) )  ,
                    'ref_file' => $fileid


                ]
            );

            echo 'SUCCESS';


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FireInsurance  $fireInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(FireInsurance $fireInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FireInsurance  $fireInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(FireInsurance $fireInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FireInsurance  $fireInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FireInsurance $fireInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FireInsurance  $fireInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(FireInsurance $fireInsurance)
    {
        //
    }
}
