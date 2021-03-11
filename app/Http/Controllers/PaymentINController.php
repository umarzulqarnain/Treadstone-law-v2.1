<?php

namespace App\Http\Controllers;

use App\Payment_IN;
use Illuminate\Http\Request;

class PaymentINController extends Controller
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
        $account_number = $request->get('payment_in_account_number');
        $amount = $request->get('payment_in_amount');
        $method   = $request->get('payment_in_method');
        $company_name = $request->get('payment_in_company_name');
        $payment_in_payment_type = $request->get('payment_in_payment_type');
        $payment_in_payee_name = $request->get('payment_in_payee_name');
        $payment_in_bank_name = $request->get('payment_in_bank_name');
        $fileid = $request->get('fileid');


        if($request->ajax()) {

            if(Payment_IN::updateOrCreate(
                ['ref_file' => $fileid ],
                [
                    'company_name' => $company_name ,
                    'payment_method' => $method ,
                    'account_number' => $account_number ,
                    'amount' => $amount ,
                    'bank_name' => $payment_in_bank_name ,
                    'payment_type' => $payment_in_payment_type ,
                    'payee_name' => $payment_in_payee_name ,

                ]
            )){


                echo 'SUCCESS';

            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment_IN  $payment_IN
     * @return \Illuminate\Http\Response
     */
    public function show(Payment_IN $payment_IN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment_IN  $payment_IN
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment_IN $payment_IN)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment_IN  $payment_IN
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment_IN $payment_IN)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment_IN  $payment_IN
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {


    }
}
