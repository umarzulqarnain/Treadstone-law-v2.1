<?php

namespace App\Http\Controllers;

use App\MortgageInformation;
use Illuminate\Http\Request;

class MortgageInformationController extends Controller
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
        $didusermortgagebrker = $request->get('didusermortgagebrker');
        $mort_first_name = $request->get('mort_first_name');
        $mort_last_name = $request->get('mort_last_name');
        $mort_email = $request->get('mort_email');
        $mort_phone = $request->get('mort_phone');
        $fileid = $request->get('fileid');


        if($request->ajax()) {

            if(MortgageInformation::updateOrCreate(
                ['ref_file' => $fileid ],
                [
                    'used_mortgage_broker' => $didusermortgagebrker,
                    'first_name' => ucwords(strtolower($mort_first_name)) ,
                    'last_name' => ucwords(strtolower($mort_last_name))   ,
                    'email' => strtolower($mort_email)  ,
                    'phone' => $mort_phone ,

                ]
            )){

                echo 'SUCCESS';

            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MortgageInformation  $mortgageInformation
     * @return \Illuminate\Http\Response
     */
    public function show(MortgageInformation $mortgageInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MortgageInformation  $mortgageInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(MortgageInformation $mortgageInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MortgageInformation  $mortgageInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MortgageInformation $mortgageInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MortgageInformation  $mortgageInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MortgageInformation $mortgageInformation)
    {
        //
    }
}
