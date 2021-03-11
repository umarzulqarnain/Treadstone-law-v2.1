<?php

namespace App\Http\Controllers\Auth;

use App\Files;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\UserFileTypes;
use Faker\Provider\File;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     *  @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

        ]);
    }


    public function createFake(Request $request){


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


            ])){


            if($request->ajax()) {
//
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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        $file = Files::where('token',$data['token'])->first();

        $user = User::updateOrCreate(
            ['fake_email' => $data['email']],
            [
                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'fake_email' => $data['email'],
                'type' => $data['type'],
                'phone' => $data['phone_number'],
                'address_line_one' => $data['address_line_one'],
                'address_line_two' => $data['address_line_two'],
                'city' => $data['city'],
                'postal_code' => $data['postal_code'],
                'province' => $data['province'],
                'first_login' => true,
                'agreed_to_terms' => false,
                'transactions' => $data['transactions'],
                'password' => Hash::make($data['password']),
            ]);

//        if($file !=null){
//
//            UserFileTypes::create(['user_id'=>$user->id , 'file_id'=> $file->id]);
//
//            Files::where('token' , $data['token'])->update(['token' =>'']);
//
//        }

        return $user;

    }


    // old func , do not delete
    public function register_client($token){

        $file = Files::where('token',$token)->first();
        if(isset($file)){
//            if($file->token == $token){
                return view('auth.register');
//            }else if($file->token == null){
//                echo 'This link has been expired already !';
//            }else{
//                echo 'You are not allowed to register to a different file other than yours !';
//            }
        }else{
            echo 'Sorry , That file does not exist or the link might be broken or expired!';
        }

    }// old func
}
