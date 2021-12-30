<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
            'nama_pemilik' => ['required', 'string', 'max:255'],
            'nama_mitra' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:15'],
            'kota' => ['required', 'string', 'max:50'],
            'kodepos' => ['required', 'string', 'max:5'],
            'alamat' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        dd($data);
        return User::create([
            'nama_pemilik' => $data['nama_pemilik'],
            'nama_mitra' => $data['nama_mitra'],
            'kota' => $data['kota'],
            'telepon' => $data['telepon'],
            'kodepos' => $data['kodepos'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}