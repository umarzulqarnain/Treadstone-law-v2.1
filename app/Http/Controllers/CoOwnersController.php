<?php

namespace App\Http\Controllers;

use App\CoOwners;
use App\Sellers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CoOwnersController extends Controller
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

        $co_owner_id = $request->get('co_owner_id');
        $co_owner_first_name = $request->get('co_owner_first_name');
        $co_owner_last_name = $request->get('co_owner_last_name');
        $co_owner_birthdate = $request->get('co_owner_birthdate');
        $co_owner_address = $request->get('co_owner_address');
        $co_owner_city = $request->get('co_owner_city');
        $co_owner_postal_code = $request->get('co_owner_postal_code');
        $co_owner_email = $request->get('co_owner_email');
        $co_owner_phone = $request->get('co_owner_phone');
        $refseller = $request->get('refseller');

        if($request->ajax()) {

            if(CoOwners::updateOrCreate(

                ['id'=>$co_owner_id],
                [
                    'first_name' => $co_owner_first_name,
                    'last_name' => $co_owner_last_name ,
                    'birth_date' => $co_owner_birthdate ,
                    'address' => $co_owner_address ,
                    'city' => $co_owner_city ,
                    'postal_code' => $co_owner_postal_code ,
                    'email' => $co_owner_email ,
                    'phone' => $co_owner_phone ,
                    'ref_seller' => $refseller ,

                ]
            )){


                echo 'SUCCESS';


            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoOwners  $coOwners
     * @return \Illuminate\Http\Response
     */
    public function show(CoOwners $coOwners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoOwners  $coOwners
     * @return \Illuminate\Http\Response
     */
    public function edit(CoOwners $coOwners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoOwners  $coOwners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoOwners $coOwners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoOwners  $coOwners
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $co_owner_id = $request->get('co_owner_id');

        if($request->ajax()) {

            if(CoOwners::where('id' , $co_owner_id)->delete()){

                echo 'SUCCESS';

            }


        }

    }
}
