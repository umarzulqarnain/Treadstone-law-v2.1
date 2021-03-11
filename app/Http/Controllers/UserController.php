<?php

namespace App\Http\Controllers;

use App\Messages;
use App\TermsUsers;
use App\User;
use App\Files;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;




class UserController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        $users = User::paginate(10);

        //stats
        $all_users_count = User::get()->count();
        $law_clerks_count = User::where('type' , 'LawClerk')->get()->count();
        $mortgage_broker_count = User::where('type' , 'MortgageBroker')->get()->count();
        $signing_officer_count = User::where('type' , 'SigningOfficer')->get()->count();
        $clients_count = User::where('type' , 'Client')->get()->count();
        $admins_count = User::where('type' , 'Admin')->get()->count();

        $user_type = auth()->user()->type ;

        return view('users' , compact('users' , 'user_type' ,'all_users_count' , 'law_clerks_count' ,
                        'mortgage_broker_count' , 'signing_officer_count' , 'clients_count'  , 'admins_count'));
    }

    public function create(Request $request){

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

        ]);

        if(User::updateOrCreate(
            [
                'fake_email' => $request->get('email'),

            ] ,
            [
                'name' =>  ucwords(strtolower($request->get('first_name'))),
                'last_name' => ucwords(strtolower($request->get('last_name'))),
                'type' => $request->get('type'),
                'birth_date' => $request->get('birth_date'),


        ])){

            if($request->ajax()) {

                echo 'SUCCESS';

            } else{

                flash()->message("User created Successfully");
                return redirect()->back();

            }

        }else{


            flash()->message("Failed to Add New User");
            return redirect()->back();
        }

    }

    public function show($id){

        $user = User::where('id', $id)->first();
        // needs to be changed to joins
        $files  = Files::where('email' , $user->email)->paginate(10);

        return view('user_view' , compact('user' , 'files'));

    }

    public function profile(){

        $user = User::where('id', auth()->user()->id)->first();

        return view('profile' , compact('user'));

    }

    public function update(Request $request){

//        $request->validate([
//
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//
//        ]);

        $userid = $request->get('userid');

        if (request()->hasFile('profile_pic') ) {

            $profile_pic = $request->file('profile_pic');
            $strippedName = str_replace(' ', '', $profile_pic->getClientOriginalName());
            $profile_picName = date('Y-m-d-H-i-s') . $strippedName;
            $profile_pic->move(public_path() . '/uploads/profile_pictures/', $profile_picName);

           if(User::where('id', $userid)->update([

               'name' => ucwords(strtolower($request->get('first_name'))) ,
               'last_name' => ucwords(strtolower($request->get('last_name'))) ,
               'address_line_one' => ucwords(strtolower($request->get('address_line_one'))) ,
               'address_line_two' => ucwords(strtolower($request->get('address_line_two')))  ,
               'phone' => $request->input('phone'),
               'province' => ucwords(strtolower( $request->input('province'))),
               'city' => ucwords(strtolower( $request->input('city') ))  ,
               'email' => strtolower($request->input('email')) ,
               'fake_email' => strtolower($request->input('email')) ,
               'postal_code' => strtoupper($request->input('postal_code')) ,
               'birth_date' => $request->input('birth_date'),
                'image' => $profile_picName,

            ])){

               flash()->message('Data Updated Successfully');

               return redirect()->back();

           }else {

               flash()->error('An error occurred while updating your data');

               return redirect()->back();

           }

        }
        else{

            if(User::where('id', $userid)->update([

                'name' => ucwords(strtolower($request->get('first_name'))) ,
                'last_name' => ucwords(strtolower($request->get('last_name'))) ,
                'address_line_one' => ucwords(strtolower($request->get('address_line_one'))) ,
                'address_line_two' => ucwords(strtolower($request->get('address_line_two')))  ,
                'phone' => $request->input('phone'),
                'province' => ucwords(strtolower( $request->input('province'))),
                'city' => ucwords(strtolower( $request->input('city') ))  ,
                'email' => strtolower($request->input('email')) ,
                'fake_email' => strtolower($request->input('email')) ,
                'postal_code' => strtoupper($request->input('postal_code')) ,
                'birth_date' => $request->input('birth_date'),

            ])){

                flash()->message('Data Updated Successfully');

                return redirect()->back();

            }
            else {

                flash()->error('An error occurred while updating your data');

                return redirect()->back();
            }


        }

    }

    public function update_password(Request $request){

        $request->validate([

            'new_password' =>  ['required' , 'string', 'min:6'],
            'confirm_password' => 'required|same:new_password'

        ]);


        if(Hash::check($request->input('current_password') , auth()->user()->password)){

            if(User::where('id', auth()->user()->id)->update([

                'password' => Hash::make($request->input('new_password') ),


            ])){

                flash()->message('Password Changed Successfully');

                return redirect()->back();

            }
            else {

                flash()->error('An error occurred while updating your data');

                return redirect()->back();
            }

        }else {

            flash()->error('Wrong Password');

            return redirect()->back();
        }


    }

    public function update_first_login(){

        if(User::where('id', auth()->user()->id)->update([

            'first_login'=> false ,

        ])){

            echo 'SUCCESS';

        }else{

            return redirect()->back();
        }

    }

    public function agreeToTerms(Request $request){

        if(TermsUsers::create([

            'user_id'=> auth()->user()->id ,
            'file_id'=> $request->get('fileid')
        ])){

            echo 'SUCCESS';

        }else{

            return redirect()->back();
        }

    }

    public function agreeToFirstLoginTerms(){

        if(User::where('id', auth()->user()->id)->update([

            'agreed_to_terms'=> true ,

        ])){

            echo 'SUCCESS';

        }else{

            return redirect()->back();
        }

    }

    public function delete($id){

        if(Messages::where('sender_id', $id)->orWhere('user_id' , $id)->delete()){


            if(User::where('id' , $id)->delete()){

                return redirect()->back();
            }else{

                echo 'Error';
            }
        }else{

            if(User::where('id' , $id)->delete()){

                return redirect()->back();
            }else{

                echo 'Error';
            }
        }

    }


}
