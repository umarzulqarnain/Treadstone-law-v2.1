<?php

namespace App\Http\Controllers;

use App\Payouts;
use Illuminate\Http\Request;

class PayoutsController extends Controller
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
        $payout_account_number = $request->get('payout_account_number');
        $payout_amount = $request->get('payout_amount');
        $payout_bank_institution   = $request->get('payout_bank_institution');
        $payout_priority = $request->get('payout_priority');
        $per_dim = $request->get('per_dim');
        $fileid = $request->get('fileid');


        if($request->ajax()) {

            if(Payouts::updateOrCreate(
                ['ref_file' => $fileid ],
                [
                    'bank_institution' => $payout_bank_institution ,
                    'account_number' => $payout_account_number ,
                    'priority' => $payout_priority ,
                    'amount' => $payout_amount ,
                    'per_dim' => $per_dim ,

                ]
            )){


                echo 'SUCCESS';

            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payouts  $payouts
     * @return \Illuminate\Http\Response
     */
    public function show(Payouts $payouts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payouts  $payouts
     * @return \Illuminate\Http\Response
     */
    public function edit(Payouts $payouts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payouts  $payouts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payouts $payouts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payouts  $payouts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payouts $payouts)
    {
        //
    }
}
