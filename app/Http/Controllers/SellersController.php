<?php

namespace App\Http\Controllers;

use App\Sellers;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SellersController extends Controller
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

        $seller_id = $request->get('seller_id');
        $seller_first_name = $request->get('seller_first_name');
        $seller_last_name = $request->get('seller_last_name');
        $seller_birthdate = $request->get('seller_birthdate');
        $seller_address = $request->get('seller_address');
        $seller_city = $request->get('seller_city');
        $seller_postal_code = $request->get('seller_postal_code');
        $seller_email = $request->get('seller_email');
        $seller_gender = $request->get('seller_gender');
        $seller_phone = $request->get('seller_phone');
        $isthisyourprimary = $request->get('isthisyourprimary');
        $areyoumarried = $request->get('areyoumarried');
        $isyourspouseon = $request->get('isyourspouseon');
        $status = $request->get('status');
        $fileid = $request->get('fileid');

        if($request->ajax()) {

            if(auth()->user()->type != "Admin"){
                $user_type = UserFileTypes::where('file_id', $fileid)->where('user_id' , auth()->user()->email)->first()->type;
            }else{
                $user_type = auth()->user()->type;
            }


            //last time the file was edited
            fileLastTimeEdited($fileid);


            // to be done later : check if requested fields are all empty and current data is empty as well ,
            // i.e : if(empty($name) && empty($row->name))
            // if status is pending , check if all fields are empty, all empty fields is not allowed
            if($status == "pending"){
                if(
                    empty($seller_first_name) &&
                    empty($seller_last_name) &&
                    empty($seller_birthdate) &&
                    empty($seller_address) &&
                    empty($seller_city) &&
                    empty($seller_postal_code) &&
                    empty($seller_email) &&
                    empty($seller_gender) &&
                    empty($seller_phone) &&
                    empty($isthisyourprimary) &&
                    empty($areyoumarried) &&
                    empty($isyourspouseon)
                ){

                    $status = 'completed';

                }
            }

            // checking for status with those two cases only cuz it would not submit approvals or rejections without it
            if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {
                $seller =  Sellers::updateOrCreate(
                    ['id'=>$seller_id] ,
                    [
                        'first_name' =>  ucwords(strtolower($seller_first_name)) ,
                        'last_name' =>  ucwords(strtolower($seller_last_name)) ,
                        'birth_date' => $seller_birthdate ,
                        'address' =>  ucwords(strtolower($seller_address)) ,
                        'city' =>  ucwords(strtolower($seller_city))  ,
                        'postal_code' => strtoupper($seller_postal_code)  ,
                        'email' => strtolower($seller_email)  ,
                        'phone' => $seller_phone ,
                        'gender' => $seller_gender ,
                        'is_client_primary' => $isthisyourprimary ,
                        'is_married' => $areyoumarried ,
                        'is_spouse_on_title' => $isyourspouseon ,
                        'status' => 'completed' ,
                        'ref_file' => $fileid

                    ]
                );


            }
            else{

                if($status == 'completed'){

                    $seller =  Sellers::updateOrCreate(
                        ['id'=>$seller_id] ,
                        [
                            'first_name' =>  ucwords(strtolower($seller_first_name)) ,
                            'last_name' =>  ucwords(strtolower($seller_last_name)) ,
                            'birth_date' => $seller_birthdate ,
                            'address' =>  ucwords(strtolower($seller_address)) ,
                            'city' =>  ucwords(strtolower($seller_city))  ,
                            'postal_code' => strtoupper($seller_postal_code)  ,
                            'email' => strtolower($seller_email)  ,
                            'phone' => $seller_phone ,
                            'gender' => $seller_gender ,
                            'is_client_primary' => $isthisyourprimary ,
                            'is_married' => $areyoumarried ,
                            'is_spouse_on_title' => $isyourspouseon ,
                            'status' => $status ,
                            'ref_file' => $fileid

                        ]
                    );
                }

                elseif ($status == 'pending'){

                    $seller =  Sellers::updateOrCreate(
                        ['id'=>$seller_id] ,
                        [
                            'holder_first_name' =>  ucwords(strtolower($seller_first_name)) ,
                            'holder_last_name' =>  ucwords(strtolower($seller_last_name)) ,
                            'holder_birth_date' => $seller_birthdate ,
                            'holder_address' =>  ucwords(strtolower($seller_address)) ,
                            'holder_city' =>  ucwords(strtolower($seller_city))  ,
                            'holder_postal_code' => strtoupper($seller_postal_code)  ,
                            'holder_email' => strtolower($seller_email)  ,
                            'holder_phone' => $seller_phone ,
                            'holder_gender' => $seller_gender ,
                            'holder_is_client_primary' => $isthisyourprimary ,
                            'holder_is_married' => $areyoumarried ,
                            'holder_is_spouse_on_title' => $isyourspouseon ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,


                            'status' => $status ,
                            'ref_file' => $fileid
                        ]
                    );

                }

                elseif ($status == 'approve'){

                    $sellerinfo = Sellers::find($seller_id);

                    $seller =  Sellers::updateOrCreate(
                        ['id'=>$seller_id] ,
                        [

                            'first_name' =>  ucwords(strtolower($sellerinfo->holder_first_name)) ,
                            'last_name' =>  ucwords(strtolower($sellerinfo->holder_last_name)) ,
                            'birth_date' => $sellerinfo->holder_birth_date ,
                            'address' =>  ucwords(strtolower($sellerinfo->holder_address)) ,
                            'city' =>  ucwords(strtolower($sellerinfo->holder_city))  ,
                            'postal_code' => strtoupper($sellerinfo->holder_postal_code)  ,
                            'email' => strtolower($sellerinfo->holder_email)  ,
                            'phone' => $sellerinfo->holder_phone ,
                            'gender' => $sellerinfo->holder_gender ,
                            'is_client_primary' => $sellerinfo->holder_is_client_primary ,
                            'is_married' => $sellerinfo->holder_is_married ,
                            'is_spouse_on_title' => $sellerinfo->holder_is_spouse_on_title ,

                            'approved_first_name' =>  ucwords(strtolower($sellerinfo->holder_first_name)) ,
                            'approved_last_name' =>  ucwords(strtolower($sellerinfo->holder_last_name)) ,
                            'approved_birth_date' => $sellerinfo->holder_birth_date ,
                            'approved_address' =>  ucwords(strtolower($sellerinfo->holder_address)) ,
                            'approved_city' =>  ucwords(strtolower($sellerinfo->holder_city))  ,
                            'approved_postal_code' => strtoupper($sellerinfo->holder_postal_code)  ,
                            'approved_email' => strtolower($sellerinfo->holder_email)  ,
                            'approved_phone' => $sellerinfo->holder_phone ,
                            'approved_gender' => $sellerinfo->holder_gender ,
                            'approved_is_client_primary' => $sellerinfo->holder_is_client_primary ,
                            'approved_is_married' => $sellerinfo->holder_is_married ,
                            'approved_is_spouse_on_title' => $sellerinfo->holder_is_spouse_on_title ,

                            'approved_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Approval Date/Time: ' . Carbon::now() ,

                            'status' => 'completed' ,
                            'ref_file' => $fileid
                        ]
                    );

                }

                elseif ($status == 'reject'){

                    $sellerinfo = Sellers::find($seller_id);

                    $seller =  Sellers::updateOrCreate(
                        ['id'=>$seller_id] ,
                        [

                            'rejected_first_name' =>  ucwords(strtolower($sellerinfo->holder_first_name)) ,
                            'rejected_last_name' =>  ucwords(strtolower($sellerinfo->holder_last_name)) ,
                            'rejected_birth_date' => $sellerinfo->holder_birth_date ,
                            'rejected_address' =>  ucwords(strtolower($sellerinfo->holder_address)) ,
                            'rejected_city' =>  ucwords(strtolower($sellerinfo->holder_city))  ,
                            'rejected_postal_code' => strtoupper($sellerinfo->holder_postal_code)  ,
                            'rejected_email' => strtolower($sellerinfo->holder_email)  ,
                            'rejected_phone' => $sellerinfo->holder_phone ,
                            'rejected_gender' => $sellerinfo->holder_gender ,
                            'rejected_is_client_primary' => $sellerinfo->holder_is_client_primary ,
                            'rejected_is_married' => $sellerinfo->holder_is_married ,
                            'rejected_is_spouse_on_title' => $sellerinfo->holder_is_spouse_on_title ,

                            'rejected_by' => auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Rejection Date/Time: ' . Carbon::now() ,


                            'status' => 'completed' ,
                            'ref_file' => $fileid
                        ]
                    );

                }

            }




            echo $seller->id;

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function show(Sellers $sellers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function edit(Sellers $sellers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sellers $sellers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sellers  $sellers
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(Sellers::where('id' , $id)->delete()){

            return redirect()->back();
        }
        else{

            echo 'Error ';
        }
    }
}
