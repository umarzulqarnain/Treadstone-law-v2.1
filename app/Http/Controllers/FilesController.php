<?php

namespace App\Http\Controllers;

use App\Appointments;
use App\BridgeLoan;
use App\Buyers;
use App\CoOwners;
use App\DeliveryKey;
use App\DepositeSale;
use App\Discharges;
use App\FileDocuments;
use App\FileInformation;
use App\Files;
use App\Finances;
use App\FireInsurance;
use App\GovID;
use App\Lawyers;
use App\Lenders;
use App\MortgageInformation;
use App\Mortgages;
use App\Payment;
use App\Payment_IN;
use App\Payouts;
use App\Posts;
use App\Props;
use App\PropTax;
use App\PurchaseFileDetails;
use App\Realtors;
use App\Sellers;
use App\Tasks;
use App\TermsUsers;
use App\User;
use App\UserFileTypes;
use Carbon\Carbon;
use Couchbase\PasswordAuthenticator;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class FilesController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        if (auth()->user()->type == "Admin") {

            return view('start_new_file');

        } else {

            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        // Create File
        $fileId = DB::table('files')->insertGetId([
            'file_name' => $request->get('file_name'),
            'closing_date' => $request->get('closing_date'),
            'file_type' => $request->get('file_type'),
            'status' => 'active',
            'email' => strtolower($request->get('email')[0]), // get first homeowner email
            'address' => ucwords(strtolower($request->get('address'))),
            'city' => ucwords(strtolower($request->get('city'))),
            'province' => 'Ontario',
            'postal_code' => strtoupper($request->get('postal_code')),
            'closing_document_status' => 'hide',
            'singing_document_status' => 'hide',
            'deal_firm' => $request->get('deal_firm'),
            'first_name' => ucwords(strtolower($request->get('first_name')[0])),
            'last_name' => ucwords(strtolower($request->get('last_name')[0])),
            'token' => Str::random(32),

        ]);

        // Add property address
        Props::updateOrCreate(
            ['ref_file' => $fileId],
            [
                'street_address' => ucwords(strtolower($request->get('address'))),
                'city' => ucwords(strtolower($request->get('city'))),
                'province' => 'Ontario',
                'postal_code' => strtoupper($request->get('postal_code')),
                'status' => 'completed',

            ]
        );

        // documents array
        $docs = array();

        if ($files = $request->file('docs')) {
            foreach ($files as $file) {
                $strippedName = str_replace(' ', '', $file->getClientOriginalName());
                $docName = date('Y-m-d-H-i-s') . $strippedName;
                $docTitle = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/FileDocuments', $docName);

                array_push($docs, [
                    'title' => ucwords(strtolower($docTitle)),
                    'doc' => $docName,
                    'status' => 'uploaded',
                    'type' => 'FILE',
                    'ref_file' => $fileId,

                ]);

            }

        }

        // Push default requested client documents to the array
        if(
            $request->get('file_type') == "Purchase" ||
            $request->get('file_type') == "Refinance"
        ){

            array_push($docs, [

                'title' => 'Fire Insurance Binder',
                'instructions' => 'As part of mortgage financing, 
                                   you will be required to obtain fire insurance. 
                                   Your bank will provide our office details for the policy. 
                                   We will notify you when we have these details',

                'status' => 'requested',
                'type' => 'FILE',
                'requested_from' => 'Client',
                'ref_file' => $fileId,

            ]);
        }

        // Realtor default requested file
        array_push($docs, [

            'title' => 'Agreement of Purchase and Sale',
            'instructions' => '',
            'status' => 'requested',
            'type' => 'FILE',
            'requested_from' => 'Realtor',
            'ref_file' => $fileId,

        ]);

        // MortgageBroker default requested file
        array_push($docs, [

            'title' => 'Mortgage Commitment ',
            'instructions' => '',
            'status' => 'requested',
            'type' => 'FILE',
            'requested_from' => 'MortgageBroker',
            'ref_file' => $fileId,

        ]);

        if($request->get('file_type') == "Purchase"){
          // OtherSide default requested file
          array_push($docs, [

              'title' => 'Property Tax Bill',
              'instructions' => '',
              'status' => 'requested',
              'type' => 'FILE',
              'requested_from' => 'OtherSide',
              'ref_file' => $fileId,

          ]);

        }

        if(DB::table('file_documents')->insert($docs)) {

            $clients = array();

            $users_files = array();


            // get clients array
            $names = $request->get('first_name');

            foreach ($names as $key => $row) {

                // pushing all clients into array to save them to homeonwners
                array_push($clients,[
                    'first_name' => ucwords(strtolower($request->get('first_name')[$key])),
                    'last_name' => ucwords(strtolower($request->get('last_name')[$key])),
                    'email' => strtolower($request->get('email')[$key]),
                    'phone' => strtolower($request->get('phone')[$key]),
                    'gender' => $request->get('gender' . $request->get('counter')[$key]),
                    'ref_file' => $fileId

                ]);

                // Attach all Clients to that file  ,
                // it should create tempo acc for them , and their type is Client
                array_push($users_files,[

                    'user_id'=>$request->get('email')[$key] ,
                    'file_id'=> $fileId ,
                    'type'=> 'Client'

                ]);


                //Send Emails to All Clients

                if($request->get('email')[$key] != ""){
                    $to_name = $request->get('first_name')[$key];
                    $to_email = $request->get('email')[$key];
                    $data = array('name' => $to_name, "body" => "We have Started a New File For your , Please Register to complete it , You can register from this link " . url('/register'));
                    Mail::send('emails.mail', $data, function($message) use ($to_email) {
                        $message->to($to_email)->subject('File Completion');
                    });

                }


            }

            // Attach file creators to the file as well
            if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"){

                array_push($users_files,[

                    'user_id'=> auth()->user()->email,
                    'file_id'=> $fileId ,
                    'type'=> auth()->user()->type

                ]);

            }

            if (DB::table('sellers')->insert($clients)) {

                // Refinance File Path
                if ($request->get('file_type') == "Refinance") {

                    if (Realtors::create(
                        [

                            'realtor_type' => 'Mortgage Broker',
                            'ref_file' => $fileId

                        ]
                    )) {

                        if (Mortgages::create(
                            [
                                'ref_file' => $fileId

                            ]
                        )) {


                            // insert all attached users ( clients , realtors , mortgagebrokers..etc ) to that file , each with their own type
                            DB::table('user_file_types')->insert($users_files);


                            return redirect()->back();
                        } else {

                            echo 'ERROR';
                        }


                    } else {

                        echo 'ERROR';
                    }


                }


                // Purchase File Path
                elseif ($request->get('file_type') == "Purchase") {

                    if (Realtors::create(
                        [

                            'used_realtor' => $request->get('used_seller_realtor'),
                            'first_name' => $request->get('realtor_seller_first_name'),
                            'last_name' => $request->get('realtor_seller_last_name'),
                            'gender' => $request->get('realtor_seller_gender'),
                            'email' => $request->get('realtor_seller_email'),
                            'phone' => $request->get('realtor_seller_phone'),
                            'realtor_type' => 'Seller\'s Realtor',
                            'ref_file' => $fileId

                        ]
                    )) {

                        if (Realtors::create(
                            [


                                'used_realtor' => $request->get('used_buyer_realtor'),
                                'first_name' => $request->get('realtor_buyer_first_name'),
                                'last_name' => $request->get('realtor_buyer_last_name'),
                                'gender' => $request->get('realtor_buyer_gender'),
                                'email' => $request->get('realtor_buyer_email'),
                                'phone' => $request->get('realtor_buyer_phone'),
                                'realtor_type' => 'Buyer\'s Realtor',
                                'ref_file' => $fileId

                            ]
                        )) {

                            if (Realtors::create(
                                [

                                    'used_realtor' => $request->get('mort_or_bank'),
                                    'first_name' => $request->get('mort_first_name'),
                                    'last_name' => $request->get('mort_last_name'),
                                    'gender' => $request->get('mort_gender'),
                                    'email' => $request->get('mort_email'),
                                    'phone' => $request->get('mort_phone'),
                                    'realtor_type' => 'Mortgage Broker',
                                    'ref_file' => $fileId

                                ]
                            )) {

                                if (Mortgages::create(
                                    [
                                        'ref_file' => $fileId

                                    ]
                                )) {


                                    //Attach seller realtor if exists
                                    if($request->get('realtor_seller_email') != ''){

                                        // it should create tempo acc for them , and their type is OtherSide
                                        array_push($users_files,[

                                            'user_id'=>$request->get('realtor_seller_email') ,
                                            'file_id'=> $fileId ,
                                            'type'=> 'OtherSide'

                                        ]);

                                        $to_name = $request->get('realtor_seller_first_name');
                                        $to_email = $request->get('realtor_seller_email');
                                        $data = array('name' => $to_name, "body" => "We have Started a New File For your , Please Register to complete it , You can register from this link " . url('/register'));
                                        Mail::send('emails.mail', $data, function($message) use ($to_email) {
                                            $message->to($to_email)->subject('File Completion');
                                        });

                                    }

                                    //Attach buyer realtor if exists
                                    if($request->get('realtor_buyer_email') != ''){

                                        // it should create tempo acc for them , and their type is Realtor
                                        array_push($users_files,[

                                            'user_id'=>$request->get('realtor_buyer_email') ,
                                            'file_id'=> $fileId ,
                                            'type'=> 'Realtor'

                                        ]);


                                        $to_name = $request->get('realtor_buyer_first_name');
                                        $to_email = $request->get('realtor_buyer_email');
                                        $data = array('name' => $to_name, "body" => "We have Started a New File For your , Please Register to complete it , You can register from this link " . url('/register'));
                                        Mail::send('emails.mail', $data, function($message) use ($to_email) {
                                            $message->to($to_email)->subject('File Completion');
                                        });

                                    }

                                    //Attach Mortgage if exists
                                    if($request->get('mort_email') != ''){

                                        // it should create tempo acc for them , and their type is MortgageBroker
                                        array_push($users_files,[

                                            'user_id'=>$request->get('mort_email') ,
                                            'file_id'=> $fileId ,
                                            'type'=> 'MortgageBroker'

                                        ]);

                                        $to_name = $request->get('mort_first_name');
                                        $to_email = $request->get('mort_email');
                                        $data = array('name' => $to_name, "body" => "We have Started a New File For your , Please Register to complete it , You can register from this link " . url('/register'));
                                        Mail::send('emails.mail', $data, function($message) use ($to_email) {
                                            $message->to($to_email)->subject('File Completion');
                                        });

                                    }

                                    // insert all attached users ( clients , realtors , mortgagebrokers..etc ) to that file , each with their own type
                                    DB::table('user_file_types')->insert($users_files);


                                    return redirect()->back();

                                } else {

                                    echo 'ERROR';
                                }


                            } else {

                                echo 'ERROR';
                            }


                        } else {

                            echo 'ERROR';
                        }


                    } else {

                        echo 'ERROR';
                    }


                }


                // Sale File Path
                elseif ($request->get('file_type') == "Sale") {

                    if (Realtors::create(
                        [

                            'realtor_type' => 'Seller\'s Realtor',
                            'ref_file' => $fileId

                        ]
                    )) {

                        if (Realtors::create(
                            [

                                'used_realtor' => $request->get('used_buyer_realtor'),
                                'first_name' => $request->get('realtor_buyer_first_name'),
                                'last_name' => $request->get('realtor_buyer_last_name'),
                                'gender' => $request->get('realtor_buyer_gender'),
                                'email' => $request->get('realtor_buyer_email'),
                                'phone' => $request->get('realtor_buyer_phone'),
                                'realtor_type' => 'Buyer\'s Realtor',
                                'ref_file' => $fileId

                            ]
                        )) {


                            //Attach buyer realtor if exists , it should create temporary accs and their type is OtherSide
                            if($request->get('realtor_buyer_email') != ''){

                                array_push($users_files,[

                                    'user_id'=>$request->get('realtor_buyer_email') ,
                                    'file_id'=> $fileId ,
                                    'type'=> 'OtherSide'

                                ]);

                                $to_name = $request->get('realtor_buyer_first_name');
                                $to_email = $request->get('realtor_buyer_email');
                                $data = array('name' => $to_name, "body" => "We have Started a New File For your , Please Register to complete it , You can register from this link " . url('/register'));
                                Mail::send('emails.mail', $data, function($message) use ($to_email) {
                                    $message->to($to_email)->subject('File Completion');
                                });


                            }

                            // insert all attached users ( clients , realtors , mortgagebrokers..etc ) to that file , each with their own type
                            DB::table('user_file_types')->insert($users_files);


                            return redirect()->back();


                        } else {

                            echo 'ERROR';
                        }


                    } else {

                        echo 'ERROR';
                    }


                }




            }

        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files, $id)
    {

        $file_type = $files::where('id', $id)->first()->file_type;

        if(auth()->user()->type != "Admin"){
            $user = UserFileTypes::where('file_id', $id)->where('user_id' , auth()->user()->email)->first();
        }else{
            $user = auth()->user();
        }

//        $checkAttached = UserFileTypes::where('user_id', auth()->user()->email)->where('file_id', $id)->first();
//            if (isset($checkAttached)) {
//
//
//
//            } else {
//
//                return Redirect('/');
//            }




        if ($file_type == "Sale" && $user->type == "Client") {

            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $pending_sellers = Sellers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $pending_buyers = Buyers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->orderby('id', 'desc')->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $pending_realtors = Realtors::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $payments = Payment::where('ref_file', $id)->get(); //>
            $pending_payments = Payment::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $requested_file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->where('status', 'requested')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'RealtorPayment')->orderby('id', 'desc')->first();
            $realtorSeller_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Seller\'s Realtor')->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Sale.admin', compact('user' , 'file_data', 'sellers', 'pending_sellers',
                'buyers', 'pending_buyers', 'lawyer', 'property', 'file_info', 'deliveryKey', 'realtors', 'pending_realtors',
                'taxes', 'payments', 'pending_payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files',
                'file_documents', 'requested_file_documents', 'closing_packages', 'signing_packages', 'executed_docs', 'termsCheck',
                'mortgagespayouts', 'commission_details', 'realtorSeller_info'));


        }
        else if ($file_type == "Sale" && $user->type == "LawClerk") {

            $seller = Sellers::where('ref_file', $id)->first();
            $co_owners = CoOwners::where('ref_seller', $seller['id'])->get();
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $buyers = Buyers::where('ref_file', $id)->get();
            $property = Props::where('ref_file', $id)->first();
            $file_info = FileInformation::where('ref_file', $id)->first();
            $realtors = Realtors::where('ref_file', $id)->first();
            $taxes = PropTax::where('ref_file', $id)->first();
            $appointment = Appointments::where('ref_file', $id)->first();
            $finances = Finances::where('ref_file', $id)->first();
            $payments = Payment::where('ref_file', $id)->get();
            $discharges = Discharges::where('ref_file', $id)->get();

            // checking if the user is attached to this file or not , if not don't access it
            $checkAttached = UserFileTypes::where('user_id', auth()->user()->id)->where('file_id', $id)->first();
            if (isset($checkAttached)) {

                return view('FileTypes.Sale.law_clerk', compact('seller', 'co_owners', 'lawyer',
                    'buyers', 'property', 'file_info', 'realtors', 'taxes', 'appointment', 'finances', 'payments',
                    'discharges'));

            } else {

                return Redirect('/');
            }


        }
        else if ($file_type == "Sale" && $user->type == "Admin") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $pending_sellers = Sellers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $pending_buyers = Buyers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $pending_realtors = Realtors::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $pending_payments = Payment::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $pending_file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->where('status', 'pending')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'RealtorPayment')->orderby('id', 'desc')->first();
            $realtorBuyer_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>
            $realtorSeller_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Seller\'s Realtor')->orderby('id', 'desc')->first(); //>

            return view('FileTypes.Sale.admin', compact('user' , 'file_data', 'sellers', 'pending_sellers',
                'buyers', 'pending_buyers', 'lawyer', 'property', 'file_info', 'deliveryKey', 'realtors',
                'pending_realtors', 'taxes', 'finances', 'payments', 'pending_payments', 'deposite_sale', 'posts', 'outstanding_tasks',
                'outstanding_files', 'file_documents', 'pending_file_documents', 'users', 'closing_packages', 'signing_packages',
                'executed_docs', 'termsCheck', 'mortgagespayouts', 'commission_details', 'realtorBuyer_info' , 'realtorSeller_info'));


        }
        else if ($file_type == "Sale" && $user->type == "Realtor") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $realtorBuyer_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'RealtorPayment')->orderby('id', 'desc')->first();
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Sale.admin', compact('user', 'file_data', 'sellers',
                'buyers', 'lawyer', 'property', 'file_info', 'deliveryKey', 'realtors', 'taxes',
                'finances', 'payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files', 'file_documents',
                'users', 'closing_packages', 'signing_packages', 'executed_docs', 'termsCheck',
                'commission_details', 'mortgagespayouts', 'mortgage_professional', 'realtorBuyer_info' ));


        }
        else if ($file_type == "Sale" && $user->type == "SigningOfficer") {

            $appointments = Appointments::where('ref_file', $id)->get();

            return view('FileTypes.Sale.signing_officer', compact( 'appointments'));

        }
        else if ($file_type == "Sale" && $user->type == "PG") {


            return view('FileTypes.Sale.pg');
        }
        else if ($file_type == "Sale" && $user->type == "OtherSide") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'RealtorPayment')->orderby('id', 'desc')->first();
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $realtorSeller_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Seller\'s Realtor')->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Sale.admin', compact('user' , 'file_data', 'sellers',  'buyers', 'lawyer', 'property',
                'file_info', 'deliveryKey', 'realtors', 'taxes','finances', 'payments', 'deposite_sale', 'posts', 'outstanding_tasks',
                'outstanding_files', 'file_documents',   'users',  'closing_packages', 'signing_packages',
                'executed_docs', 'termsCheck', 'commission_details', 'mortgagespayouts', 'mortgage_professional' ,
                'realtorSeller_info'));


        }

        else if ($file_type == "Purchase" && $user->type == "Client") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $pending_sellers = Sellers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $pending_buyers = Buyers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $pending_realtors = Realtors::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $pending_mortgages = Mortgages::where('ref_file', $id)->where('status', 'pending')->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $pending_payments = Payment::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $requested_file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->where('status', 'requested')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'BrokerFee')->orderby('id', 'desc')->first();
            $realtorBuyer_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $bridge_loan = BridgeLoan::where('ref_file', $id)->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Purchase.admin', compact('user', 'file_data', 'sellers', 'pending_sellers',
                'buyers', 'pending_buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance',
                'deliveryKey', 'realtors', 'pending_realtors', 'mortgages', 'pending_mortgages', 'taxes', 'finances',
                'payments', 'pending_payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files',
                'file_documents', 'requested_file_documents', 'users', 'closing_packages', 'signing_packages',
                'executed_docs', 'termsCheck', 'mortgagespayouts', 'commission_details', 'realtorBuyer_info', 'mortgage_professional',
                'bridge_loan'));


        }
        else if ($file_type == "Purchase" && $user->type == "LawClerk") {

            $seller = Sellers::where('ref_file', $id)->first();
            $co_owners = CoOwners::where('ref_seller', $seller['id'])->get();
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $buyers = Buyers::where('ref_file', $id)->get();
            $property = Props::where('ref_file', $id)->first();
            $file_info = FileInformation::where('ref_file', $id)->first();
            $realtors = Realtors::where('ref_file', $id)->first();
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $mort_info = MortgageInformation::where('ref_file', $id)->first();
            $lender = Lenders::where('ref_file', $id)->first();
            $payment_in = Payment_IN::where('ref_file', $id)->first();
            $appointment = Appointments::where('ref_file', $id)->first();
            $finances = Finances::where('ref_file', $id)->first();
            $payments = Payment::where('ref_file', $id)->where('pay_type', 'PURCHASE')->get();
            $discharges = Discharges::where('ref_file', $id)->get();

            // checking if the user is attached to this file or not , if not don't access it
            $checkAttached = UserFileTypes::where('user_id', auth()->user()->id)->where('file_id', $id)->first();
            if (isset($checkAttached)) {

                return view('FileTypes.Purchase.law_clerk', compact('seller', 'co_owners', 'lawyer',
                    'buyers', 'property', 'file_info', 'mort_info', 'realtors', 'mortgages', 'lender', 'appointment',
                    'finances', 'payment_in', 'payments', 'discharges'));

            } else {

                return Redirect('/');
            }

        }
        else if ($file_type == "Purchase" && $user->type == "Admin") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $pending_sellers = Sellers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $pending_buyers = Buyers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $pending_realtors = Realtors::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $pending_mortgages = Mortgages::where('ref_file', $id)->where('status', 'pending')->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $pending_payments = Payment::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $pending_file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->where('status', 'pending')->orderby('id', 'desc')->get(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'BrokerFee')->orderby('id', 'desc')->first();
            $realtor_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $realtorBuyer_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>
            $realtorSeller_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Seller\'s Realtor')->orderby('id', 'desc')->first(); //>
            $bridge_loan = BridgeLoan::where('ref_file', $id)->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Purchase.admin', compact('user', 'file_data', 'sellers', 'pending_sellers',
                'buyers', 'pending_buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey', 'realtors',
                'pending_realtors', 'mortgages', 'pending_mortgages', 'taxes', 'finances', 'payments', 'pending_payments',
                'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files', 'file_documents', 'pending_file_documents',
                'users', 'closing_packages', 'signing_packages', 'executed_docs', 'termsCheck',
                'mortgagespayouts', 'commission_details', 'realtor_info', 'mortgage_professional', 'bridge_loan',
                'realtorSeller_info', 'realtorBuyer_info'));


        }
        else if ($file_type == "Purchase" && $user->type == "Realtor") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $realtorSeller_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Seller\'s Realtor')->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Purchase.admin', compact('user' ,'file_data', 'sellers',
                'buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey', 'realtors',
                'mortgages', 'taxes', 'finances', 'payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files',
                'file_documents', 'users', 'closing_packages', 'signing_packages', 'executed_docs',
                'termsCheck', 'mortgage_professional',  'realtorSeller_info'));


        }
        else if ($file_type == "Purchase" && $user->type == "MortgageBroker") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'BrokerFee')->orderby('id', 'desc')->first();
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $realtorBuyer_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>
            $realtorSeller_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Seller\'s Realtor')->orderby('id', 'desc')->first(); //>
            $bridge_loan = BridgeLoan::where('ref_file', $id)->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Purchase.admin', compact('user' , 'file_data', 'sellers',
                'buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey', 'realtors',
                'mortgages', 'taxes','finances', 'payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files',
                'file_documents', 'users',  'closing_packages', 'signing_packages', 'executed_docs', 'mortgagespayouts',
                'commission_details', 'mortgage_professional','realtorBuyer_info' , 'realtorSeller_info' ,  'termsCheck' , 'bridge_loan'));


        }
        else if ($file_type == "Purchase" && $user->type == "OtherSide") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $realtorBuyer_info = Realtors::where('ref_file', $id)->where('realtor_type', 'Buyer\'s Realtor')->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Purchase.admin', compact('user' , 'file_data', 'sellers',
                'buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey', 'realtors',
                'mortgages', 'taxes','finances', 'payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files',
                'file_documents', 'users',      'closing_packages', 'signing_packages', 'executed_docs', 'termsCheck',
                'mortgage_professional', 'realtorBuyer_info'));


        }
        else if ($file_type == "Purchase" && $user->type == "SigningOfficer") {

            return view('FileTypes.Purchase.signing_officer', compact('file_progress'));
        }
        else if ($file_type == "Refinance" && $user->type == "Client") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $pending_sellers = Sellers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $pending_buyers = Buyers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $pending_realtors = Realtors::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $pending_mortgages = Mortgages::where('ref_file', $id)->where('status', 'pending')->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $pending_payments = Payment::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $requested_file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->where('status', 'requested')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'BrokerFee')->orderby('id', 'desc')->first();
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>


            return view('FileTypes.Refinance.admin', compact('user' , 'file_data', 'sellers', 'pending_sellers',
                'buyers', 'pending_buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey',
                'realtors', 'pending_realtors', 'mortgages', 'pending_mortgages', 'taxes', 'finances', 'payments', 'pending_payments', 'deposite_sale', 'posts', 'outstanding_tasks',
                'outstanding_files', 'file_documents', 'requested_file_documents', 'users',  'closing_packages', 'signing_packages',
                'executed_docs', 'termsCheck', 'mortgagespayouts', 'commission_details', 'mortgage_professional'));

        }
        else if ($file_type == "Refinance" && $user->type == "LawClerk") {

            $seller = Sellers::where('ref_file', $id)->first();
            $co_owners = CoOwners::where('ref_seller', $seller['id'])->get();
            $property = Props::where('ref_file', $id)->first();
            $file_info = FileInformation::where('ref_file', $id)->first();
            $appointment = Appointments::where('ref_file', $id)->first();
            $finances = Finances::where('ref_file', $id)->first();
            $paymentsLOC = Payment::where('ref_file', $id)->where('pay_type', 'REFINANCE_LOC')->get();
            $paymentsMORTSEC = Payment::where('ref_file', $id)->where('pay_type', 'REFINANCE_MORT_SEC')->get();
            $paymentsDEBTS = Payment::where('ref_file', $id)->where('pay_type', 'REFINANCE_DEBTS')->get();
            $paymentsCLOSING = Payment::where('ref_file', $id)->where('pay_type', 'REFINANCE_CLOSING')->get();
            $discharges = Discharges::where('ref_file', $id)->get();
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $lender = Lenders::where('ref_file', $id)->first();
            $payout = Payouts::where('ref_file', $id)->first();
            $payment_in = Payment_IN::where('ref_file', $id)->first();

            // checking if the user is attached to this file or not , if not don't access it
            $checkAttached = UserFileTypes::where('user_id', auth()->user()->id)->where('file_id', $id)->first();
            if (isset($checkAttached)) {

                return view('FileTypes.Refinance.law_clerk', compact('seller', 'co_owners',
                    'property', 'file_info', 'mortgages', 'appointment', 'finances', 'paymentsLOC',
                    'paymentsDEBTS', 'paymentsMORTSEC', 'paymentsCLOSING', 'discharges', 'lender',
                    'payout', 'payment_in'));

            } else {

                return Redirect('/');
            }


        }
        else if ($file_type == "Refinance" && $user->type == "Admin") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $pending_sellers = Sellers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $pending_buyers = Buyers::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $pending_realtors = Realtors::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $pending_mortgages = Mortgages::where('ref_file', $id)->where('status', 'pending')->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $pending_payments = Payment::where('ref_file', $id)->where('status', 'pending')->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $pending_file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->where('status', 'pending')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>
            $commission_details = Payment::where('ref_file', $id)->where('type', 'BrokerFee')->orderby('id', 'desc')->first();
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>

            return view('FileTypes.Refinance.admin', compact('user' , 'file_data', 'sellers', 'pending_sellers',
                'buyers', 'pending_buyers', 'lawyer', 'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey', 'realtors',
                'pending_realtors', 'mortgages', 'pending_mortgages', 'taxes', 'finances', 'payments', 'pending_payments',
                'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files', 'file_documents', 'pending_file_documents', 'users',                 'closing_packages', 'signing_packages', 'executed_docs', 'termsCheck', 'mortgagespayouts', 'commission_details',
                'mortgage_professional'));

        } else if ($file_type == "Refinance" && $user->type == "MortgageBroker") {

            $users = User::get();
            $file_data = Files::where('id', $id)->first();
            $sellers = Sellers::where('ref_file', $id)->get(); //>
            $lawyer = Lawyers::where('ref_file', $id)->first();
            $buyers = Buyers::where('ref_file', $id)->get(); //>
            $property = Props::where('ref_file', $id)->first(); //>
            $file_info = FileInformation::where('ref_file', $id)->first(); //>
            $realtors = Realtors::where('ref_file', $id)->get(); //>
            $mortgages = Mortgages::where('ref_file', $id)->get();
            $taxes = PropTax::where('ref_file', $id)->first(); //>
            $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
            $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
            $fire_insurance = FireInsurance::where('ref_file', $id)->first(); //>
            $finances = Finances::where('ref_payment', $id)->first();
            $payments = Payment::where('ref_file', $id)->get(); //>
            $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
            $posts = Posts::where('ref_file', $id)->orderby('created_at', 'desc')->get(); //>
            $outstanding_files = Tasks::where('ref_file', $id)->where('type', 'FILE')->orderby('due')->get(); //>
            $outstanding_tasks = Tasks::where('ref_file', $id)->where('type', 'TASK')->orderby('due')->get(); //>
            $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
            $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>
            $executed_docs = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->where('status', '!=', '')->orderby('id', 'desc')->get(); //>
            $mortgagespayouts = Payment::where('ref_file', $id)->where('type', 'MortgageLoc')->get();
            $commission_details = Payment::where('ref_file', $id)->where('type', 'BrokerFee')->orderby('id', 'desc')->first();
            $mortgage_professional = Realtors::where('ref_file', $id)->where('realtor_type', 'Mortgage Broker')->orderby('id', 'desc')->first(); //>
            $termsCheck = TermsUsers::where('file_id', $id)->where('user_id', auth()->user()->id)->first(); //>


            return view('FileTypes.Refinance.admin', compact('user', 'file_data', 'sellers', 'buyers', 'lawyer',
                'property', 'file_info', 'purchase_file', 'fire_insurance', 'deliveryKey', 'realtors', 'mortgages', 'taxes',
                'finances', 'payments', 'deposite_sale', 'posts', 'outstanding_tasks', 'outstanding_files', 'file_documents', 'users',
                 'closing_packages', 'signing_packages', 'executed_docs', 'mortgagespayouts', 'commission_details'
                , 'mortgage_professional', 'termsCheck'));


        } else if ($file_type == "Refinance" && $user->type == "SigningOfficer") {


            return view('FileTypes.Refinance.signing_officer', compact('file_progress'));
        } else if ($file_type == "Property Guys Sale" && $user->type == "Client") {


            return view('FileTypes.PropertGuySale.client');
        }

    }

    public function download($file){


        $path = public_path() . "/uploads/completed_payments/" . $file;

        $headers = array('Content-Type: application/pdf',);

        return response()->download($path, $file, $headers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files){

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Files $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){

        $address = $request->get('address');
        $city = $request->get('city');
        $postal_code = $request->get('postal_code');
        $id = $request->get('fileid');

        if (Files::where('id', $id)->update([

            'address' => ucwords(strtolower($address)),
            'city' => ucwords(strtolower($city)),
            'postal_code' => strtoupper($postal_code)

        ])) {

            return redirect()->back();

        } else {

            echo 'Error';
        }


    }

    public function updateName(Request $request, $id){


        $file_name = $request->get('file_name');

        if ($file_name == '') {

            if (Files::where('id', $id)->update([

                'file_name' => null,

            ])) {

                return redirect()->back();

            } else {

                echo 'Error';
            }
        } else {

            if (Files::where('id', $id)->update([

                'file_name' => ucwords(strtolower($file_name)),

            ])) {

                return redirect()->back();

            } else {

                echo 'Error';
            }
        }


    }

    public function updateFirm(Request $request){

        $firm_val = $request->get('firm_val');
        $fileid = $request->get('fileid');

        if (Files::where('id', $fileid)->update(['deal_firm' => $firm_val])) {

            echo 'SUCCESS';

        } else {

            echo 'Error';
        }


    }

    public function sectionSubmitted(Request $request){


        $fName = $request->get('fname');
        $fileid = $request->get('fileid');


        if(UserFileTypes::where('file_id', $fileid )
            ->where('user_id' , auth()->user()->email)
            ->update([

                $fName => 'yes'

            ])) {

            echo 'SUCCESS';

        } else {

            echo 'Error';
        }



    }

    public function update_progress(Request $request){

        $id = $request->get('file_id');
        $progress = $request->get('progress');

        if (Files::where('id', $id)->update(['progress' => $progress])) {

            flash()->message('File Progress Changed Successfully !');
            return redirect()->back();

        } else {

            echo 'an error occurred !';
        }

    }

    public function showSigning($id)
    {
        if (Files::where('id', $id)->update([

            'singing_document_status' => 'show',

        ])) {

            return redirect()->back();

        }
    }

    public function showClosing($id)
    {
        if (Files::where('id', $id)->update([

            'singing_document_status' => 'hide',
            'closing_document_status' => 'show',

        ])) {

            return redirect()->back();

        }
    }

    public function generateFileAudit($id)
    {

        /*** algorithm for adding lots of mysql cols**/

        //        $fields = array(
//
//            'approved_address' ,
//            'approved_city' ,
//            'approved_province' ,
//            'approved_postal_code' ,
//
//            'rejected_address' ,
//            'rejected_city' ,
//            'rejected_province' ,
//            'rejected_postal_code' ,
//
//
//
//
//
//
//        );
//
//        $startF = 'holder_postal_code';
//        $startT = 'rejected_postal_code';
//        $table = 'service_addresses';
//
//        $output = 'ALTER TABLE ' .$table.'<br>';
//        for($i=0 ; $i<count($fields) ; $i++){
//            if($i==0){
//                $output.= 'ADD COLUMN '.$fields[$i].' VARCHAR(255) NULL AFTER '.$startF.',' . '<br>';
//
//            }else{
//                $output.= 'ADD COLUMN '.$fields[$i].' VARCHAR(255) NULL AFTER '.$fields[$i-1].',' . '<br>';
//
//            }
//        }
//
//        $output.= 'ADD COLUMN submitted_by VARCHAR(255) NULL AFTER '.$startT.' ,  '. '<br>';
//        $output.= 'ADD COLUMN rejected_by VARCHAR(255) NULL  AFTER submitted_by ,  '. '<br>';
//        $output.= 'ADD COLUMN approved_by VARCHAR(255) NULL AFTER rejected_by   '. '<br>';
//
//
//
//        echo $output;

        /*******************/


        $file = Files::find($id);

        $sellers = Sellers::where('ref_file', $id)->get(); //>
        $buyers = Buyers::where('ref_file', $id)->get(); //>
        $lawyer = Lawyers::where('ref_file', $id)->orderby('id', 'desc')->first();
        $property = Props::where('ref_file', $id)->first(); //>
        $file_info = FileInformation::where('ref_file', $id)->first(); //>
        $realtors = Realtors::where('ref_file', $id)->get(); //>
        $taxes = PropTax::where('ref_file', $id)->first(); //>
        $deliveryKey = DeliveryKey::where('ref_file', $id)->first(); //>
        $purchase_file = PurchaseFileDetails::where('ref_file', $id)->first(); //>
        $mortgages = Mortgages::where('ref_file', $id)->get();
        $payments = Payment::where('ref_file', $id)->get(); //>
        $deposite_sale = DepositeSale::where('ref_file', $id)->first(); //>
        $file_documents = FileDocuments::where('ref_file', $id)->where('type', 'FILE')->orderby('id', 'desc')->get(); //>
        $closing_packages = FileDocuments::where('ref_file', $id)->where('type', 'CLOSING_PACKAGE')->orderby('id', 'desc')->get(); //>
        $signing_packages = FileDocuments::where('ref_file', $id)->where('type', 'SIGNING_PACKAGE')->orderby('id', 'desc')->get(); //>


        $output = '-----------File Details--------------'. '<br><br>';
        $output .= 'File Type: '.$file['file_type'] . '<br>';
        $output .= 'Closing Date: '. Carbon::parse($file['closing_date'])->format('M j, Y') . '<br>';

        $output .= 'Property Address: ';
        $output.= isset($file->prop['address']) ? $file->prop['address']  : ''  .
        isset($file->prop['city']) ? ', '.$file->prop['city']  : ''  .
        isset($file->prop['province']) ? ', '.$file->prop['province'] : '' .
        isset($file->prop['postal_code']) ? ', '.$file->prop['postal_code'] : '';
        $output.= '<br>';

        $output .= 'Clients: ';
        foreach ($sellers as $seller){ $output .= $seller['first_name'] . ' '. $seller['last_name'] . ',  ';   }
        $output.= '<br>';

        if($file['file_type'] == "Sale" || $file['file_type'] == "Purchase") {
            $output .= 'Buyers: ';
            foreach ($buyers as $buyer) {
                $output .= $buyer['first_name'] . ' ' . $buyer['last_name'] . ',  ';
            }
            $output .= '<br>';
            $output .= '<br>';
            $output .= '<br>';
        }


        $output .= '---------------File Submissions-------------------' . ' <br>';
        $output .= '<b>---------------Final Data--------------------------</b>' . ' <br><br>';

        $output .= '----------------Homeonwers-------------' . ' <br><br>';
        foreach ($sellers as $key => $seller) {

            $output .= '<b>----------------Homeonwer ';
            $output.= $key+1;
            $output.= ' Information -------------</b> <br><br>';

            $output .= 'First Name: ' . $seller['first_name'] . '<br>';
            $output .= 'Last Name: ' . $seller['last_name'] . '<br>';
            $output .= 'Gender: ' . $seller['gender'] . '<br>';
            $output .= 'Birthdate: ' . $seller['birth_date'] . '<br>';
            $output .= 'E-mail: ' . $seller['email'] . '<br>';
            $output .= 'Phone: ' . $seller['phone'] . '<br>';
            $output .= 'Address: ' . $seller['address'] . '<br>';
            $output .= 'City: ' . $seller['city'] . '<br>';
            $output .= 'Postal Code: ' . $seller['postal_code'] . '<br>';
            $output .= 'Is this your primary residence ? ' . $seller['is_client_primary'] . '<br>';
            $output .= 'Are you legally married ? ' . $seller['is_married'] . '<br>';
            $output .= 'Is your spouse on title for this property ? ' . $seller['is_spouse_on_title'] . '<br>';
            $output .= '<br><br>';

            $output .= '<b>---------------File Submissions-------------------</b><br>';
            $output .= '---------------Submission (01)-------------------<br><br>';
            $output .= 'Electronically signed and submitted by: '.'<br>' ;
            $output .= $seller['submitted_by'] . '<br><br><br>';

            $output .= 'First Name: ' . $seller['holder_first_name'] . '<br>';
            $output .= 'Last Name: ' . $seller['holder_last_name'] . '<br>';
            $output .= 'Gender: ' . $seller['holder_gender'] . '<br>';
            $output .= 'Birthdate: ' . $seller['holder_birth_date'] . '<br>';
            $output .= 'E-mail: ' . $seller['holder_email'] . '<br>';
            $output .= 'Phone: ' . $seller['holder_phone'] . '<br>';
            $output .= 'Address: ' . $seller['holder_address'] . '<br>';
            $output .= 'City: ' . $seller['holder_city'] . '<br>';
            $output .= 'Postal Code: ' . $seller['holder_postal_code'] . '<br>';
            $output .= 'Is this your primary residence ? ' . $seller['holder_is_client_primary'] . '<br>';
            $output .= 'Are you legally married ?  ' . $seller['holder_is_married'] . '<br>';
            $output .= 'Is your spouse on title for this property ? ' . $seller['holder_is_spouse_on_title'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= 'Electronically signed and Approved by: ' . '<br>';
            $output .= $seller['approved_by'] . '<br><br><br>';

            $output .= 'First Name: ' . $seller['approved_first_name'] . '<br>';
            $output .= 'Last Name: ' . $seller['approved_last_name'] . '<br>';
            $output .= 'Gender: ' . $seller['approved_gender'] . '<br>';
            $output .= 'Birthdate: ' . $seller['approved_birth_date'] . '<br>';
            $output .= 'E-mail: ' . $seller['approved_email'] . '<br>';
            $output .= 'Phone: ' . $seller['approved_phone'] . '<br>';
            $output .= 'Address: ' . $seller['approved_address'] . '<br>';
            $output .= 'City: ' . $seller['approved_city'] . '<br>';
            $output .= 'Postal Code: '. $seller['approved_posta_code'] . '<br>';
            $output .= 'Is this your primary residence ? ' . $seller['approved_is_client_primary'] . '<br>';
            $output .= 'Are you legally married ?  ' . $seller['approved_is_married'] . '<br>';
            $output .= 'Is your spouse on title for this property ? ' . $seller['approved_is_spouse_on_title'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= 'Electronically signed and Rejected by:' ;
            $output .= $seller['rejected_by'] .'<br><br><br>';

            $output .= 'First Name: ' . $seller['rejected_first_name'] . '<br>';
            $output .= 'Last Name: ' . $seller['rejected_last_name'] . '<br>';
            $output .= 'Gender: ' . $seller['rejected_gender'] . '<br>';
            $output .= 'Birthdate: ' . $seller['rejected_birth_date'] . '<br>';
            $output .= 'E-mail: ' . $seller['rejected_email'] . '<br>';
            $output .= 'Phone: ' . $seller['rejected_phone'] . '<br>';
            $output .= 'Address: ' . $seller['rejected_address'] . '<br>';
            $output .= 'City: ' . $seller['rejected_city'] . '<br>';
            $output .= 'Postal Code: ' . $seller['rejected_postal_code'] . '<br>';
            $output .= 'Is this your primary residence ? ' . $seller['rejected_is_client_primary'] . '<br>';
            $output .= 'Are you legally married ?  ' . $seller['rejected_is_married'] . '<br>';
            $output .= 'Is your spouse on title for this property ? ' . $seller['rejected_is_spouse_on_title'] . '<br>';
            $output .= '<br><br>';


        }

        if ($file['file_type'] == "Sale" || $file['file_type'] == "Purchase") {

            if ($file['file_type'] == "Sale") {

                $output .= '----------------Buyers Information------------- <br><br>';
            } else if ($file['file_type'] == "Purchase") {

                $output .= '----------------Sellers Information -------------<br><br>';
            }

            $output .= '----------------Lawyer Information-------------<br><br>';

            $output .= 'Firm Name: ' . $lawyer['firm_name'] . '<br>';
            $output .= 'First Name: ' . $lawyer['first_name'] . '<br>';
            $output .= 'Last Name: ' . $lawyer['last_name'] . '<br>';
            $output .= 'Gender: ' . $lawyer['gender'] . '<br>';
            $output .= 'E-mail: ' . $lawyer['email'] . '<br>';
            $output .= 'Phone: ' . $lawyer['phone'] . '<br>';
            $output .= 'Fax: ' . $lawyer['address'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .= $lawyer['submitted_by'] . '<br><br>';

            $output .= 'Firm Name: ' . $lawyer['holder_firm_name'] . '<br>';
            $output .= 'First Name: ' . $lawyer['holder_first_name'] . '<br>';
            $output .= 'Last Name: ' . $lawyer['holder_last_name'] . '<br>';
            $output .= 'Gender: ' . $lawyer['holder_gender'] . '<br>';
            $output .= 'E-mail: ' . $lawyer['holder_email'] . '<br>';
            $output .= 'Phone: ' . $lawyer['holder_phone']. '<br>';
            $output .= 'Fax: ' . $lawyer['aholder_address'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and Approved by:</b> <br>' ;
            $output .=  $lawyer['approved_by'] . '<br><br><br>';

            $output .= 'Firm Name: ' . $lawyer['approved_firm_name'] . '<br>';
            $output .= 'First Name: ' . $lawyer['approved_first_name'] . '<br>';
            $output .= 'Last Name: ' . $lawyer['approved_last_name'] . '<br>';
            $output .= 'Gender: ' . $lawyer['approved_gender'] . '<br>';
            $output .= 'E-mail: ' . $lawyer['approved_email'] . '<br>';
            $output .= 'Phone: ' . $lawyer['approved_phone'] . '<br>';
            $output .= 'Fax: ' . $lawyer['approved_address'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and Rejected by:</b> <br>' ;
            $output .=  $lawyer['rejected_by'] . '<br><br><br>';

            $output .= 'Firm Name: ' . $lawyer['rejected_firm_name'] . '<br>';
            $output .= 'First Name: ' . $lawyer['rejected_first_name'] . '<br>';
            $output .= 'Last Name: ' . $lawyer['rejected_last_name'] . '<br>';
            $output .= 'Gender: ' . $lawyer['rejected_gender'] . '<br>';
            $output .= 'E-mail: ' . $lawyer['rejected_email'] . '<br>';
            $output .= 'Phone: ' . $lawyer['rejected_phone'] . '<br>';
            $output .= 'Fax: ' . $lawyer['rejected_address'] . '<br>';
            $output .= '<br><br>';

            foreach ($buyers as $key => $buyer) {

                if($file['file_type'] == "Sale") {
                    $output .= '<b>----------------Buyer ';
                    $output.=$key+1;
                    $output.= ' Information-------------</b>' . ' <br><br>';
                }
                elseif ($file['file_type'] == "Purchase"){
                    $output .= '<b>----------------Seller ';
                    $output.=$key+1;
                    $output.= ' Information-------------</b>' . ' <br><br>';
                }

                $output .= 'First Name: ' . $buyer['first_name'] . '<br>';
                $output .= 'Last Name: ' . $buyer['last_name'] . '<br>';
                $output .= 'Gender: ' . $buyer['gender'] . '<br>';
                $output .= 'E-mail: ' . $buyer['email'] . '<br>';
                $output .= 'Phone: ' . $buyer['phone'] . '<br>';
                $output .= 'Address: ' . $buyer['address'] . '<br>';
                $output .= '<br><br>';
                $output .= '<br><br>';

                $output .= '---------------Submission (01)------------------- <br><br>';
                $output .= '<b>Electronically signed and Submitted by:</b> <br>' ;
                $output .=  $buyer['submitted_by'] . '<br><br><br>';

                $output .= 'First Name: ' . $buyer['holder_first_name'] . '<br>';
                $output .= 'Last Name: ' . $buyer['holder_last_name'] . '<br>';
                $output .= 'Gender: ' . $buyer['holder_gender'] . '<br>';
                $output .= 'E-mail: ' . $buyer['holder_email'] . '<br>';
                $output .= 'Phone: ' . $buyer['holder_phone'] . '<br>';
                $output .= 'Address: ' . $buyer['holder_address'] . '<br>';
                $output .= '<br><br>';


                $output .= '---------------Submission (02)------------------- <br><br>';
                $output .= '<b>Electronically signed and approved by:</b> <br>' ;
                $output .=  $buyer['approved_by'] . '<br><br><br>';

                $output .= 'First Name: ' . $buyer['approved_first_name'] . '<br>';
                $output .= 'Last Name: ' . $buyer['approved_last_name'] . '<br>';
                $output .= 'Gender: ' . $buyer['approved_gender'] . '<br>';
                $output .= 'E-mail: ' . $buyer['approved_email'] . '<br>';
                $output .= 'Phone: ' . $buyer['approved_phone'] . '<br>';
                $output .= 'Address: ' . $buyer['approved_address'] . '<br>';
                $output .= '<br><br>';
                $output .= '<br><br>';


                $output .= '---------------Submission (03)------------------- <br><br>';
                $output .= '<b>Electronically signed and Rejected by:</b> <br>' ;
                $output .= $buyer['rejected_by'] . '<br><br><br>';

                $output .= 'First Name: ' . $buyer['rejected_first_name'] . '<br>';
                $output .= 'Last Name: ' . $buyer['rejected_last_name'] . '<br>';
                $output .= 'Gender: ' . $buyer['rejected_gender'] . '<br>';
                $output .= 'E-mail: ' . $buyer['rejected_email'] . '<br>';
                $output .= 'Phone: ' . $buyer['rejected_phone'] . '<br>';
                $output .= 'Address: ' . $buyer['rejected_address'] . '<br>';
                $output .= '<br><br>';
                $output .= '<br><br>';


            }




        }


        $output .= '----------------Property Information-------------' . ' <br><br>';


        $output .= 'Street Address: ' . $property['street_address'] . '<br>';
        $output .= 'City: ' . $property['city'] . '<br>';
        $output .= 'Province: ' . $property['province'] . '<br>';
        $output .= 'Postal code: ' . $property['postal_code'] . '<br>';
        $output .= '<br><br>';


        $output .= '---------------Submission (01)------------------- <br><br>';
        $output .= '<b>Electronically signed and submitted by: </b><br>';
        $output .= $property['submitted_by'] .'<br><br><br>';

        $output .= 'Street Address: ' . $property['holder_street_address'] . '<br>';
        $output .= 'City: ' . $property['holder_city'] . '<br>';
        $output .= 'Province: ' . $property['holder_province'] . '<br>';
        $output .= 'Postal code: ' . $property['holder_postal_code'] . '<br>';
        $output .= '<br><br>';


        $output .= '---------------Submission (02)------------------- <br><br>';
        $output .= '<b>Electronically signed and approved by: </b><br>';
        $output .=  $property['approved_by'] . '<br><br> <br>';

        $output .= 'Street Address: ' . $property['approved_street_address'] . '<br>';
        $output .= 'City: ' . $property['approved_city'] . '<br>';
        $output .= 'Province: ' . $property['approved_province'] . '<br>';
        $output .= 'Postal code: ' . $property['approved_postal_code'] . '<br>';
        $output .= '<br><br>';


        $output .= '---------------Submission (03)------------------- <br><br>';
        $output .= '<b>Electronically signed and rejected by: </b><br>';
        $output .=  $property['rejected_by'] .'<br><br><br>';

        $output .= 'Street Address: ' . $property['rejected_street_address'] . '<br>';
        $output .= 'City: ' . $property['rejected_city'] . '<br>';
        $output .= 'Province: ' . $property['rejected_province'] . '<br>';
        $output .= 'Postal code: ' . $property['rejected_postal_code'] . '<br>';
        $output .= '<br><br>';


        if ($file->file_type == "Sale") {


            $output .= '----------------Property Tax Information-------------' . ' <br><br>';

            $output .= 'Annual 2021 Taxes: ' . $taxes['annual_tax'] . '<br>';
            $output .= 'Annual paid to date: ' . $taxes['annual_paid_to_date'] . '<br>';
            $output .= 'Roll Number: ' . $taxes['roll_number'] . '<br>';
            $output .= 'City: ' . $taxes['city'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .=  $taxes['submitted_by']. '<br><br><br>';

            $output .= 'Annual 2021 Taxes: ' . $taxes['holder_annual_tax'] . '<br>';
            $output .= 'Annual paid to date: ' . $taxes['holder_paid_to_date'] . '<br>';
            $output .= 'Roll Number: ' . $taxes['holder_roll_number'] . '<br>';
            $output .= 'City: ' . $taxes['holder_city'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .=  $taxes['approved_by'] . '<br><br><br>';
            $output .= 'Annual 2021 Taxes: ' . $taxes['approved_annual_tax'] . '<br>';
            $output .= 'Annual paid to date: ' . $taxes['approved_paid_to_date'] . '<br>';
            $output .= 'Roll Number: ' . $taxes['approved_roll_number'] . '<br>';
            $output .= 'City: ' . $taxes['approved_city'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .=  $taxes['rejected_by'] .'<br><br><br>';

            $output .= 'Annual 2021 Taxes: ' . $taxes['rejected_annual_tax'] . '<br>';
            $output .= 'Annual paid to date: ' . $taxes['rejected_paid_to_date'] . '<br>';
            $output .= 'Roll Number: ' . $taxes['rejected_roll_number'] . '<br>';
            $output .= 'City: ' . $taxes['rejected_city'] . '<br>';
            $output .= '<br><br>';
        }

        if ($file->file_type == "Sale") {


            $output .= '----------------Key Delivery Information -------------' . ' <br><br>';

            $output .= 'Name: ' . $deliveryKey['name'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .= $deliveryKey['submitted_by'] . '<br><br>';
            $output .= 'Name: ' . $deliveryKey['holder_name'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and approved by: </b><br>';
            $output .= $deliveryKey['approved_by'] . '-----' . '<br><br><br>';

            $output .= 'Name: ' . $deliveryKey['approved_holder_name'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and rejected by: </b><br>';
            $output .= $deliveryKey['rejected_by'] . '<br><br><br>';

            $output .= 'Name ' . $deliveryKey['rejected_holder_name'] . '<br>';
            $output .= '<br><br>';
        }


        $output .= '----------------Financial Details Information-------------' . ' <br><br>';

        $output .= 'Price: $' . $file_info['file_price'] . '<br>';
        $output .= 'Was a deposit received from the buyer ? ' . $file_info['is_deposit_received'] . '<br>';
        $output .= 'How much was received? ' . $file_info['much_received'] . '<br>';
        $output .= 'Who received the deposit ? ' . $file_info['who_received'] . '<br>';
        $output .= 'Other Receiver Name: ' . $file_info['other_receiver'] . '<br>';
        $output .= '<br><br>';


        $output .= '---------------Submission (01)------------------- <br><br>';
        $output .= '<b>Electronically signed and submitted by: </b><br>';
        $output .=  $file_info['submitted_by'] .'<br><br><br>';

        $output .= 'Price: $' . $file_info['holder_file_price'] . '<br>';
        $output .= 'Was a deposit received from the buyer ? ' . $file_info['holder_is_deposit_received'] . '<br>';
        $output .= 'How much was received? ' . $file_info['holder_much_received'] . '<br>';
        $output .= 'Who received the deposit ? ' . $file_info['holder_who_received'] . '<br>';
        $output .= 'Other Receiver Name: ' . $file_info['holder_other_receiver'] . '<br>';
        $output .= '<br><br>';


        $output .= '---------------Submission (02)------------------- <br><br>';
        $output .= '<b>Electronically signed and approved by: </b><br>';
        $output .=  $file_info['approved_by'] .'<br><br><br>';

        $output .= 'Price: ' . $file_info['approved_file_price'] . '<br>';
        $output .= 'Was a deposit received from the buyer ? ' . $file_info['approved_is_deposit_received'] . '<br>';
        $output .= 'How much was received? ' . $file_info['approved_much_received'] . '<br>';
        $output .= 'Who received the deposit ? ' . $file_info['approved_who_received'] . '<br>';
        $output .= 'Other Receiver Name: ' . $file_info['approved_other_receiver'] . '<br>';
        $output .= '<br><br>';


        $output .= '---------------Submission (03)------------------- <br><br>';
        $output .= '<b>Electronically signed and rejected by: </b><br>';
        $output .=  $file_info['rejected_by'] . '<br><br><br>';

        $output .= 'Price: $' . $file_info['rejected_file_price'] . '<br>';
        $output .= 'Was a deposit received from the buyer ? ' . $file_info['rejected_is_deposit_received'] . '<br>';
        $output .= 'How much was received? ' . $file_info['rejected_much_received'] . '<br>';
        $output .= 'Who received the deposit ? ' . $file_info['rejected_who_received'] . '<br>';
        $output .= 'Other Receiver Name: ' . $file_info['rejected_other_receiver'] . '<br>';
        $output .= '<br><br>';


        if ($file->file_type == "Purchase" || $file->file_type == "Refinance") {

            $output .= '----------------File Details-------------' . ' <br><br>';

            $output .= 'Closing Date: ' . $purchase_file['closing_date'] . '<br>';
            $output .= 'Is the property a condo ? ' . $purchase_file['is_condo'] . '<br>';
            $output .= 'Do you require a status certificate review? ' . $purchase_file['require_certificate'] . '<br>';
            $output .= 'Company Name: ' . $purchase_file['company_name'] . '<br>';
            $output .= 'Address: ' . $purchase_file['address'] . '<br>';
            $output .= 'E-mail: ' . $purchase_file['email'] . '<br>';
            $output .= 'Number: ' . $purchase_file['number'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .= $purchase_file['submitted_by'] .  '<br><br><br>';

            $output .= 'Closing Date: ' . $purchase_file['holder_closing_date'] . '<br>';
            $output .= 'Is the property a condo ? ' . $purchase_file['holder_is_condo'] . '<br>';
            $output .= 'Do you require a status certificate review? ' . $purchase_file['holder_require_certificate'] . '<br>';
            $output .= 'Company Name: ' . $purchase_file['holder_address'] . '<br>';
            $output .= 'Address: ' . $purchase_file['holder_address']. '<br>';
            $output .= 'E-mail: ' . $purchase_file['holder_email'] . '<br>';
            $output .= 'Number: ' . $purchase_file['holder_number'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and approved by: </b><br>';
            $output .=  $purchase_file['approved_by']. '<br><br><br>';

            $output .= 'Closing Date: ' . $purchase_file['approved_closing_date'] . '<br>';
            $output .= 'Is the property a condo ? ' . $purchase_file['approved_is_condo'] . '<br>';
            $output .= 'Do you require a status certificate review? ' . $purchase_file['approved_require_certificate'] . '<br>';
            $output .= 'Company Name: ' . $purchase_file['approved_company_name']. '<br>';
            $output .= 'Address: ' . $purchase_file['approved_address']. '<br>';
            $output .= 'E-mail: ' . $purchase_file['approved_email'] . '<br>';
            $output .= 'Number: ' . $purchase_file['approved_number'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and rejected by: </b><br>';
            $output .=  $purchase_file['rejected_by'] . '<br><br><br>';

            $output .= 'Closing Date: ' . $purchase_file['rejected_closing_date']. '<br>';
            $output .= 'Is the property a condo ? ' . $purchase_file['rejected_is_condo']. '<br>';
            $output .= 'Do you require a status certificate review? ' . $purchase_file['rejected_require_certificate']. '<br>';
            $output .= 'Company Name: ' . $purchase_file['rejected_company_name'] . '<br>';
            $output .= 'Address: ' . $purchase_file['rejected_address'] . '<br>';
            $output .= 'E-mail: ' . $purchase_file['rejected_email'] . '<br>';
            $output .= 'Number: ' . $purchase_file['rejected_number'] . '<br>';
            $output .= '<br><br>';

        }

        if ($file->file_type == "Sale" || $file->file_type == "Refinance") {

            $output .= '----------------Depositing Sale Proceeds-------------' . ' <br><br>';

            $output .= 'Bank Name: ' . $deposite_sale['client_bank_name']. '<br>';
            $output .= 'Account Holder: ' . $deposite_sale['client_account_holder'] . '<br>';
            $output .= 'Account Number: ' . $deposite_sale['client_account_number'] . '<br>';
            $output .= 'Transit Number: ' . $deposite_sale['client_transit_number'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .=  $deposite_sale['submitted_by'] . '<br><br><br>';

            $output .= 'Bank Name: ' . $deposite_sale['holder_client_bank_name'] . '<br>';
            $output .= 'Account Holder: ' . $deposite_sale['holder_client_account_holder'] . '<br>';
            $output .= 'Account Number: ' . $deposite_sale['holder_client_account_number'] . '<br>';
            $output .= 'Transit Number: ' . $deposite_sale['holder_client_transit_number'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .= $deposite_sale['approved_by'] . '<br><br><br>';

            $output .= 'Bank Name: ' . $deposite_sale['approved_client_bank_name'] . '<br>';
            $output .= 'Account Holder: ' . $deposite_sale['approved_client_account_holder'] . '<br>';
            $output .= 'Account Number: ' . $deposite_sale['approved_client_account_number'] . '<br>';
            $output .= 'Transit Number: ' . $deposite_sale['approved_client_transit_number'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and rejected by: </b><br>';
            $output .=  $deposite_sale['rejected_by'] . '<br><br><br>';

            $output .= 'Bank Name: ' . $deposite_sale['rejected_client_bank_name'] . '<br>';
            $output .= 'Account Holder: ' . $deposite_sale['rejected_client_account_holder'] . '<br>';
            $output .= 'Account Number: ' . $deposite_sale['rejected_client_account_number'] . '<br>';
            $output .= 'Transit Number: ' . $deposite_sale['rejected_client_transit_number'] . '<br>';
            $output .= '<br><br>';

        }

        if ($file->file_type == "Purchase" || $file->file_type == "Refinance") {

            $output .= '----------------Mortgages-------------' . ' <br><br>';

            foreach ($mortgages as $key=> $mort) {

                $output .= '<b>-----Mortgage ';
                $output.= $key+1;
                $output.= ' Information-----</b> <br><br>';

                $output .= 'Account Holder: ' . $mort['account_holder'] . '<br>';
                $output .= 'Bank / Financial Institution: ' . $mort['bank_institution'] . '<br>';
                $output .= 'Priority: ' . $mort['priority'] . '<br>';
                $output .= '<br><br>';


                $output .= '---------------Submission (01)------------------- <br><br>';
                $output .= '<b>Electronically signed and submitted by: </b><br>';
                $output .=  $mort['submitted_by'] . '<br><br><br>';
                $output .= 'Account Holder: ' . $mort['holder_account_holder'] . '<br>';
                $output .= 'Bank / Financial Institution: ' . $mort['holder_bank_institution'] . '<br>';
                $output .= 'Priority: ' . $mort['holder_priority'] . '<br>';
                $output .= '<br><br>';


                $output .= '---------------Submission (02)------------------- <br><br>';
                $output .= '<b>Electronically signed and submitted by: </b><br>';
                $output .=  $mort['approved_by'] .  '<br><br>';

                $output .= 'Account Holder: ' . $mort['approved_account_holder'] . '<br>';
                $output .= 'Bank / Financial Institution: ' . $mort['approved_bank_institution'] . '<br>';
                $output .= 'Priority: ' . $mort['approved_priority'] . '<br>';
                $output .= '<br><br>';


                $output .= '---------------Submission (03)------------------- <br><br>';
                $output .= '<b>Electronically signed and rejected by: </b><br>';
                $output .= $mort['rejected_by'] .  '<br><br>';

                $output .= 'Account Holder: ' . $mort['rejected_account_holder'] . '<br>';
                $output .= 'Bank / Financial Institution: ' . $mort['rejected_bank_institution'] . '<br>';
                $output .= 'Priority: ' . $mort['rejected_priority'] . '<br>';
                $output .= '<br><br>';
            }

        }

        $output .= '----------------Payments Information-------------' . ' <br><br>';

        foreach ($payments as $payment) {

            $output .= 'Payment type: ' . $payment['type'] . '<br>';
            if ($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit") {

                $output .='Account Holder: '.$payment['payee_name']. '<br>';
            }

            if ($payment['type'] == "PropertyTax") {
                $output .= 'City Name: '.$payment['name'] . '<br>';
            }
            elseif ($payment['type'] == "CreditCard") {
                $output.= 'Card Company: '.$payment['name'] . '<br>';
            }
            else if ($payment['type'] == "BrokerFee"){
                $output.= ' Broker Name: '.$payment['name']. '<br>';
            }
            else if($payment['type'] == "CondoFees"){
                $output.= 'Property Management Company: '.$payment['name']. '<br>';
            }
            else if ($payment['type'] == "RealtorPayment"){
                $output.= 'Realtor Name: '.$payment['name'];
            }
            else if($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit" ){
                $output.= 'Bank/Creditor Name: '.$payment['name'] . '<br>';
            }
            else if($payment['type'] == "OtherPayment"){
                $output.= 'Name: '.$payment['name'] . '<br>';
            }

            if ($payment['type'] == "PropertyTax") {

                $output .='Roll Number:'.$payment['roll_number'] . '<br>';

            }

            if ($payment['type'] == "CondoFees") {

                $output .='Phone:'.$payment['phone'] . '<br>';
            }

            if ($payment['type'] == "MortgageLoc" ||
                $payment['type'] == "LineOfCredit") {

                $output .='Priority: '.$payment['priority'] . '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment") {

                $output .='Amount: $'.$payment['amount'] . '<br>';
            }

            if (
                $payment['type'] == "OtherPayment" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "MortgageLoc"
                ) {

                $output .='Account Number: '.$payment['account_number'] . '<br>';
            }

            if (
                $payment['type'] == "OtherPayment"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"
            ) {

                $output .='Email: '.$payment['email'] . '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Payable To: '.$payment['payable_to'] . '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Mailing Address: '.$payment['mailing_address'] . '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='City: '.$payment['city'];
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Postal Code: '.$payment['postal_code'] . '<br>';
            }
            $output.='<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output.=  $payment['submitted_by'].'<br><br><br>';

            $output .= 'Payment type: ' . $payment['holder_type'] . '<br>';
            if ($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit") {

                $output .='Account Holder: '.$payment['holder_payee_name'] . '<br>';
            }

            if ($payment['type'] == "PropertyTax") {
                $output .= 'City Name: '.$payment['holder_name'] . '<br>';
            }
            elseif ($payment['type'] == "CreditCard") {
                $output.= 'Card Company: '.$payment['holder_name'] . '<br>';
            }
            else if ($payment['type'] == "BrokerFee"){
                $output.= ' Broker Name: '.$payment['holder_name'] . '<br>';
            }
            else if($payment['type'] == "CondoFees"){
                $output.= 'Property Management Company: '.$payment['holder_name'];
            }
            else if ($payment['type'] == "RealtorPayment"){
                $output.= 'Realtor Name: '.$payment['holder_name'] . '<br>';
            }
            else if($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit" ){
                $output.= 'Bank/Creditor Name: '.$payment['holder_name'] . '<br>';
            }
            else if($payment['type'] == "OtherPayment"){
                $output.= 'Name: '.$payment['holder_name'] . '<br>';
            }

            if ($payment['type'] == "PropertyTax") {

                $output .='Roll Number:'.$payment['holder_roll_number'] . '<br>';

            }

            if ($payment['type'] == "CondoFees") {

                $output .='Phone:'.$payment['holder_phone'] . '<br>';
            }

            if ($payment['type'] == "MortgageLoc" ||
                $payment['type'] == "LineOfCredit") {

                $output .='Priority: '.$payment['holder_priority']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment") {

                $output .='Amount: $'.$payment['holder_amount']. '<br>';
            }

            if (
                $payment['type'] == "OtherPayment" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "MortgageLoc"
            ) {

                $output .='Account Number: '.$payment['holder_account_number']. '<br>';
            }

            if (
                $payment['type'] == "OtherPayment"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"
            ) {

                $output .='Email: '.$payment['holder_email']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Payable To: '.$payment['holder_payable_to']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Mailing Address: '.$payment['holder_mailing_address']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='City: '.$payment['holder_city']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Postal Code: '.$payment['holder_postal_code']. '<br>';
            }
            $output.='<br><br>';


            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and approved by: </b><br>';
            $output.= $payment['approved_by'].'-----<br><br><br>';

            $output .= 'Payment type: ' . $payment['approved_type'] . '<br>';
            if ($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit") {

                $output .='Account Holder: '.$payment['approved_payee_name']. '<br>';
            }

            if ($payment['type'] == "PropertyTax") {
                $output .= 'City Name: '.$payment['approved_name']. '<br>';
            }
            elseif ($payment['type'] == "CreditCard") {
                $output.= 'Card Company: '.$payment['approved_name']. '<br>';
            }
            else if ($payment['type'] == "BrokerFee"){
                $output.= ' Broker Name: '.$payment['approved_name']. '<br>';
            }
            else if($payment['type'] == "CondoFees"){
                $output.= 'Property Management Company: '.$payment['approved_name']. '<br>';
            }
            else if ($payment['type'] == "RealtorPayment"){
                $output.= 'Realtor Name: '.$payment['approved_name']. '<br>';
            }
            else if($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit" ){
                $output.= 'Bank/Creditor Name: '.$payment['approved_name']. '<br>';
            }
            else if($payment['type'] == "OtherPayment"){
                $output.= 'Name: '.$payment['approved_name']. '<br>';
            }

            if ($payment['type'] == "PropertyTax") {

                $output .='Roll Number:'.$payment['approved_roll_number']. '<br>';

            }

            if ($payment['type'] == "CondoFees") {

                $output .='Phone:'.$payment['approved_phone']. '<br>';
            }

            if ($payment['type'] == "MortgageLoc" ||
                $payment['type'] == "LineOfCredit") {

                $output .='Priority: '.$payment['approved_priority']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment") {

                $output .='Amount: $'.$payment['approved_amount']. '<br>';
            }

            if (
                $payment['type'] == "OtherPayment" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "MortgageLoc"
            ) {

                $output .='Account Number: '.$payment['approved_account_number'];
            }

            if (
                $payment['type'] == "OtherPayment"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"
            ) {

                $output .='Email: '.$payment['approved_email']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Payable To: '.$payment['approved_payable_to']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Mailing Address: '.$payment['approved_mailing_address']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='City: '.$payment['approved_city']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Postal Code: '.$payment['approved_postal_code']. '<br>';
            }
            $output.='<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and rejected by: </b><br>';
            $output.= $payment['rejected_by']. '<br><br><br>';

            $output .= 'Payment type: ' . $payment['rejected_type'] . '<br>';
            if ($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit") {

                $output .='Account Holder: '.$payment['rejected_payee_name']. '<br>';
            }

            if ($payment['type'] == "PropertyTax") {
                $output .= 'City Name: '.$payment['rejected_name']. '<br>';
            }
            elseif ($payment['type'] == "CreditCard") {
                $output.= 'Card Company: '.$payment['rejected_name']. '<br>';
            }
            else if ($payment['type'] == "BrokerFee"){
                $output.= ' Broker Name: '.$payment['rejected_name']. '<br>';
            }
            else if($payment['type'] == "CondoFees"){
                $output.= 'Property Management Company: '.$payment['rejected_name']. '<br>';
            }
            else if ($payment['type'] == "RealtorPayment"){
                $output.= 'Realtor Name: '.$payment['rejected_name']. '<br>';
            }
            else if($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit" ){
                $output.= 'Bank/Creditor Name: '.$payment['rejected_name']. '<br>';
            }
            else if($payment['type'] == "OtherPayment"){
                $output.= 'Name: '.$payment['rejected_name']. '<br>';
            }

            if ($payment['type'] == "PropertyTax") {

                $output .='Roll Number:'.$payment['rejected_roll_number']. '<br>';

            }

            if ($payment['type'] == "CondoFees") {

                $output .='Phone:'.$payment['rejected_phone']. '<br>';
            }

            if ($payment['type'] == "MortgageLoc" ||
                $payment['type'] == "LineOfCredit") {

                $output .='Priority: '.$payment['rejected_priority']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment") {

                $output .='Amount: $'.$payment['rejected_amount']. '<br>';
            }

            if (
                $payment['type'] == "OtherPayment" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "MortgageLoc"
            ) {

                $output .='Account Number: '.$payment['rejected_account_number']. '<br>';
            }

            if (
                $payment['type'] == "OtherPayment"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"
            ) {

                $output .='Email: '.$payment['rejected_email']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Payable To: '.$payment['rejected_payable_to']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Mailing Address: '.$payment['rejected_mailing_address']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='City: '.$payment['rejected_city']. '<br>';
            }

            if (
                $payment['type'] == "PropertyTax" ||
                $payment['type'] == "CreditCard"  ||
                $payment['type'] == "BrokerFee" ||
                $payment['type'] == "CondoFees" ||
                $payment['type'] == "RealtorPayment"  ||
                $payment['type'] == "MortgageLoc"  ||
                $payment['type'] == "LineOfCredit"  ||
                $payment['type'] == "OtherPayment"
            ) {

                $output .='Postal Code: '.$payment['rejected_postal_code']. '<br>';
            }
            $output.='<br><br>';
        }

        $output .= '----------------Realtors-------------' . ' <br><br>';

        foreach ($realtors as $key => $realtor) {

            $output .= '<b>-----Realtor';
            $output .= $key +1;
            $output.=' Information-----</b> <br><br>';

            $output .= 'Type: ' . $realtor['realtor_type'] . '<br>';
            $output .= 'First Name: ' . $realtor['first_name'] . '<br>';
            $output .= 'Last Name: ' . $realtor['last_name'] . '<br>';
            $output .= 'Gender: ' . $realtor['gender'] . '<br>';
            $output .= 'Phone: ' . $realtor['phone'] . '<br>';
            $output .= 'E-mail: ' . $realtor['email'] . '<br>';
//            $output .= 'Total Commission: ' . $realtor['total_commission'] . '<br>';
//            $output .= 'Percentage Commission: ' . $realtor['percentage_commission'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (01)------------------- <br><br>';
            $output .= '<b>Electronically signed and submitted by: </b><br>';
            $output .=  $realtor['submitted_by'] . '<br><br><br>';

            $output .= 'Type: ' . $realtor['holder_realtor_type'] . '<br>';
            $output .= 'First Name: ' . $realtor['holder_first_name'] . '<br>';
            $output .= 'Last Name: ' . $realtor['holder_last_name'] . '<br>';
            $output .= 'Gender: ' . $realtor['holder_gender'] . '<br>';
            $output .= 'Phone: ' . $realtor['holder_phone'] . '<br>';
            $output .= 'E-mail: ' . $realtor['holder_email'] . '<br>';
//            $output .= 'Total Commission: ' . $realtor['holder_total_commission'] . '<br>';
//            $output .= 'Percentage Commission: ' . $realtor['holder_percentage_commission'] . '<br>';
            $output .= '<br><br>';



            $output .= '---------------Submission (02)------------------- <br><br>';
            $output .= '<b>Electronically signed and approved by: </b><br>';
            $output .=  $realtor['approved_by'] . '<br><br><br>';

            $output .= 'Type: ' . $realtor['approved_realtor_type'] . '<br>';
            $output .= 'First Name: ' . $realtor['approved_first_name'] . '<br>';
            $output .= 'Last Name: ' . $realtor['approved_last_name'] . '<br>';
            $output .= 'Gender: ' . $realtor['approved_gender'] . '<br>';
            $output .= 'Phone: ' . $realtor['approved_phone'] . '<br>';
            $output .= 'E-mail: ' . $realtor['approved_email'] . '<br>';
//            $output .= 'Total Commission: ' . $realtor['approved_total_commission'] . '<br>';
//            $output .= 'Percentage Commission: ' . $realtor['approved_percentage_commission'] . '<br>';
            $output .= '<br><br>';


            $output .= '---------------Submission (03)------------------- <br><br>';
            $output .= '<b>Electronically signed and rejected by: </b><br>';
            $output .= $realtor['rejected_by'] .  '<br><br><br>';

            $output .= 'Type: ' . $realtor['rejected_realtor_type'] . '<br>';
            $output .= 'First Name: ' . $realtor['rejected_first_name'] . '<br>';
            $output .= 'Last Name: ' . $realtor['rejected_last_name'] . '<br>';
            $output .= 'Gender: ' . $realtor['rejected_gender'] . '<br>';
            $output .= 'Phone: ' . $realtor['rejected_phone'] . '<br>';
            $output .= 'E-mail: ' . $realtor['rejected_email'] . '<br>';
//            $output .= 'Total Commission: ' . $realtor['rejected_total_commission'] . '<br>';
//            $output .= 'Percentage Commission: ' . $realtor['rejected_percentage_commission'] . '<br>';
            $output .= '<br><br>';
        }

        $to_name = auth()->user()->first_name;
        $to_email = auth()->user()->email;
        $subject = '';



//        $data = array('name' => $to_name, "body" =>'File Audit '.$file->file_type. ' - '.$file->file_name.'<br><br><br>' .$output);
//        Mail::send('emails.audit_mail', $data, function($message) use ($to_email ) {
//            $message->to($to_email)->subject('File Audit');
//        });


        echo $output;



//        return redirect()->back();




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(Files::where('id' , $id)->delete()){

            flash()->message('File deleted successfully !');
            return Redirect::to('/');

        }else{

            flash()->error('An Error Occurred');
            return Redirect::to('/');

        }
    }

}
