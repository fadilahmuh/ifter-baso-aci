<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContollerUser extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('dashboard', compact('title'));
    }

    public function transaksi()
    {
        $title = 'Transaksi';
        return view('transaction', compact('title'));
    }

    public function regis(Request $request)
    {
        $rules = array(
            'nama_mitra' => ['required', 'string', 'max:255'],
            'nama_pemilik' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:70'],
            'kodepos' => ['required', 'string', 'max:5'],
            'alamat' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        );
        $request->all();
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $newUser = User::create([
            'nama_mitra' => $request->nama_mitra,
            'nama_pemilik' => $request->nama_pemilik,
            'telepon' => $request->telepon,
            'kota' => $request->kota,
            'kodepos' => (int)($request->kodepos),
            'alamat' => $request->alamat,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);
            
            // $newUser -> assignRole($request->role);

            return view('login');
        }
        // dd($request);
    }
}

