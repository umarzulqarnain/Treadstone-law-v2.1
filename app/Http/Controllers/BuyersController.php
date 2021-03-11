<?php

namespace App\Http\Controllers;

use App\Buyers;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BuyersController extends Controller
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
    public function store(Request $request){

        $buyer_first_name = $request->get('buyer_first_name');
        $buyer_last_name = $request->get('buyer_last_name');
        $buyer_gender = $request->get('buyer_gender');
        $buyer_address = $request->get('buyer_address');
        $buyer_city = $request->get('buyer_city');
        $buyer_postal_code = $request->get('buyer_postal_code');
        $buyer_email = $request->get('buyer_email');
        $status = $request->get('status');
        $buyer_id = $request->get('buyer_id');
        $fileid = $request->get('fileid');


        if($request->ajax()) {

            //last time the file was edited
            fileLastTimeEdited($fileid);

            if(auth()->user()->type != "Admin"){
                $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
            }else{
                $user_type = auth()->user()->type;
            }



            // to be done later : check if requested fields are all empty and current data is empty as well ,
            // i.e : if(empty($name) && empty($row->name))

            if($status == "pending") {

                if (
                    empty($buyer_first_name) &&
                    empty($buyer_last_name) &&
                    empty($buyer_gender) &&
                    empty($buyer_address) &&
                    empty($buyer_city) &&
                    empty($buyer_postal_code) &&
                    empty($buyer_email)

                ) {

                    $status = 'completed';

                }

            }



            if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

                if($buyer = Buyers::updateOrCreate(
                    [ 'id'=> $buyer_id  ] ,
                    [
                        'first_name' => ucwords(strtolower($buyer_first_name)) ,
                        'last_name' => ucwords(strtolower($buyer_last_name))  ,
                        'gender' => $buyer_gender  ,
                        'address' => ucwords(strtolower($buyer_address))  ,
                        'city' => ucwords(strtolower($buyer_city))  ,
                        'postal_code' => strtoupper($buyer_postal_code)  ,
                        'email' =>  strtolower($buyer_email)  ,
                        'status' =>  'completed' ,
                        'ref_file' => $fileid ,

                    ]
                )){


                    echo $buyer->id;


                }

            }
            else{

                if($status == 'completed'){

                    if($buyer = Buyers::updateOrCreate(
                        [ 'id'=> $buyer_id  ] ,
                        [
                            'first_name' => ucwords(strtolower($buyer_first_name)) ,
                            'last_name' => ucwords(strtolower($buyer_last_name))  ,
                            'gender' => $buyer_gender  ,
                            'address' => ucwords(strtolower($buyer_address))  ,
                            'city' => ucwords(strtolower($buyer_city))  ,
                            'postal_code' => strtoupper($buyer_postal_code)  ,
                            'email' =>  strtolower($buyer_email)  ,
                            'status' =>  $status ,
                            'ref_file' => $fileid ,

                        ]
                    )){


                        echo $buyer->id;


                    }

                }

                elseif ($status == 'pending'){

                    if($buyer = Buyers::updateOrCreate(
                        [ 'id'=> $buyer_id  ] ,
                        [
                            'holder_first_name' => ucwords(strtolower($buyer_first_name)) ,
                            'holder_last_name' => ucwords(strtolower($buyer_last_name))  ,
                            'holder_gender' => $buyer_gender  ,
                            'holder_address' => ucwords(strtolower($buyer_address))  ,
                            'holder_city' => ucwords(strtolower($buyer_city))  ,
                            'holder_postal_code' => strtoupper($buyer_postal_code)  ,
                            'holder_email' =>  strtolower($buyer_email)  ,
                            'status' =>  $status ,

                            'submitted_by'=>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'ref_file' => $fileid ,

                        ]
                    )){


                        echo $buyer->id;


                    }
                }

                elseif ($status == 'approve'){

                    $buyerInfo = Buyers::find($buyer_id);

                    if($buyer = Buyers::updateOrCreate(
                        [ 'id'=> $buyer_id  ] ,
                        [
                            'first_name' => ucwords(strtolower($buyerInfo->holder_first_name)) ,
                            'last_name' => ucwords(strtolower($buyerInfo->holder_last_name))  ,
                            'gender' => $buyerInfo->holder_gender  ,
                            'address' => ucwords(strtolower($buyerInfo->holder_address))  ,
                            'city' => ucwords(strtolower($buyerInfo->holder_city))  ,
                            'postal_code' => strtoupper($buyerInfo->holder_postal_code)  ,
                            'email' =>  strtolower($buyerInfo->holder_email)  ,

                            'approved_first_name' => ucwords(strtolower($buyerInfo->holder_first_name)) ,
                            'approved_last_name' => ucwords(strtolower($buyerInfo->holder_last_name))  ,
                            'approved_gender' => $buyerInfo->holder_gender  ,
                            'approved_address' => ucwords(strtolower($buyerInfo->holder_address))  ,
                            'approved_city' => ucwords(strtolower($buyerInfo->holder_city))  ,
                            'approved_postal_code' => strtoupper($buyerInfo->holder_postal_code)  ,
                            'approved_email' =>  strtolower($buyerInfo->holder_email)  ,

                            'approved_by' =>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Approval Date/Time: ' . Carbon::now() ,
                            'status' =>  'completed' ,

                        ]
                    )){

                        echo $buyer->id;

                    }

                }

                elseif ($status == 'reject'){

                    $buyerInfo = Buyers::find($buyer_id);

                    if($buyer = Buyers::updateOrCreate(
                        [ 'id'=> $buyer_id  ] ,
                        [

                            'rejected_first_name' => ucwords(strtolower($buyerInfo->holder_first_name)) ,
                            'rejected_last_name' => ucwords(strtolower($buyerInfo->holder_last_name))  ,
                            'rejected_gender' => $buyerInfo->holder_gender  ,
                            'rejected_address' => ucwords(strtolower($buyerInfo->holder_address))  ,
                            'rejected_city' => ucwords(strtolower($buyerInfo->holder_city))  ,
                            'rejected_postal_code' => strtoupper($buyerInfo->holder_postal_code)  ,
                            'rejected_email' =>  strtolower($buyerInfo->holder_email)  ,

                            'rejected_by' =>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Rejection Date/Time: ' . Carbon::now() ,
                            'status' =>  'completed' ,

                        ]
                    )){


                        echo $buyer->id;


                    }

                }

            }





        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function show(Buyers $buyers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyers $buyers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyers $buyers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {



        if(Buyers::where('id' , $id)->delete()){

           return redirect()->back();
        }else{

            echo 'Error';
        }




    }
}
