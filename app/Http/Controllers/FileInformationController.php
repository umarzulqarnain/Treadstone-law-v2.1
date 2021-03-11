<?php

namespace App\Http\Controllers;

use App\FileDocuments;
use App\FileInformation;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FileInformationController extends Controller
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


        echo 'what';


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file_price = $request->get('file_price');
        $wasadepositreceived = $request->get('wasadepositreceived');
        $much_received = $request->get('much_received');
        $who_received = $request->get('who_received');
        $other_receiver = $request->get('other_receiver');
        $fileid = $request->get('fileid');

        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = FileInformation::where('ref_file' , $fileid)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }


        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->user_type;
        }else{
            $user_type = auth()->user()->type;
        }

        //last time the file was edited
        fileLastTimeEdited($fileid);


        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))
        if($status == "pending") {

            if (
                empty($file_price) &&
                empty($wasadepositreceived) &&
                empty($much_received) &&
                empty($who_received) &&
                empty($other_receiver) &&
                empty($much_received)

            ) {

                $status = 'completed';

            }
        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if($request->ajax()) {

                if(FileInformation::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [

                        'is_deposit_received' => $wasadepositreceived ,
                        'file_price' => $file_price ,
                        'much_received' => $much_received ,
                        'who_received' => $who_received ,
                        'other_receiver' => $other_receiver ,
                        'status' => 'completed' ,


                    ]
                )){

                    echo 'SUCCESS';

                }


            }


        }
        else{

            if($status == 'completed'){

                if($request->ajax()) {

                    if(FileInformation::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'is_deposit_received' => $wasadepositreceived ,
                            'file_price' => $file_price ,
                            'much_received' => $much_received ,
                            'who_received' => $who_received ,
                            'other_receiver' => $other_receiver ,
                            'status' => $status ,


                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }

            }

            elseif ($status == 'pending'){

                if($request->ajax()) {

                    if(FileInformation::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'holder_is_deposit_received' => $wasadepositreceived ,
                            'holder_file_price' => $file_price ,
                            'holder_much_received' => $much_received ,
                            'holder_who_received' => $who_received ,
                            'holder_other_receiver' => $other_receiver ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => $status ,


                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }

            }

            elseif ($status == 'approve'){

                $Info = FileInformation::where('ref_file', $fileid)->first();

                if($request->ajax()) {

                    if(FileInformation::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'is_deposit_received' => $Info->holder_is_deposit_received ,
                            'file_price' => $Info->holder_file_price  ,
                            'much_received' => $Info->holder_much_received  ,
                            'who_received' => $Info->holder_who_received  ,
                            'other_receiver' => $Info->holder_other_receiver  ,

                            'approved_is_deposit_received' => $Info->holder_is_deposit_received ,
                            'approved_file_price' => $Info->holder_file_price  ,
                            'approved_much_received' => $Info->holder_much_received  ,
                            'approved_who_received' => $Info->holder_who_received  ,
                            'approved_other_receiver' => $Info->holder_other_receiver  ,

                            'approved_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now(),

                            'status' => 'completed' ,

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }

            }

            elseif ($status == 'reject'){

                $Info = FileInformation::where('ref_file', $fileid)->first();

                if($request->ajax()) {

                    if(FileInformation::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [


                            'rejected_is_deposit_received' => $Info->holder_is_deposit_received ,
                            'rejected_file_price' => $Info->holder_file_price  ,
                            'rejected_much_received' => $Info->holder_much_received  ,
                            'rejected_who_received' => $Info->holder_who_received  ,
                            'rejected_other_receiver' => $Info->holder_other_receiver  ,

                            'rejected_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Rejection Date/Time: ' . Carbon::now() ,


                            'status' => 'completed' ,

                        ]
                    )){

                        echo 'SUCCESS';

                    }


                }


            }

        }







    }



    /**
     * Display the specified resource.
     *
     * @param  \App\FileInformation  $fileInformation
     * @return \Illuminate\Http\Response
     */
    public function show(FileInformation $fileInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileInformation  $fileInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(FileInformation $fileInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileInformation  $fileInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileInformation $fileInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileInformation  $fileInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileInformation $fileInformation)
    {
        //
    }
}
