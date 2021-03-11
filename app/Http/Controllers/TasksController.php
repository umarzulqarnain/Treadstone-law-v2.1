<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
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

        $ref_file = $request->get('ref_file');
        $task = $request->get('task');
        $due = $request->get('due');
        $type = $request->get('type');

        if(Tasks::create([

            'task'=> ucwords(strtolower($task))  ,
            'type'=>$type,
            'due'=>$due,
            'ref_file'=> $ref_file ,

        ])){

            return redirect()->back();
        }else{

            echo 'Error while creating !';
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
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
        $id = $request->input('id');

        if(Tasks::where('id' , $id)->update([

            'completed' => 'yes'

        ])){

            echo 'checked!';
        }
    }

    public function uncheck(Request $request)
    {

        $id = $request->input('id');

        if(Tasks::where('id' , $id)->update([

            'completed' => 'no'

        ])){

            echo 'unchecked!';
        }
    }

    public function edit(Tasks $tasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasks $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}
