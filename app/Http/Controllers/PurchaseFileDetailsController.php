<?php

namespace App\Http\Controllers;

use App\PurchaseFileDetails;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseFileDetailsController extends Controller
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

        $closing_date = $request->get('closing_date');
        $is_condo = $request->get('is_condo');
        $require_certificate = $request->get('require_certificate');
        $company_name = $request->get('company_name');
        $email = $request->get('email');
        $number = $request->get('number');
        $address  = $request->get('address');
        $fileid = $request->get('fileid');


        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = PurchaseFileDetails::where('ref_file' , $fileid)->first();

            if(isset($checkexist)){
                $status = 'pending';
            }
            else{
                $status = 'completed';
            }

        }

        if(auth()->user()->type != "Admin"){
            $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
        }else{
            $user_type = auth()->user()->type;
        }

        //last time the file was edited
        fileLastTimeEdited($fileid);

        // to be done later : check if requested fields are all empty and current data is empty as well ,
        // i.e : if(empty($name) && empty($row->name))
        if($status == "pending") {

            if (
                empty($closing_date) &&
                empty($is_condo) &&
                empty($require_certificate) &&
                empty($company_name) &&
                empty($email) &&
                empty($number) &&
                empty($address)

            ) {

                $status = 'completed';

            }
        }


        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {

            if($file = $request->file('status_certificate')){

                $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads/StatusCertificates'), $new_name);

                if(DB::table('purchase_file_details')->updateOrInsert(
                    ['ref_file' => $fileid ],
                    [

                        'closing_date' => $closing_date,
                        'is_condo' => $is_condo,
                        'company_name' => ucwords(strtolower($company_name)) ,
                        'require_certificate' => $require_certificate,
                        'email' => $email ,
                        'number' => $number ,
                        'address' => ucwords(strtolower($address))  ,
                        'status_certificate' => $new_name ,
                        'status' => 'completed' ,

                    ] )){

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);

                }

            }
            else {

                if(PurchaseFileDetails::updateOrCreate(
                    ['ref_file' => $fileid ],
                    [

                        'closing_date' => $closing_date,
                        'is_condo' => $is_condo,
                        'company_name' => ucwords(strtolower($company_name)),
                        'require_certificate' => $require_certificate,
                        'email' => strtolower($email)   ,
                        'number' => $number ,
                        'address' => ucwords(strtolower($address))  ,
                        'status' => 'completed'  ,

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

                if($file = $request->file('status_certificate')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/StatusCertificates'), $new_name);

                    if(DB::table('purchase_file_details')->updateOrInsert(
                        ['ref_file' => $fileid ],
                        [

                            'closing_date' => $closing_date,
                            'is_condo' => $is_condo,
                            'company_name' => ucwords(strtolower($company_name)) ,
                            'require_certificate' => $require_certificate,
                            'email' => $email ,
                            'number' => $number ,
                            'address' => ucwords(strtolower($address))  ,
                            'status_certificate' => $new_name ,
                            'status' => 'completed' ,

                        ] )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);

                    }

                }
                else {

                    if(PurchaseFileDetails::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'closing_date' => $closing_date,
                            'is_condo' => $is_condo,
                            'company_name' => ucwords(strtolower($company_name)),
                            'require_certificate' => $require_certificate,
                            'email' => strtolower($email)   ,
                            'number' => $number ,
                            'address' => ucwords(strtolower($address))  ,
                            'status' => 'completed'  ,

                        ]
                    )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }


                }
            }

            elseif ($status == 'pending'){

                if($file = $request->file('status_certificate')){

                    $new_name = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/StatusCertificates'), $new_name);

                    if(DB::table('purchase_file_details')->updateOrInsert(
                        ['ref_file' => $fileid ],
                        [

                            'holder_closing_date' => $closing_date,
                            'holder_is_condo' => $is_condo,
                            'holder_company_name' => ucwords(strtolower($company_name)) ,
                            'holder_require_certificate' => $require_certificate,
                            'holder_email' => $email ,
                            'holder_number' => $number ,
                            'holder_address' => ucwords(strtolower($address))  ,
                            'holder_status_certificate' => $new_name ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
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

                    if(PurchaseFileDetails::updateOrCreate(
                        ['ref_file' => $fileid ],
                        [

                            'holder_closing_date' => $closing_date,
                            'holder_is_condo' => $is_condo,
                            'holder_company_name' => ucwords(strtolower($company_name)) ,
                            'holder_require_certificate' => $require_certificate,
                            'holder_email' => $email ,
                            'holder_number' => $number ,
                            'holder_address' => ucwords(strtolower($address))  ,

                            'submitted_by'=> auth()->user()->type ,

                            'status' => 'pending' ,

                        ]
                    )){

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }


                }

            }

            elseif ($status == 'approve'){

                $Info = PurchaseFileDetails::where('ref_file', $fileid)->first();

                if(DB::table('purchase_file_details')->updateOrInsert(
                    ['ref_file' => $fileid ],
                    [

                        'closing_date' => $Info->holder_closing_date,
                        'is_condo' => $Info->holder_is_condo,
                        'company_name' => ucwords(strtolower($Info->holder_company_name)) ,
                        'require_certificate' => $Info->holder_require_certificate,
                        'email' => $Info->holder_email ,
                        'number' => $Info->holder_number ,
                        'address' => ucwords(strtolower($Info->holder_address))  ,
                        'status_certificate' => $Info->holder_status_certificate ,

                        'approved_closing_date' => $Info->holder_closing_date,
                        'approved_is_condo' => $Info->holder_is_condo,
                        'approved_company_name' => ucwords(strtolower($Info->holder_company_name)) ,
                        'approved_require_certificate' => $Info->holder_require_certificate,
                        'approved_email' => $Info->holder_email ,
                        'approved_number' => $Info->holder_number ,
                        'approved_address' => ucwords(strtolower($Info->holder_address))  ,
                        'approved_status_certificate' => $Info->holder_status_certificate ,

                        'approved_by' => auth()->user()->type . ' User Name: '.
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


                $Info = PurchaseFileDetails::where('ref_file', $fileid)->first();

                if(DB::table('purchase_file_details')->updateOrInsert(
                    ['ref_file' => $fileid ],
                    [

                        'rejected_closing_date' => $Info->holder_closing_date,
                        'rejected_is_condo' => $Info->holder_is_condo,
                        'rejected_company_name' => ucwords(strtolower($Info->holder_company_name)) ,
                        'rejected_require_certificate' => $Info->holder_require_certificate,
                        'rejected_email' => $Info->holder_email ,
                        'rejected_number' => $Info->holder_number ,
                        'rejected_address' => ucwords(strtolower($Info->holder_address))  ,
                        'rejected_status_certificate' => $Info->holder_status_certificate ,

                        'rejected_by' => auth()->user()->type . ' User Name: '.
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

    public function doc_download($path)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/StatusCertificates/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }

    public function doc_delete($id)
    {
        if(P::where('id' , $id)->update(['tax_bill'=>''])){

            return redirect()->back();
        }else {

            echo 'Error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseFileDetails  $purchaseFileDetails
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseFileDetails $purchaseFileDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseFileDetails  $purchaseFileDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseFileDetails $purchaseFileDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseFileDetails  $purchaseFileDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseFileDetails $purchaseFileDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseFileDetails  $purchaseFileDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseFileDetails $purchaseFileDetails)
    {
        //
    }
}
