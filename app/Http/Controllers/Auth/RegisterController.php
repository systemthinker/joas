<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * @var string
     */
    protected $redirectTo = '/home';

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
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'telefoonnummer' => 'required|numeric|digits:10',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'telefoonnummer' => $data['telefoonnummer'],
        ]);
    }

    protected function registered(Request $request, $user)
    {
        $path = 'attachmentsWelkomMail/';
        $attachments = [$path.'UwDienstverlengingsdocumentWijzer.pdf',
                        $path.'UwdienstverleningsdocumentHypotheek.pdf',
                        $path.'UwDienstverleningsdocumentRisico.pdf',
                        $path.'UwDienstverleningsdocumentVermogen.pdf',
            ];



        Mail::send('emails.send', ['user' => $user],  function($msg) use ($user,$attachments) {

            $email = $msg->to($user->email)->subject('Beste ' . strtok($user->name, " ") . ' bedankt voor je aanvraag!');

            foreach($attachments as $attachment){
                $email->attach($attachment);
            }



        });



    }



}
