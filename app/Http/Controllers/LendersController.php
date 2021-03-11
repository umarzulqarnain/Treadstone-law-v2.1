<?php

namespace App\Http\Controllers;

use App\Lenders;
use Illuminate\Http\Request;

class LendersController extends Controller
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
        $lender_name = $request->get('lender_name');
        $lender_address = $request->get('lender_address');
        $lender_priority = $request->get('lender_priority');
        $lender_converge_value = $request->get('lender_converge_value');
        $gauranteed_replacement_cost = $request->get('gauranteed_replacement_cost');
        $fileid = $request->get('fileid');


        if($request->ajax()) {

            if(Lenders::updateOrCreate(
                ['ref_file' => $fileid ],
                [
                    'name' => $lender_name,
                    'address' => $lender_address ,
                    'converge_value' => $lender_converge_value ,
                    'priority' => $lender_priority ,
                    'gauranteed_replacement_cost' => $gauranteed_replacement_cost ,

                ]
            )){


                echo 'SUCCESS';

            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lenders  $lenders
     * @return \Illuminate\Http\Response
     */
    public function show(Lenders $lenders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lenders  $lenders
     * @return \Illuminate\Http\Response
     */
    public function edit(Lenders $lenders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lenders  $lenders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lenders $lenders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lenders  $lenders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lenders $lenders)
    {
        //
    }
}
