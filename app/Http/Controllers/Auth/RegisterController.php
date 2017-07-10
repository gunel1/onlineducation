<?php

namespace App\Http\Controllers\Auth;

use App\Pupil;
use App\Teacher;
use App\User;
use App\Parentt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;

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
    protected $redirectTo = '/';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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

            $user = User::create([
                'name' => $data['name'],
                'surname' => $data['surname'],
                'contact' => $data['contact'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role_id' => $data['category'],

            ]);

        if($data['category'] == 1)

          Teacher::create([
                'user_id'=>$user->id

            ]);
        if($data['category'] == 2)

            Pupil::create([
                'user_id'=>$user->id

            ]);
        if($data['category'] == 3)

            Parentt::create([
                'user_id'=>$user->id

            ]);

            return $user;


    }

    protected function redirectTo(){

        if(Auth::user()->role->name == 'pupil'  || Auth::user()->role->name == 'parent') {
            return '/';
        }
        elseif(Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'teacher' ){
            return '/admin';
        }
    }
}
