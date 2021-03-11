<?php

namespace App\Http\Controllers;

use App\BridgeLoan;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BridgeLoanController extends Controller
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


        $obtain_bridge_loan = $request->get('obtain_bridge_loan');
        $presents_you = $request->get('presents_you');
        $holder = $request->get('brl_holder');
        $bank = $request->get('brl_bank');
        $fire_insurance_instructions = $request->get('brl_fire_insurance_instructions');
        $priority = $request->get('brl_priority');
        $firm_name = $request->get('brl_firm_name');
        $lawyer_first_name = $request->get('brl_lawyer_first_name');
        $lawyer_last_name = $request->get('brl_lawyer_last_name');
        $lawyer_gender = $request->get('brl_lawyer_gender');
        $lawyer_email = $request->get('brl_lawyer_email');
        $lawyer_phone = $request->get('brl_lawyer_phone');
        $lawyer_fax = $request->get('brl_lawyer_fax');
        $fileid = $request->get('fileid');

        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = BridgeLoan::where('ref_file' , $fileid)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }

        //last time the file was edited
        fileLastTimeEdited($fileid);


        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
        }else{
            $user_type = auth()->user()->type;
        }


        // to be done later : check if fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))

        if($status == "pending") {

            if (
                empty($obtain_bridge_loan) &&
                empty($presents_you) &&
                empty($holder) &&
                empty($bank) &&
                empty($fire_insurance_instructions) &&
                empty($priority) &&
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

            if($file = $request->file('brl_agreement')){

                $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads/MortgageAgreement'), $new_name);

                if(BridgeLoan::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [

                        'obtain_bridge_loan' => $obtain_bridge_loan   ,
                        'presents_you' =>   $presents_you ,
                        'account_holder' =>   ucwords(strtolower($holder)) ,
                        'bank_institution' =>   ucwords(strtolower($bank)) ,
                        'priority' => $priority ,
                        'agreement' => $new_name ,
                        'fire_insurance' => $fire_insurance_instructions ,
                        'firm_name' =>  ucwords(strtolower($firm_name)) ,
                        'first_name' => ucwords(strtolower($lawyer_first_name))   ,
                        'last_name' => ucwords(strtolower($lawyer_last_name))   ,
                        'gender' => $lawyer_gender   ,
                        'email' => strtolower($lawyer_email)   ,
                        'phone' => $lawyer_phone ,
                        'fax' => $lawyer_fax ,
                        'status' => 'completed' ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }

            }
            else {

                if(BridgeLoan::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [

                        'obtain_bridge_loan' => $obtain_bridge_loan   ,
                        'presents_you' =>   $presents_you ,
                        'account_holder' =>   ucwords(strtolower($holder)) ,
                        'bank_institution' =>   ucwords(strtolower($bank)) ,
                        'priority' => $priority ,
                        'fire_insurance' => $fire_insurance_instructions ,
                        'firm_name' =>  ucwords(strtolower($firm_name)) ,
                        'first_name' => ucwords(strtolower($lawyer_first_name))   ,
                        'last_name' => ucwords(strtolower($lawyer_last_name))   ,
                        'gender' => $lawyer_gender   ,
                        'email' => strtolower($lawyer_email)   ,
                        'phone' => $lawyer_phone ,
                        'fax' => $lawyer_fax ,
                        'status' => 'completed' ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }


            }

        }
        else{

            if($status == 'completed'){

                if($file = $request->file('brl_agreement')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/MortgageAgreement'), $new_name);

                    if(BridgeLoan::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'obtain_bridge_loan' => $obtain_bridge_loan   ,
                            'presents_you' =>   $presents_you ,
                            'account_holder' =>   ucwords(strtolower($holder)) ,
                            'bank_institution' =>   ucwords(strtolower($bank)) ,
                            'priority' => $priority ,
                            'agreement' => $new_name ,
                            'fire_insurance' => $fire_insurance_instructions ,
                            'firm_name' =>  ucwords(strtolower($firm_name)) ,
                            'first_name' => ucwords(strtolower($lawyer_first_name))   ,
                            'last_name' => ucwords(strtolower($lawyer_last_name))   ,
                            'gender' => $lawyer_gender   ,
                            'email' => strtolower($lawyer_email)   ,
                            'phone' => $lawyer_phone ,
                            'fax' => $lawyer_fax ,
                            'status' => 'completed' ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }

                }
                else {

                    if(BridgeLoan::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'obtain_bridge_loan' => $obtain_bridge_loan   ,
                            'presents_you' =>   $presents_you ,
                            'account_holder' =>   ucwords(strtolower($holder)) ,
                            'bank_institution' =>   ucwords(strtolower($bank)) ,
                            'priority' => $priority ,
                            'fire_insurance' => $fire_insurance_instructions ,
                            'firm_name' =>  ucwords(strtolower($firm_name)) ,
                            'first_name' => ucwords(strtolower($lawyer_first_name))   ,
                            'last_name' => ucwords(strtolower($lawyer_last_name))   ,
                            'gender' => $lawyer_gender   ,
                            'email' => strtolower($lawyer_email)   ,
                            'phone' => $lawyer_phone ,
                            'fax' => $lawyer_fax ,
                            'status' => 'completed' ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }


                }

            }

            elseif ($status == 'pending'){

                if($file = $request->file('brl_agreement')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/MortgageAgreement'), $new_name);

                    if(BridgeLoan::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'holder_obtain_bridge_loan' => $obtain_bridge_loan   ,
                            'holder_presents_you' =>   $presents_you ,
                            'holder_account_holder' =>   ucwords(strtolower($holder)) ,
                            'holder_bank_institution' =>   ucwords(strtolower($bank)) ,
                            'holder_priority' => $priority ,
                            'holder_agreement' => $new_name ,
                            'holder_fire_insurance' => $fire_insurance_instructions ,
                            'holder_firm_name' =>  ucwords(strtolower($firm_name)) ,
                            'holder_first_name' => ucwords(strtolower($lawyer_first_name))   ,
                            'holder_last_name' => ucwords(strtolower($lawyer_last_name))   ,
                            'holder_gender' => $lawyer_gender   ,
                            'holder_email' => strtolower($lawyer_email)   ,
                            'holder_phone' => $lawyer_phone ,
                            'holder_fax' => $lawyer_fax ,

                            'submitted_by'=>  auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => 'pending' ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }

                }
                else {

                    if(BridgeLoan::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'holder_obtain_bridge_loan' => $obtain_bridge_loan   ,
                            'holder_presents_you' =>   $presents_you ,
                            'holder_account_holder' =>   ucwords(strtolower($holder)) ,
                            'holder_bank_institution' =>   ucwords(strtolower($bank)) ,
                            'holder_priority' => $priority ,
                            'holder_fire_insurance' => '' ,
                            'holder_firm_name' =>  ucwords(strtolower($firm_name)) ,
                            'holder_first_name' => ucwords(strtolower($lawyer_first_name))   ,
                            'holder_last_name' => ucwords(strtolower($lawyer_last_name))   ,
                            'holder_gender' => $lawyer_gender   ,
                            'holder_email' => strtolower($lawyer_email)   ,
                            'holder_phone' => $lawyer_phone ,
                            'holder_fax' => $lawyer_fax ,

                            'submitted_by'=> auth()->user()->type ,

                            'status' => 'pending' ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }


                }

            }

            elseif ($status == 'approve'){

                $Info = BridgeLoan::where('ref_file', $fileid)->first();


                if(BridgeLoan::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [

                        'obtain_bridge_loan' => $Info->holder_obtain_bridge_loan   ,
                        'presents_you' =>   $Info->holder_presents_you ,
                        'account_holder' =>   ucwords(strtolower($Info->holder_account_holder)) ,
                        'bank_institution' =>   ucwords(strtolower($Info->holder_bank_institution)) ,
                        'priority' => $Info->holder_priority ,
                        'agreement' => $Info->holder_agreement ,
                        'fire_insurance' => $Info->holder_fire_insurance ,
                        'firm_name' =>  ucwords(strtolower($Info->holder_firm_name)) ,
                        'first_name' => ucwords(strtolower($Info->holder_first_name))   ,
                        'last_name' => ucwords(strtolower($Info->holder_last_name))   ,
                        'gender' => $Info->holder_gender   ,
                        'email' => strtolower($Info->holder_email)   ,
                        'phone' => $Info->holder_phone ,
                        'fax' => $Info->holder_fax ,


                        'approved_obtain_bridge_loan' => $Info->holder_obtain_bridge_loan   ,
                        'approved_presents_you' =>   $Info->holder_presents_you ,
                        'approved_account_holder' =>   ucwords(strtolower($Info->holder_account_holder)) ,
                        'approved_bank_institution' =>   ucwords(strtolower($Info->holder_bank_institution)) ,
                        'approved_priority' => $Info->holder_priority ,
                        'approved_agreement' => $Info->holder_agreement ,
                        'approved_fire_insurance' => $Info->holder_fire_insurance ,
                        'approved_firm_name' =>  ucwords(strtolower($Info->holder_firm_name)) ,
                        'approved_first_name' => ucwords(strtolower($Info->holder_first_name))   ,
                        'approved_last_name' => ucwords(strtolower($Info->holder_last_name))   ,
                        'approved_gender' => $Info->holder_gender   ,
                        'approved_email' => strtolower($Info->holder_email)   ,
                        'approved_phone' => $Info->holder_phone ,
                        'approved_fax' => $Info->holder_fax ,

                        'approved_by' =>  auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Approval Date/Time: ' . Carbon::now() ,

                        'status' => 'completed' ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }


            }

            elseif ($status == 'reject'){

                $Info = BridgeLoan::where('ref_file', $fileid)->first();

                if(BridgeLoan::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [
                        'rejected_obtain_bridge_loan' => $Info->holder_obtain_bridge_loan   ,
                        'rejected_presents_you' =>   $Info->holder_presents_you ,
                        'rejected_account_holder' =>   ucwords(strtolower($Info->holder_account_holder)) ,
                        'rejected_bank_institution' =>   ucwords(strtolower($Info->holder_bank_institution)) ,
                        'rejected_priority' => $Info->holder_priority ,
                        'rejected_agreement' => $Info->holder_agreement ,
                        'rejected_fire_insurance' => $Info->holder_fire_insurance ,
                        'rejected_firm_name' =>  ucwords(strtolower($Info->holder_firm_name)) ,
                        'rejected_first_name' => ucwords(strtolower($Info->holder_first_name))   ,
                        'rejected_last_name' => ucwords(strtolower($Info->holder_last_name))   ,
                        'rejected_gender' => $Info->holder_gender   ,
                        'rejected_email' => strtolower($Info->holder_email)   ,
                        'rejected_phone' => $Info->holder_phone ,
                        'rejected_fax' => $Info->holder_fax ,

                        'rejected_by' =>  auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now() ,

                        'status' => 'completed' ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }


            }

        }






    }

    public function download($path)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/MortgageAgreement/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }

    public function delete($id)
    {
        if(Mortgages::where('id' , $id)->update(['agreement'=>''])){

            return redirect()->back();
        }else {

            echo 'Error';
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\BridgeLoan  $bridgeLoan
     * @return \Illuminate\Http\Response
     */
    public function show(BridgeLoan $bridgeLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BridgeLoan  $bridgeLoan
     * @return \Illuminate\Http\Response
     */
    public function edit(BridgeLoan $bridgeLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BridgeLoan  $bridgeLoan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BridgeLoan $bridgeLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BridgeLoan  $bridgeLoan
     * @return \Illuminate\Http\Response
     */
    public function destroy(BridgeLoan $bridgeLoan)
    {
        //
    }
}
