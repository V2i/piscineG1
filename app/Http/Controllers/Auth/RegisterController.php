<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'NomClient' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:client'],
            'TelClient' => ['string', 'max:255']
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'PrenomClient' => ['required', 'string', 'max:255'],
            'RueClient' => ['string', 'max:255'],
            'DetailRueClient' => ['string', 'max:255'],
            'VilleClient' => ['string', 'max:255'],
            'CPClient' => ['string', 'max:255'],

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
            'NomClient' => $data['NomClient'],
            'email' => $data['email'],
            'TelClient' => $data['TelClient'],
            'password' => Hash::make($data['password']),
            'PrenomClient' => $data['PrenomClient'],
            'RueClient' => $data['RueClient'],
            'DetailRueClient' => $data['DetailRueClient'],
            'VilleClient' => $data['VilleClient'],
            'CPClient' => $data['CPClient'],
        ]);
    }
}
