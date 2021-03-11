<?php

namespace App\Http\Controllers;

use App\Files;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user){


        




        $user_type = auth()->user()->type;

        if($user_type=="Admin"  ) {

            $files  = Files::select('*')->paginate(50);

        }
        else{

//            $files = Files::where('email'  , auth()->user()->email)
//                  ->paginate(5);

            $files = Files::select('files.*')
                ->join('user_file_types', 'files.id', '=', 'user_file_types.file_id')
                ->where('user_file_types.user_id'  , auth()->user()->email)
                ->select('files.*')
                ->paginate(10);


        }
//
        $files_count  = Files::get()->count();
        $closed_files_count  = Files::where('status', 'Closed')->get()->count();
        $active_files_count  = Files::where('status', 'Active')->get()->count();

        return view('dashboard' , compact('files' , 'files_count' , 'active_files_count' , 'closed_files_count' , 'user_type'));

    }



    public function intro_mail(Request $request){


        $to_name = $request->get('email');
        $to_email = $request->get('email');
        $data = array('name'=>$to_name  ,"body" => "This is an introduction mail from Treadstone Law");

        Mail::send('emails.mail', $data, function($message) use ($to_email) {
            $message->to($to_email)->subject('Introduction Mail');
        });


        return redirect()->back();



    }


}
