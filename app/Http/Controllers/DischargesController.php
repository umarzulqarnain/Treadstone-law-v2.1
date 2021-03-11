<?php

namespace App\Http\Controllers;

use App\Discharges;
use Illuminate\Http\Request;

class DischargesController extends Controller
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
    public function create(){

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
        $discharge_method = $request->get('discharge_method');
        $discharge_bank_name = $request->get('discharge_bank_name');
        $discharge_id = $request->get('discharge_id');
        $fileid = $request->get('fileid');

        if($request->ajax()) {

            if(Discharges::updateOrCreate(

                [ 'id' => $discharge_id ],
                [
                    'method' => $discharge_method,
                    'bank_name' => $discharge_bank_name,
                    'ref_file' => $fileid

                ]
            )){

                echo 'SUCCESS';

            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discharges  $discharges
     * @return \Illuminate\Http\Response
     */
    public function show(Discharges $discharges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Discharges  $discharges
     * @return \Illuminate\Http\Response
     */
    public function edit(Discharges $discharges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discharges  $discharges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discharges $discharges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discharges  $discharges
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $did = $request->get('did');

        if($request->ajax()) {

            if(Discharges::where('id' , $did)->delete()){

                echo 'SUCCESS';

            }

        }

    }
}
