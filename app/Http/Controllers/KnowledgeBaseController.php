<?php

namespace App\Http\Controllers;

use App\KnowledgeBase;
use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->type=="Admin"){

            $starting_rows = KnowledgeBase::select('id','question','answer' , 'video_url')->where('type'  ,'starting')->get();
            $count_starting = $starting_rows->count();
            $closing_rows = KnowledgeBase::select('id','question','answer' , 'video_url')->where('type'  ,'closing')->get();
            $count_closing = $starting_rows->count();

        }else{

            $starting_rows = KnowledgeBase::select('id','question','answer' , 'video_url')->where('type'  ,'starting')->where('user_type' , auth()->user()->type)->get();
            $count_starting = KnowledgeBase::select('id','question','answer' , 'video_url')->where('type'  ,'starting')->where('user_type' , auth()->user()->type)->get()->count();

            $closing_rows = KnowledgeBase::select('id','question','answer' , 'video_url')->where('type'  ,'closing')->where('user_type' , auth()->user()->type)->get();
            $count_closing = KnowledgeBase::select('id','question','answer' , 'video_url')->where('type'  ,'closing')->where('user_type' , auth()->user()->type)->get()->count();

        }

        return view('knowledge_base' , compact('starting_rows' , 'closing_rows' , 'count_closing' , 'count_starting'));

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
     *
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (KnowledgeBase::create([

            'question' => $request->get('question'),
            'answer' => $request->get('answer'),
            'video_url' => $request->get('video_url'),
            'type' => $request->get('type'),
            'user_type' => $request->get('user_type'),
           ])){

            flash()->message("Question Added Successfully");
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBase $knowledgeBase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBase $knowledgeBase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBase $knowledgeBase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBase $knowledgeBase)
    {
        //
    }
}
