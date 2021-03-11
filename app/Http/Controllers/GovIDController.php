<?php

namespace App\Http\Controllers;

use App\GovID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GovIDController extends Controller
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


        $ref_seller = $request->get('ref_seller');

        $status_one_front = $request->get('status_one_front'); // status exist only if it is approve or rejected in tge review popup
        $status_one_back = $request->get('status_one_back'); // status exist only if it is approve or rejected in tge review popup
        $status_two_front = $request->get('status_two_front'); // status exist only if it is approve or rejected in tge review popup
        $status_two_back = $request->get('status_two_back'); // status exist only if it is approve or rejected in tge review popup

        $ID = GovID::where('ref_seller' , $ref_seller)->first();



        if($idONE_FRONT = $request->file('id-one-front')){
            $frontOneNme = $idONE_FRONT->getClientOriginalName().'_'. date('Y-m-d-H-i-s'). '_FRONT_ONE_';
            $idONE_FRONT->move(public_path('uploads/IDs'), $frontOneNme);
        }else{

            isset($ID->id_one_front) ? $frontOneNme = $ID->id_one_front : $frontOneNme = '';
        }

        if($idONE_BACK = $request->file('id-one-back')) {
            $backOneName = $idONE_BACK->getClientOriginalName(). '_'. date('Y-m-d-H-i-s') . '_BACK_ONE_';
            $idONE_BACK->move(public_path('uploads/IDs'), $backOneName);
        } else{

           isset($ID->id_one_back) ? $backOneName= $ID->id_one_back : $backOneName= '';

        }

        if($idTWO_FRONT = $request->file('id-two-front')) {
            $frontTwoName = $idTWO_FRONT->getClientOriginalName(). '_'. date('Y-m-d-H-i-s') . '_FRONT_TWO_';
            $idTWO_FRONT->move(public_path('uploads/IDs'), $frontTwoName);
        }else{

          isset($ID->id_two_front) ? $frontTwoName= $ID->id_two_front : $frontTwoName= '';

        }

        if($idTWO_BACK = $request->file('id-two-back')) {
            $backTwoName =  $idTWO_BACK->getClientOriginalName(). '_'. date('Y-m-d-H-i-s') . '_BACK_TWO_';
            $idTWO_BACK->move(public_path('uploads/IDs'), $backTwoName);
        } else{

           isset($ID->id_two_back) ? $backTwoName= $ID->id_two_back : $backTwoName= '';

        }


        // THE FOLLOWING ALGORITHM NEEDS TO BE CHANGED AND IMPROVED TO BE MORE ORGANIZED

        if($status_one_front == 'completed'){

            if(GovID::updateOrCreate(
                ['ref_seller' => $ref_seller ],
                [
                    'id_one_front' => $frontOneNme ,
                    'id_one_back' => $backOneName ,
                    'id_two_front' => $frontTwoName ,
                    'id_two_back' => $backTwoName ,

                    'status_one_front' => 'pending',
                    'status_one_back' => 'pending',
                    'status_two_front' => 'pending',
                    'status_two_back' => 'pending',

                ]

            )){


                if($request->ajax()) {

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);
                }
                else{

                    return redirect()->back();
                }


            }


        } // action by client or other users
        elseif($status_one_front == 'pending'){

            if(GovID::updateOrCreate(
                ['ref_seller' => $ref_seller ],
                [
                    'holder_id_one_front' => $frontOneNme ,
                    'holder_id_one_back' => $backOneName ,
                    'holder_id_two_front' => $frontTwoName ,
                    'holder_id_two_back' => $backTwoName ,

                    'submitted_by'=> auth()->user()->type ,

                    'status' => 'pending' ,
                ]

            )){


                if($request->ajax()) {

                    return response()->json([
                        'message'   => 'SUCCESS',
                    ]);
                }
                else{

                    return redirect()->back();
                }


            }


        } // action by client or other users



        /// admin actions

        if($status_one_front == 'approve'){

            if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [

                        'approved_by' => auth()->user()->type ,

                        'status_one_front' => 'completed' ,
                    ]

                )){


                if(empty($status_two_front)){

                    if($request->ajax()) {

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }
                    else{

                        return redirect()->back();
                    }

//
                }


            }


        }
        elseif($status_one_front == 'reject'){




                if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [

                        'rejected_by' => auth()->user()->type ,

                        'status_one_front' => 'completed' ,
                    ]

                )){


                    if(empty($status_two_front)){

                        if($request->ajax()) {

                            return response()->json([
                                'message'   => 'SUCCESS',
                            ]);
                        }
                        else{

                            return redirect()->back();
                        }

//
                    }



                }


            }

        if($status_one_back == 'approve'){

            if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [


                        'approved_by' => auth()->user()->type ,

                        'status_one_back' => 'completed' ,
                    ]

                )){


              if(empty($status_two_back)){

                  if($request->ajax()) {

                      return response()->json([
                          'message'   => 'SUCCESS',
                      ]);
                  }
                  else{

                      return redirect()->back();
                  }

//
              }
            }



        }
        elseif($status_one_back == 'reject'){

            if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [



                        'rejected_by' => auth()->user()->type ,

                        'status_one_back' => 'completed' ,
                    ]

                )){

                    if(empty($status_two_back)){

                        if($request->ajax()) {

                            return response()->json([
                                'message'   => 'SUCCESS',
                            ]);
                        }
                        else{

                            return redirect()->back();
                        }

//
                    }


                }


            }

        if($status_two_front == 'approve'){


            if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [

                        'approved_by' => auth()->user()->type ,

                        'status_two_front' => 'completed' ,
                    ]

                )){

//
                    if($request->ajax()) {

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }
                    else{

                        return redirect()->back();
                    }


                }


        }
        elseif($status_two_front == 'reject'){



            if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [

                        'rejected_by' => auth()->user()->type ,

                        'status_two_front' => 'completed' ,
                    ]

                )){


                    if($request->ajax()) {

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }
                    else{

                        return redirect()->back();
                    }


                }


            }

        if($status_two_back == 'approve'){


            if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [

                        'approved_by' => auth()->user()->type ,

                        'status_two_back' => 'completed' ,
                    ]

                )){


                    if($request->ajax()) {

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }
                    else{

                        return redirect()->back();
                    }


                }


        }
        elseif($status_two_back == 'reject'){




                if(GovID::updateOrCreate(
                    ['ref_seller' => $ref_seller ],
                    [


                        'rejected_by' => auth()->user()->type ,

                        'status_two_back' => 'completed' ,
                    ]

                )){


                    if($request->ajax()) {

                        return response()->json([
                            'message'   => 'SUCCESS',
                        ]);
                    }
                    else{

                        return redirect()->back();
                    }


                }


            }


    }

    public function download($path){

        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/IDs/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GovID  $govID
     * @return \Illuminate\Http\Response
     */
    public function show(GovID $govID)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GovID  $govID
     * @return \Illuminate\Http\Response
     */
    public function edit(GovID $govID)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GovID  $govID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GovID $govID)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GovID  $govID
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(GovID::where('id', $id)->delete()){

            return redirect()->back();
        }else{

            echo 'Error';
        }
    }

    public function deleteone($id)
    {
        if(GovID::where('id', $id)->update(['id_one_front'=>''])){

            return redirect()->back();
        }else{

            echo 'Error';
        }
    }

    public function deletetwo($id){

        if(GovID::where('id', $id)->update(['id_one_back'=>''])){

            return redirect()->back();
        }else{

            echo 'Error';
        }
    }

    public function deletethree($id)
    {
        if(GovID::where('id', $id)->update(['id_two_front'=>''])){

            return redirect()->back();
        }else{

            echo 'Error';
        }
    }

    public function deletefour($id)
    {
        if(GovID::where('id', $id)->update(['id_two_back'=>''])){

            return redirect()->back();
        }else{

            echo 'Error';
        }
    }
}
