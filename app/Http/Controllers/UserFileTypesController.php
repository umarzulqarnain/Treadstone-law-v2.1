<?php

namespace App\Http\Controllers;

use App\UserFileTypes;
use Illuminate\Http\Request;

class UserFileTypesController extends Controller
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
    public function create(Request $request)
    {
        if(UserFileTypes::updateOrCreate(

            [
                'user_id' => $request->get('userid'),
                'file_id' => $request->get('fileid'),
            ]

        )){

            flash()->message("User Attached Successfully To This File");
            return redirect()->back();

        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserFileTypes  $userFileTypes
     * @return \Illuminate\Http\Response
     */
    public function show(UserFileTypes $userFileTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserFileTypes  $userFileTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(UserFileTypes $userFileTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserFileTypes  $userFileTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserFileTypes $userFileTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserFileTypes  $userFileTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserFileTypes $userFileTypes)
    {
        //
    }
}
