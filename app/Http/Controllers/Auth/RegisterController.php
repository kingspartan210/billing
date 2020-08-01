<?php

namespace App\Http\Controllers\Auth;

use App\bank;
use App\User;
use App\client;
use App\register;
use App\bank_account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        ]);
    }

    public function show(){
        return view('user.register');
    }

    public function register(){
        
        $register_id = register::create([
            'email' => request()->email,
            'password' => request()->password,
            'type' => 'user'
        ])->id;

        return view('user.about',[
            'register_id' => $register_id
        ]);
    }

    public function insert(){
        $banks = bank::all();
        $bank_accounts = bank_account::all();
        $client_id = client::create([
            'name' => request()->name,
            'address' => request()->address,
            'phone' => request()->phone,
            'register_id' => request()->register_id
        ])->id;

        return view('user.billform',[
            'client_id' => $client_id,
            'banks' => $banks,
            'bank_accounts' => $bank_accounts
        ]);
    }
}
