<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Payment_IN;
use App\Realtors;
use App\UserFileTypes;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

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

        $payment_type = $request->get('type');

        $roll_number = $request->get('roll_number');
        $payment_amount = $request->get('payment_amount');
        $account_number = $request->get('account_number');
        $payment_email = $request->get('payment_email');
        $payment_phone = $request->get('payment_phone');
        $payment_name = $request->get('payment_name');
        $priority = $request->get('priority');
        $payee_name = $request->get('payee_name');
        $payable_to = $request->get('payable_to');
        $mailing_address = $request->get('mailing_address');
        $city = $request->get('city');
        $postal_code = $request->get('postal_code');
        $need_to_be_paid = $request->get('need_to_be_paid');
        $payment_id = $request->get('pay_id');
        $pay_type = $request->get('pay_type');
        $fileid = $request->get('fileid');

        $status = $request->get('status'); // status exist only if it is approve or rejected in tge review popup
        if(isset($status)){
            $status = $request->get('status');
        }
        else{

            $checkexist = Payment::where('id' , $payment_id)->first();

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
                empty($payment_type) &&
                empty($roll_number) &&
                empty($payment_amount) &&
                empty($account_number) &&
                empty($payment_email) &&
                empty($payment_phone) &&
                empty($payment_name) &&
                empty($priority) &&
                empty($payee_name) &&
                empty($payable_to) &&
                empty($mailing_address) &&
                empty($city) &&
                empty($postal_code) &&
                empty($need_to_be_paid)

            ) {

                $status = 'completed';

            }

        }

        if($user_type == "Client" && ( $status == "pending" || $status =="completed") ) {
            if($file = $request->file('payment_statement')){

                $payment_stat = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                $file->move(public_path('uploads/PaymentStatements'), $payment_stat);

                if($payment_type == "OtherPayment"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = $request->get('account_number');
                    $payment_email = $request->get('payment_email');
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }
                elseif ($payment_type =="MortgageLoc" || $payment_type =="LineofCredit" ){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = $request->get('account_number');
                    $payment_email = 'default';
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = $request->get('priority');
                    $payee_name = $request->get('payee_name');
                    $need_to_be_paid = 'default';

                }
                elseif ($payment_type =="RealtorPayment"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number ='default';
                    $payment_email = $request->get('payment_email');
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = $request->get('need_to_be_paid');

                }
                elseif ($payment_type =="CondoFees"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = 'default';
                    $payment_email = $request->get('payment_email');
                    $payment_phone = $request->get('payment_phone');
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }
                elseif ($payment_type =="BrokerFee"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = 'default';
                    $payment_email = $request->get('payment_email');
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = $request->get('need_to_be_paid');



                }
                elseif ($payment_type =="CreditCard"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = $request->get('account_number');
                    $payment_email = 'default';
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }
                elseif ($payment_type =="PropertyTax"){

                    $roll_number = $request->get('roll_number');
                    $payment_amount = $request->get('payment_amount');
                    $account_number = 'default';
                    $payment_email = 'default';
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }


                if($payment= Payment::updateOrCreate(
                    [ 'id' => $payment_id ],
                    [
                        'type' => $payment_type,
                        'roll_number' => $roll_number,
                        'amount' => $payment_amount,
                        'account_number' => $account_number,
                        'email' => $payment_email,
                        'phone' => $payment_phone,
                        'name' =>   ucwords(strtolower($payment_name)) ,
                        'pay_type' => $pay_type,
                        'priority' => $priority,
                        'need_to_be_paid' => $need_to_be_paid,
                        'payee_name' => ucwords(strtolower($payee_name)) ,
                        'payable_to' => ucwords(strtolower($payable_to)) ,
                        'city' => ucwords(strtolower($city)) ,
                        'mailing_address' => strtolower($mailing_address) ,
                        'postal_code' => strtoupper($postal_code) ,
                        'doc' => $payment_stat,
                        'status' => 'completed',
                        'ref_file' => $fileid

                    ]
                )){

                    if(request()->ajax()){


                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }else{

                        return redirect()->back();

                    }

                }
                else {

                    echo 'Error' ;
                }

            }
            else{

                if($payment_type == "OtherPayment"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = $request->get('account_number');
                    $payment_email = $request->get('payment_email');
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }
                elseif ($payment_type =="MortgageLoc" || $payment_type =="LineofCredit" ){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = $request->get('account_number');
                    $payment_email = 'default';
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = $request->get('priority');
                    $payee_name = $request->get('payee_name');
                    $need_to_be_paid = 'default';



                }
                elseif ($payment_type =="RealtorPayment"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number ='default';
                    $payment_email = $request->get('payment_email');
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = $request->get('need_to_be_paid');


                }
                elseif ($payment_type =="CondoFees"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = 'default';
                    $payment_email = $request->get('payment_email');
                    $payment_phone = $request->get('payment_phone');
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }
                elseif ($payment_type =="BrokerFee"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = 'default';
                    $payment_email = $request->get('payment_email');
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = $request->get('need_to_be_paid');



                }
                elseif ($payment_type =="CreditCard"){

                    $roll_number = 'default';
                    $payment_amount = $request->get('payment_amount');
                    $account_number = $request->get('account_number');
                    $payment_email = 'default';
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';


                }
                elseif ($payment_type =="PropertyTax"){

                    $roll_number = $request->get('roll_number');
                    $payment_amount = $request->get('payment_amount');
                    $account_number = 'default';
                    $payment_email = 'default';
                    $payment_phone = 'default';
                    $payment_name = $request->get('payment_name');
                    $priority = 'default';
                    $payee_name = 'default';
                    $need_to_be_paid = 'default';

                }

                if($payment= Payment::updateOrCreate(
                    [ 'id' => $payment_id ],
                    [
                        'type' => $payment_type,
                        'roll_number' => $roll_number,
                        'amount' => $payment_amount,
                        'account_number' => $account_number,
                        'email' =>  strtolower($payment_email) ,
                        'phone' => $payment_phone,
                        'name' => ucwords(strtolower($payment_name)) ,
                        'pay_type' => $pay_type,
                        'priority' => $priority,
                        'need_to_be_paid' => $need_to_be_paid,
                        'payee_name' => ucwords(strtolower($payee_name)) ,
                        'payable_to' => ucwords(strtolower($payable_to)) ,
                        'city' => ucwords(strtolower($city)) ,
                        'mailing_address' => strtolower($mailing_address) ,
                        'postal_code' => strtoupper($postal_code) ,
                        'status' => 'completed' ,
                        'ref_file' => $fileid

                    ]
                )){

                    if(request()->ajax()){


                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }else{

                        return redirect()->back();

                    }

                }else {

                    echo 'Error' ;
                }
            }



        }
        else{




            if($status == 'completed'){

                if($file = $request->file('payment_statement')){

                    $payment_stat = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/PaymentStatements'), $payment_stat);

                    if($payment_type == "OtherPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="MortgageLoc" || $payment_type =="LineofCredit" ){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = $request->get('priority');
                        $payee_name = $request->get('payee_name');
                        $need_to_be_paid = 'default';

                    }
                    elseif ($payment_type =="RealtorPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number ='default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');

                    }
                    elseif ($payment_type =="CondoFees"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = $request->get('payment_phone');
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="BrokerFee"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');



                    }
                    elseif ($payment_type =="CreditCard"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="PropertyTax"){

                        $roll_number = $request->get('roll_number');
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }


                    if($payment= Payment::updateOrCreate(
                        [ 'id' => $payment_id ],
                        [
                            'type' => $payment_type,
                            'roll_number' => $roll_number,
                            'amount' => $payment_amount,
                            'account_number' => $account_number,
                            'email' => $payment_email,
                            'phone' => $payment_phone,
                            'name' =>   ucwords(strtolower($payment_name)) ,
                            'pay_type' => $pay_type,
                            'priority' => $priority,
                            'need_to_be_paid' => $need_to_be_paid,
                            'payee_name' => ucwords(strtolower($payee_name)) ,
                            'payable_to' => ucwords(strtolower($payable_to)) ,
                            'city' => ucwords(strtolower($city)) ,
                            'mailing_address' => strtolower($mailing_address) ,
                            'postal_code' => strtoupper($postal_code) ,
                            'doc' => $payment_stat,
                            'status' => $status,
                            'ref_file' => $fileid

                        ]
                    )){

                        if(request()->ajax()){


                            return response()->json([

                                'message'   => 'SUCCESS',
                            ]);

                        }else{

                            return redirect()->back();

                        }

                    }
                    else {

                        echo 'Error' ;
                    }

                }
                else{

                    if($payment_type == "OtherPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="MortgageLoc" || $payment_type =="LineofCredit" ){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = $request->get('priority');
                        $payee_name = $request->get('payee_name');
                        $need_to_be_paid = 'default';



                    }
                    elseif ($payment_type =="RealtorPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number ='default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');


                    }
                    elseif ($payment_type =="CondoFees"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = $request->get('payment_phone');
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="BrokerFee"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');



                    }
                    elseif ($payment_type =="CreditCard"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="PropertyTax"){

                        $roll_number = $request->get('roll_number');
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';

                    }

                    if($payment= Payment::updateOrCreate(
                        [ 'id' => $payment_id ],
                        [
                            'type' => $payment_type,
                            'roll_number' => $roll_number,
                            'amount' => $payment_amount,
                            'account_number' => $account_number,
                            'email' =>  strtolower($payment_email) ,
                            'phone' => $payment_phone,
                            'name' => ucwords(strtolower($payment_name)) ,
                            'pay_type' => $pay_type,
                            'priority' => $priority,
                            'need_to_be_paid' => $need_to_be_paid,
                            'payee_name' => ucwords(strtolower($payee_name)) ,
                            'payable_to' => ucwords(strtolower($payable_to)) ,
                            'city' => ucwords(strtolower($city)) ,
                            'mailing_address' => strtolower($mailing_address) ,
                            'postal_code' => strtoupper($postal_code) ,
                            'status' => $status ,
                            'ref_file' => $fileid

                        ]
                    )){

                        if(request()->ajax()){


                            return response()->json([

                                'message'   => 'SUCCESS',
                            ]);

                        }else{

                            return redirect()->back();

                        }

                    }else {

                        echo 'Error' ;
                    }
                }
            }

            elseif ($status == 'pending'){


                if($file = $request->file('payment_statement')){

                    $payment_stat = date('Y-m-d-H-i-s'). '.' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/PaymentStatements'), $payment_stat);

                    if($payment_type == "OtherPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="MortgageLoc" || $payment_type =="LineofCredit" ){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = $request->get('priority');
                        $payee_name = $request->get('payee_name');
                        $need_to_be_paid = 'default';

                    }
                    elseif ($payment_type =="RealtorPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number ='default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');

                    }
                    elseif ($payment_type =="CondoFees"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = $request->get('payment_phone');
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="BrokerFee"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');



                    }
                    elseif ($payment_type =="CreditCard"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="PropertyTax"){

                        $roll_number = $request->get('roll_number');
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }


                    if($payment= Payment::updateOrCreate(
                        [ 'id' => $payment_id ],
                        [
                            'holder_type' => $payment_type,
                            'holder_roll_number' => $roll_number,
                            'holder_amount' => $payment_amount,
                            'holder_account_number' => $account_number,
                            'holder_email' => $payment_email,
                            'holder_phone' => $payment_phone,
                            'holder_name' =>   ucwords(strtolower($payment_name)) ,
                            'holder_pay_type' => $pay_type,
                            'holder_priority' => $priority,
                            'holder_need_to_be_paid' => $need_to_be_paid,
                            'holder_payee_name' => ucwords(strtolower($payee_name)) ,
                            'holder_payable_to' => ucwords(strtolower($payable_to)) ,
                            'holder_city' => ucwords(strtolower($city)) ,
                            'holder_mailing_address' => strtolower($mailing_address) ,
                            'holder_postal_code' => strtoupper($postal_code) ,
                            'holder_doc' => $payment_stat,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now() ,

                            'status' => $status,
                            'ref_file' => $fileid

                        ]
                    )){

                        if(request()->ajax()){


                            return response()->json([

                                'message'   => 'SUCCESS',
                            ]);

                        }else{

                            return redirect()->back();

                        }

                    }
                    else {

                        echo 'Error' ;
                    }

                }
                else{

                    if($payment_type == "OtherPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="MortgageLoc" || $payment_type =="LineofCredit" ){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = $request->get('priority');
                        $payee_name = $request->get('payee_name');
                        $need_to_be_paid = 'default';



                    }
                    elseif ($payment_type =="RealtorPayment"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number ='default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');


                    }
                    elseif ($payment_type =="CondoFees"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = $request->get('payment_phone');
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="BrokerFee"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = $request->get('payment_email');
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = $request->get('need_to_be_paid');



                    }
                    elseif ($payment_type =="CreditCard"){

                        $roll_number = 'default';
                        $payment_amount = $request->get('payment_amount');
                        $account_number = $request->get('account_number');
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';


                    }
                    elseif ($payment_type =="PropertyTax"){

                        $roll_number = $request->get('roll_number');
                        $payment_amount = $request->get('payment_amount');
                        $account_number = 'default';
                        $payment_email = 'default';
                        $payment_phone = 'default';
                        $payment_name = $request->get('payment_name');
                        $priority = 'default';
                        $payee_name = 'default';
                        $need_to_be_paid = 'default';

                    }

                    if($payment= Payment::updateOrCreate(
                        [ 'id' => $payment_id ],
                        [
                            'holder_type' => $payment_type,
                            'holder_roll_number' => $roll_number,
                            'holder_amount' => $payment_amount,
                            'holder_account_number' => $account_number,
                            'holder_email' => $payment_email,
                            'holder_phone' => $payment_phone,
                            'holder_name' =>   ucwords(strtolower($payment_name)) ,
                            'holder_pay_type' => $pay_type,
                            'holder_priority' => $priority,
                            'holder_need_to_be_paid' => $need_to_be_paid,
                            'holder_payee_name' => ucwords(strtolower($payee_name)) ,
                            'holder_payable_to' => ucwords(strtolower($payable_to)) ,
                            'holder_city' => ucwords(strtolower($city)) ,
                            'holder_mailing_address' => strtolower($mailing_address) ,
                            'holder_postal_code' => strtoupper($postal_code) ,

                            'submitted_by'=> auth()->user()->type . ' User Name: '.
                                auth()->user()->name . ' ' .
                                auth()->user()->last_name .'<br>'.
                                'User Email: ' . auth()->user()->email .'<br>'.
                                'Submission Date/Time: ' . Carbon::now(),

                            'status' => $status,
                            'ref_file' => $fileid

                        ]
                    )){

                        if(request()->ajax()){

                            return response()->json([

                                'message'   => 'SUCCESS',
                            ]);

                        }
                        else{

                            return redirect()->back();

                        }

                    }else {

                        echo 'Error' ;
                    }
                }


            }

            elseif ($status == 'approve'){

                $Info = Payment::where('id', $payment_id)->first();

                if($payment= Payment::updateOrCreate(
                    [ 'id' => $payment_id ],
                    [
                        'type' => $Info->holder_type ,
                        'roll_number' => $Info->holder_roll_number ,
                        'amount' => $Info->holder_amount ,
                        'account_number' => $Info->holder_account_number ,
                        'email' => $Info->holder_email ,
                        'phone' => $Info->holder_phone ,
                        'name' =>   ucwords(strtolower($Info->holder_name)) ,
                        'pay_type' => $Info->holder_pay_type ,
                        'priority' => $Info->holder_priority ,
                        'need_to_be_paid' => $Info->holder_need_to_be_paid ,
                        'payee_name' => ucwords(strtolower($Info->holder_payee_name)) ,
                        'payable_to' => ucwords(strtolower($Info->holder_payable_to)) ,
                        'city' => ucwords(strtolower($Info->holder_city)) ,
                        'mailing_address' => strtolower($Info->holder_mailing_address) ,
                        'postal_code' => strtoupper($Info->holder_postal_code) ,
                        'doc' => $Info->holder_doc ,

                        'approved_type' => $Info->holder_type ,
                        'approved_roll_number' => $Info->holder_roll_number ,
                        'approved_amount' => $Info->holder_amount ,
                        'approved_account_number' => $Info->holder_account_number ,
                        'approved_email' => $Info->holder_email ,
                        'approved_phone' => $Info->holder_phone ,
                        'approved_name' =>   ucwords(strtolower($Info->holder_name)) ,
                        'approved_pay_type' => $Info->holder_pay_type ,
                        'approved_priority' => $Info->holder_priority ,
                        'approved_need_to_be_paid' => $Info->holder_need_to_be_paid ,
                        'approved_payee_name' => ucwords(strtolower($Info->holder_payee_name)) ,
                        'approved_payable_to' => ucwords(strtolower($Info->holder_payable_to)) ,
                        'approved_city' => ucwords(strtolower($Info->holder_city)) ,
                        'approved_mailing_address' => strtolower($Info->holder_mailing_address) ,
                        'approved_postal_code' => strtoupper($Info->holder_postal_code) ,
                        'approved_doc' => $Info->holder_doc ,

                        'approved_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Approval Date/Time: ' . Carbon::now() ,

                        'status' => 'completed',
                        'ref_file' => $fileid

                    ]
                )){

                    if(request()->ajax()){


                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }
                    else{

                        return redirect()->back();

                    }

                }
                else {

                    echo 'Error' ;
                }

            }

            elseif ($status == 'reject'){

                $Info = Payment::where('id', $payment_id)->first();

                if($payment= Payment::updateOrCreate(
                    [ 'id' => $payment_id ],
                    [

                        'rejected_type' => $Info->holder_type ,
                        'rejected_roll_number' => $Info->holder_roll_number ,
                        'rejected_amount' => $Info->holder_amount ,
                        'rejected_account_number' => $Info->holder_account_number ,
                        'rejected_email' => $Info->holder_email ,
                        'rejected_phone' => $Info->holder_phone ,
                        'rejected_name' =>   ucwords(strtolower($Info->holder_name)) ,
                        'rejected_pay_type' => $Info->holder_pay_type ,
                        'rejected_priority' => $Info->holder_priority ,
                        'rejected_need_to_be_paid' => $Info->holder_need_to_be_paid ,
                        'rejected_payee_name' => ucwords(strtolower($Info->holder_payee_name)) ,
                        'rejected_payable_to' => ucwords(strtolower($Info->holder_payable_to)) ,
                        'rejected_city' => ucwords(strtolower($Info->holder_city)) ,
                        'rejected_mailing_address' => strtolower($Info->holder_mailing_address) ,
                        'rejected_postal_code' => strtoupper($Info->holder_postal_code) ,
                        'rejected_doc' => $Info->holder_doc ,

                        'rejected_by' => auth()->user()->type . ' User Name: '.
                            auth()->user()->name . ' ' .
                            auth()->user()->last_name .'<br>'.
                            'User Email: ' . auth()->user()->email .'<br>'.
                            'Rejection Date/Time: ' . Carbon::now() ,

                        'status' => 'completed',
                        'ref_file' => $fileid

                    ]
                )){

                    if(request()->ajax()){


                        return response()->json([

                            'message'   => 'SUCCESS',
                        ]);

                    }else{

                        return redirect()->back();

                    }

                }
                else {

                    echo 'Error' ;
                }


            }



        }




    }



    public function doc_download($path){

        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/uploads/PaymentStatements/".$path;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return response()->download($file, $path, $headers);
    }


    public function doc_delete($id)
    {
        if(Payment::where('id' , $id)->update(['doc'=>''])){
            return redirect()->back();
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(Payment::where('id' , $id)->delete()){

                return redirect()->back();

        }else{

            echo 'Error';
        }


    }
}
