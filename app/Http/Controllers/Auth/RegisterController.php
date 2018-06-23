<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Jobs\SendVerificationEmail;
use Carbon\Carbon;

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
        $error_message = [
            'required' => 'The :attribute field is required',
            'contact_no.required' => 'The phone number field is required',
            'contact_no.regex' => 'The phone number format is invalid'
        ];
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthdate' => 'required|date',
            'address' => 'required',
            'contact_no' => ['required','regex:/^(09|\+639)\d{9}$/'],
            'gender' => 'required|in:male,female',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], $error_message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
       $birthdate = Carbon::parse($data['birthdate']);
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'birthdate' => $birthdate,
            'address' => $data['address'],
            'contact_no' => $data['contact_no'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_token' => base64_encode($data['email']),
        ]);
    }

    // Send Verification Email
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));

        dispatch(new SendVerificationEmail($user));

        return redirect()->back()->with('success', 'Success');
    }

     // Verify Email
    public function verify($token){
        $user = User::where('email_token', $token)->first();
        $user->verified = 1;

        if($user->save()){
            return view('email.emailconfirm', ['user' => $user]);
        }
    }
}
