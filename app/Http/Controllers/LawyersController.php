<?php

namespace App\Http\Controllers;

use App\Lawyers;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LawyersController extends Controller
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

        // at first , each  buyer had their own lawyer , now all buyers/sellers has only one lawyer

        $firm_name = $request->get('firm_name');
        $lawyer_first_name = $request->get('lawyer_first_name');
        $lawyer_last_name    = $request->get('lawyer_last_name');
        $lawyer_gender   = $request->get('lawyer_gender');
        $lawyer_email = $request->get('lawyer_email');
        $lawyer_phone = $request->get('lawyer_phone');
        $lawyer_fax = $request->get('lawyer_fax');
        $status = $request->get('status');
        $ref_file = $request->get('ref_file');

        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = Lawyers::where('ref_file' , $ref_file)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }

        //last time the file was edited
        fileLastTimeEdited($ref_file);

        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $ref_file)->where('user_id' , auth()->user()->email)->first()->type;
        }else{
            $user_type = auth()->user()->type;
        }

        if($status == "pending") {
            if (
                empty($firm_name) &&
                empty($lawyer_first_name) &&
                empty($lawyer_last_name) &&
                empty($lawyer_gender) &&
                empty($lawyer_email) &&
                empty($lawyer_phone) &&
                empty($lawyer_fax)

            ) {

                $status = 'completed';

            }
        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if(Lawyers::updateOrCreate(
                [ 'ref_file' => $ref_file ],
                [
                    'firm_name' =>  ucwords(strtolower($firm_name)) ,
                    'first_name' => ucwords(strtolower($lawyer_first_name))   ,
                    'last_name' => ucwords(strtolower($lawyer_last_name))   ,
                    'gender' => $lawyer_gender   ,
                    'email' => strtolower($lawyer_email)   ,
                    'phone' => $lawyer_phone ,

                    'fax' => $lawyer_fax ,

                    'status' => 'completed' ,

                ]
            )){

                if($request->ajax()) {

                    echo 'SUCCESS';

                }
                else{

                    return redirect()->back();
                }

            }


        }
        else{

            if($status == 'completed'){

                if(Lawyers::updateOrCreate(
                    [ 'ref_file' => $ref_file ],
                    [
                        'firm_name' =>  ucwords(strtolower($firm_name)) ,
                        'first_name' => ucwords(strtolower($lawyer_first_name))   ,
                        'last_name' => ucwords(strtolower($lawyer_last_name))   ,
                        'gender' => $lawyer_gender   ,
                        'email' => strtolower($lawyer_email)   ,
                        'phone' => $lawyer_phone ,
                        'fax' => $lawyer_fax ,
                        'status' => $status ,

                    ]
                )){

                    if($request->ajax()) {

                        echo 'SUCCESS';

                    }
                    else{

                        return redirect()->back();
                    }

                }


            }

            elseif ($status == 'pending'){


                if(Lawyers::updateOrCreate(
                    [ 'ref_file' => $ref_file ],
                    [
                        'holder_firm_name' =>  ucwords(strtolower($firm_name)) ,
                        'holder_first_name' => ucwords(strtolower($lawyer_first_name))   ,
                        'holder_last_name' => ucwords(strtolower($lawyer_last_name))   ,
                        'holder_gender' => $lawyer_gender   ,
                        'holder_email' => strtolower($lawyer_email)   ,
                        'holder_phone' => $lawyer_phone ,
                        'holder_fax' => $lawyer_fax ,

                        'submitted_by'=> auth()->user()->type . ' User Name: '.
                                         auth()->user()->name . ' ' .
                                         auth()->user()->last_name .'<br>'.
                                         'User Email: ' . auth()->user()->email .'<br>'.
                                         'Submission Date/Time: ' . Carbon::now() ,

                        'status' => 'pending' ,

                    ]
                )){

                    if($request->ajax()) {

                        echo 'SUCCESS';

                    }
                    else{

                        return redirect()->back();
                    }

                }
            }

            elseif ($status == 'approve'){

                $lawyerInfo = Lawyers::where('ref_file', $ref_file)->first();

                if(Lawyers::updateOrCreate(
                    [ 'ref_file' => $ref_file ],
                    [
                        'firm_name' =>  ucwords(strtolower($lawyerInfo->holder_firm_name)) ,
                        'first_name' => ucwords(strtolower($lawyerInfo->holder_first_name))   ,
                        'last_name' => ucwords(strtolower($lawyerInfo->holder_last_name))   ,
                        'gender' => $lawyerInfo->holder_gender   ,
                        'email' => strtolower($lawyerInfo->holder_email)   ,
                        'phone' => $lawyerInfo->holder_phone ,
                        'fax' => $lawyerInfo->holder_fax ,

                        'approved_firm_name' =>  ucwords(strtolower($lawyerInfo->holder_firm_name)) ,
                        'approved_first_name' => ucwords(strtolower($lawyerInfo->holder_first_name))   ,
                        'approved_last_name' => ucwords(strtolower($lawyerInfo->holder_last_name))   ,
                        'approved_gender' => $lawyerInfo->holder_gender   ,
                        'approved_email' => strtolower($lawyerInfo->holder_email)   ,
                        'approved_phone' => $lawyerInfo->holder_phone ,
                        'approved_fax' => $lawyerInfo->holder_fax ,

                        'approved_by' =>  auth()->user()->type . ' User Name: '.
                                        auth()->user()->name . ' ' .
                                        auth()->user()->last_name .'<br>'.
                                        'User Email: ' . auth()->user()->email .'<br>'.
                                        'Approval Date/Time: ' . Carbon::now()  ,

                        'status' => 'completed' ,

                    ]
                )){

                    if($request->ajax()) {

                        echo 'SUCCESS';

                    }
                    else{

                        return redirect()->back();
                    }

                }

            }

            elseif ($status == 'reject'){


                $lawyerInfo = Lawyers::where('ref_file', $ref_file)->first();


                if(Lawyers::updateOrCreate(
                    [ 'ref_file' => $ref_file ],
                    [


                        'rejected_firm_name' =>  ucwords(strtolower($lawyerInfo->holder_firm_name)) ,
                        'rejected_first_name' => ucwords(strtolower($lawyerInfo->holder_first_name))   ,
                        'rejected_last_name' => ucwords(strtolower($lawyerInfo->holder_last_name))   ,
                        'rejected_gender' => $lawyerInfo->holder_gender   ,
                        'rejected_email' => strtolower($lawyerInfo->holder_email)   ,
                        'rejected_phone' => $lawyerInfo->holder_phone ,
                        'rejected_fax' => $lawyerInfo->holder_fax ,

                        'rejected_by' =>  auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now()  ,

                        'status' => 'completed' ,

                    ]
                )){

                    if($request->ajax()) {

                        echo 'SUCCESS';

                    }
                    else{

                        return redirect()->back();
                    }

                }

            }


        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lawyers  $lawyers
     * @return \Illuminate\Http\Response
     */
    public function show(Lawyers $lawyers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lawyers  $lawyers
     * @return \Illuminate\Http\Response
     */
    public function edit(Lawyers $lawyers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lawyers  $lawyers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lawyers $lawyers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lawyers  $lawyers
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(Lawyers::where('id' , $id)->delete()){

            return redirect()->back();

        }else{

            echo 'Error';

        }
    }
}
