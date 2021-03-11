<?php

namespace App\Http\Controllers;

use App\Mortgages;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MortgagesController extends Controller
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


        $mort_id = $request->get('mort_id');
        $mort_holder = $request->get('mort_holder');
        $mort_bank = $request->get('mort_bank');
        $fire_insurance_instructions = $request->get('fire_insurance_instructions');
        $mort_priority = $request->get('mort_priority');
        $mortaggesNumber = $request->get('mortaggesNumber');
        $fileid = $request->get('fileid');

        //check mortgages number
        $mortNumb = Mortgages::where('ref_file' , $fileid)->get()->count();


        if($mortaggesNumber > $mortNumb){

            $count = $mortaggesNumber - $mortNumb ;

           for($i=1 ; $i <= $count ; $i++){

               Mortgages::create(

                   [

                       'ref_file' => $fileid ,

                   ]

               );

           }

        }


        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = Mortgages::where('id' , $mort_id)->first();

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



        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))
        if($status == "pending") {

            if (
                empty($mort_id) &&
                empty($mort_holder) &&
                empty($mort_bank) &&
                empty($fire_insurance_instructions) &&
                empty($mort_priority)

            ) {

                $status = 'completed';

            }
        }


        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {
            if($file = $request->file('mort_agreement')){

                $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads/MortgageAgreement'), $new_name);

                if(DB::table('mortgages')->updateOrInsert(
                    ['id' => $mort_id ],
                    [

                        'account_holder' =>   ucwords(strtolower($mort_holder)) ,
                        'bank_institution' =>   $mort_bank ,
                        'priority' => $mort_priority ,
                        'agreement' => $new_name ,
                        'fire_insurance' => $fire_insurance_instructions ,
                        'created_at' => Carbon::now() ,
                        'updated_at' => Carbon::now() ,
                        'status' => 'completed' ,
                        'ref_file' => $fileid ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }

            }
            else {

                if(Mortgages::updateOrCreate(
                    ['id' => $mort_id ],
                    [
                        'account_holder' =>   ucwords(strtolower($mort_holder)) ,
                        'bank_institution' => $mort_bank,
                        'priority' => $mort_priority ,
                        'fire_insurance' => $fire_insurance_instructions ,
                        'status' => 'completed' ,

                        'ref_file' => $fileid ,

                    ]
                )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);
                }


            }



        }
        else{



            if($status == 'completed'){

                if($file = $request->file('mort_agreement')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/MortgageAgreement'), $new_name);

                    if(DB::table('mortgages')->updateOrInsert(
                        ['id' => $mort_id ],
                        [

                            'account_holder' =>   ucwords(strtolower($mort_holder)) ,
                            'bank_institution' =>   $mort_bank ,
                            'priority' => $mort_priority ,
                            'agreement' => $new_name ,
                            'fire_insurance' => $fire_insurance_instructions ,
                            'created_at' => Carbon::now() ,
                            'updated_at' => Carbon::now() ,
                            'status' => 'completed' ,
                            'ref_file' => $fileid ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }

                }
                else {

                    if(Mortgages::updateOrCreate(
                        ['id' => $mort_id ],
                        [
                            'account_holder' =>   ucwords(strtolower($mort_holder)) ,
                            'bank_institution' => $mort_bank,
                            'priority' => $mort_priority ,
                            'fire_insurance' => $fire_insurance_instructions ,
                            'status' => 'completed' ,

                            'ref_file' => $fileid ,

                        ]
                    )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }


                }

            }

            elseif ($status == 'pending'){

                if($file = $request->file('mort_agreement')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/MortgageAgreement'), $new_name);

                    if(DB::table('mortgages')->updateOrInsert(
                        ['id' => $mort_id ],
                        [

                            'holder_account_holder' =>   ucwords(strtolower($mort_holder)) ,
                            'holder_bank_institution' =>   $mort_bank ,
                            'holder_priority' => $mort_priority ,
                            'holder_agreement' => $new_name ,
                            'holder_fire_insurance' => $fire_insurance_instructions ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => 'pending' ,
                            'ref_file' => $fileid ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }

                }
                else {

                    if(Mortgages::updateOrCreate(
                        ['id' => $mort_id ],
                        [
                            'holder_account_holder' =>   ucwords(strtolower($mort_holder)) ,
                            'holder_bank_institution' => $mort_bank,
                            'holder_priority' => $mort_priority ,
                            'holder_fire_insurance' => $fire_insurance_instructions ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => 'pending' ,
                            'ref_file' => $fileid ,

                        ]
                    )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }


                }

            }

            elseif ($status == 'approve'){

                $Info = Mortgages::where('id', $mort_id)->first();


                if(DB::table('mortgages')->updateOrInsert(
                    ['id' => $mort_id ],
                    [

                        'account_holder' =>  ucwords(strtolower($Info->holder_account_holder)) ,
                        'bank_institution' =>   $Info->holder_bank_institution ,
                        'priority' => $Info->holder_priority ,
                        'agreement' => $Info->holder_agreement ,
                        'fire_insurance' => $Info->holder_fire_insurance ,

                        'approved_account_holder' =>  ucwords(strtolower($Info->holder_account_holder)) ,
                        'approved_bank_institution' =>   $Info->holder_bank_institution ,
                        'approved_priority' => $Info->holder_priority ,
                        'approved_agreement' => $Info->holder_agreement ,
                        'approved_fire_insurance' => $Info->holder_fire_insurance ,

                        'approved_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Approval Date/Time: ' . Carbon::now() ,
                        'status' => 'completed' ,
                        'ref_file' => $fileid ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }


            }

            elseif ($status == 'reject'){

                $Info = Mortgages::where('id', $mort_id)->first();

                if(DB::table('mortgages')->updateOrInsert(
                    ['id' => $mort_id ],
                    [

                        'rejected_account_holder' =>  ucwords(strtolower($Info->holder_account_holder)) ,
                        'rejected_bank_institution' =>   $Info->holder_bank_institution ,
                        'rejected_priority' => $Info->holder_priority ,
                        'rejected_agreement' => $Info->holder_agreement ,
                        'rejected_fire_insurance' => $Info->holder_fire_insurance ,

                        'rejected_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now() ,

                        'status' => 'completed' ,
                        'ref_file' => $fileid ,

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
     * @param  \App\Mortgages  $mortgages
     * @return \Illuminate\Http\Response
     */
    public function show(Mortgages $mortgages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mortgages  $mortgages
     * @return \Illuminate\Http\Response
     */
    public function edit(Mortgages $mortgages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mortgages  $mortgages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mortgages $mortgages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mortgages  $mortgages
     * @return \Illuminate\Http\Response
     */
    public function delete_mort($id)
    {

        if(Mortgages::where('id' , $id)->delete()){

            return redirect()->back();


        }
        else {

            echo 'Error';
        }


    }
}
