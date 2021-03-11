<?php

namespace App\Http\Controllers;

use App\Finances;
use Illuminate\Http\Request;

class FinancesController extends Controller
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
        $ref_payment = $request->get('refpayment');

        if($request->ajax()) {

            if(Finances::updateOrCreate(
                [

                    'bank_name' => $client_bank_name,
                    'account_holder' => $client_account_holder,
                    'account_number' => $client_account_number,
                    'transit_number' => $client_transit_number,
                    'ref_payment' => $ref_payment

                ]
            )){


                echo 'SUCCESS';

            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function show(Finances $finances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function edit(Finances $finances)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finances $finances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finances  $finances
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finances $finances)
    {
        //
    }
}
