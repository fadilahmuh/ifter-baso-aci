<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContollerUser extends Controller
{
    public function transaksi()
    {
        $title = 'Transaksi';
        return view('transaction', compact('title'));
    }

    public function masuk()
    {
       
    }

    public function keluar()
    {
    }

    public function log()
    {
        $title = 'Log';
        return view('log', compact('title'));
    }

    public function profil()    
    {
        $title = 'Profil';
        return view('profil', compact('title'));
    }

    public function validatepass(Request $request)
    {
        if(Hash::check( $request->password, Auth::user()->password)){
            $status = 'Accepted';
        } else {
            $status = 'Refused';
        }

        return response()->json([
            'result' => $status,
        ]);
    }

    public function profil_update(Request $request, $id)
    {
        $old_user = User::findorfail($id);
        
        if ($request->tipe == 'umum'){
            $rules = array(
                'nama_mitra' => ['required', 'string', 'max:255'],
                'nama_pemilik' => ['required', 'string', 'max:255'],
                'telepon' => ['required', 'string', 'max:17'],
                'kota' => ['required', 'string', 'max:70'],
                'kodepos' => ['required', 'string', 'max:5'],
                'alamat' => ['required', 'string'],
            );  

            $messages = array(
                'nama_mitra.required' => 'Nama Mitra tidak boleh kosong!',
                'nama_pemilik.required' => 'Nama Mitra tidak boleh kosong!',
                'telepon.required' => 'Nomor Telepon tidak boleh kosong!',
                'telepon.max' => 'Nomor Telepon masksimal 17 angka!',
                'kota.required' => 'Kota tidak boleh kosong!',
                'kodepos.required' => 'Kode Pos tidak boleh kosong!',
                'kodepos.max' => 'Kode Pos masksimal 5 angka!',
                'alamat.required' => 'Alamat tidak boleh kosong!',
            );            
        } elseif ($request->tipe == 'pass'){
            $rules = array(
                'password' => 'confirmed',
            );
            $messages = array(
                'password.confirmed' => 'Password tidak sama!',
            );     
        }

        $request->all();
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            if ($request->tipe == 'umum'){
                $old_user->update([                    
                    'nama_mitra' => isset($request->nama_mitra)? $request->nama_mitra : $old_user->nama_mitra,
                    'nama_pemilik' => isset($request->nama_pemilik)? $request->nama_pemilik : $old_user->nama_pemilik,
                    'kota' => isset($request->kota)? $request->kota : $old_user->kota,
                    'kodepos' => isset($request->kodepos)? (int)$request->kodepos : $old_user->kodepos,
                    'alamat' => isset($request->alamat)? $request->alamat : $old_user->alamat,
                    'telepon' => isset($request->telepon)? $request->telepon : $old_user->telepon,
                ]);
            } elseif ($request->tipe == 'pass'){
                $old_user->update([
                    'password' => isset($request->password)? bcrypt($request->password): $old_user->password ,
                ]);
            }
            

            return redirect()->route('profil')->with('success','Akun berhasil di update!');
        }

        
        
    }
}

