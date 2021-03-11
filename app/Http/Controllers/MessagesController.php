<?php

namespace App\Http\Controllers;

use App\Messages;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        if(auth()->user()->type == "Admin"){

            $messages = Messages::where('user_id' , auth()->user()->id)
                ->orderBy('created_at' , 'desc')
                ->groupBy('sender_id')
                ->paginate(10);

//        }


        $unread = Messages::where('user_id' , auth()->user()->id)->where('seen' ,0)->get()->count();

        // for now only
        $users = User::select('id' , 'name' , 'last_name')->get();

        return view('messages', compact('messages' , 'unread' , 'users'));
    }

    public function sent()
    {

//        if(auth()->user()->type == "Admin"){

            $messages = Messages::where('sender_id' , auth()->user()->id)
                ->orderBy('created_at' , 'desc')
                ->groupBy('user_id')
                ->paginate(10);

//        }


        $unread = Messages::where('user_id' , auth()->user()->id)->where('seen' ,0)->get()->count();

        // for now only
        $users = User::select('id' , 'name' , 'last_name')->get();

        return view('sent_messages', compact('messages' , 'unread' , 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        if(Messages::create([

            'sender_id'=>auth()->user()->id ,
            'subject'=>$request->input('subject') ,
            'body'=>$request->input('body') ,
            'date'=>Carbon::now() ,
            'user_id'=>$request->input('user_id') ,

        ])){

            flash()->message("Message Sent Successfully !");
            return redirect()->back();

        }else{

            flash()->error("An error occurred while sending your message ! , please try again later");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Messages $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Messages $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Messages $messages)
    {
        //
    }

    public function mark_as_read(Request $request, Messages $messages)
    {
        if($request->input('sender') != auth()->user()->id){

            Messages::where('id' , $request->input('id'))->update([
                'seen' => 1
            ]);

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Messages  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Messages $messages)
    {
        //
    }
}
