<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
// use Jenssegers\Agent\Agent;

class ControllerUser extends Controller
{
    public function __construct()
    {

    }

    public function data_ds(Request $request)
    {
        if ($request->ajax()) {
            $pemasukan = DB::table('transactions')
            ->where('users_id', Auth::user()->id)
            ->where('is_pemasukan', 1)
            ->where('tanggal', today())
            ->where('deleted_at', null)
            ->sum('nominal');

            $pengeluaran = DB::table('transactions')
            ->where('users_id', Auth::user()->id)
            ->where('is_pemasukan', 0)
            ->where('tanggal', today())
            ->where('deleted_at', null)
            ->sum('nominal');

            $data = [$pemasukan,  $pengeluaran];

            if ($pemasukan == 0 && $pengeluaran == 0) {
                return response()->json([
                    false
                ]);  
            }else{
                return response()->json([
                    $data
                ]);           
            }
        }
    }

    public function laporan(Request $request)
    {
        if ($request->filled('awal', 'akhir')) {
            $awal = Carbon::createFromFormat('Y-m-d', $request->awal)->format('Y-m-d');
            $akhir = Carbon::createFromFormat('Y-m-d', $request->akhir)->format('Y-m-d');
            $date = [
                'awal' =>  $awal,
                'akhir' =>  $akhir
            ];
            $rules = array(
                'awal'    => 'date',
                'akhir'      => 'date|after_or_equal:awal',
            );
            $messages = array(
                'akhir.after_or_equal' => 'Tanggal tidak valid!',
            );  

            $validator = Validator::make($date, $rules, $messages);
            
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                } else {
                    $data = DB::table('transactions')
                    ->where('users_id', Auth::user()->id)
                    ->whereBetween('tanggal', [$awal, $akhir])
                    ->where('deleted_at', null)
                    ->orderBy('tanggal', 'asc')
                    ->get();

                    $tanggal = [
                        Carbon::createFromFormat('Y-m-d', $awal)->format('d-m-Y'),
                        Carbon::createFromFormat('Y-m-d', $akhir)->format('d-m-Y')
                    ];

                }
        } else {
            $data = DB::table('transactions')
                ->where('users_id', Auth::user()->id)
                ->where('deleted_at', null)
                ->orderBy('tanggal', 'asc')
                ->get();

                $tanggal = [
                    Carbon::createFromFormat('Y-m-d', $data->first()->tanggal)->format('d-m-Y'),
                    Carbon::createFromFormat('Y-m-d', $data->last()->tanggal)->format('d-m-Y')
                ];
        }

    

    $pemasukan = $data->where('is_pemasukan', 1)->sum('nominal');
    $pengeluaran = $data->where('is_pemasukan', 0)->sum('nominal');

    $total = $pemasukan - $pengeluaran;

        $title = 'Laporan';

        return view('labarugi', compact('title','pemasukan','pengeluaran','total','tanggal'));
    }

    public function transaksi()
    {
        $title = 'Transaksi';
        return view('transaction', compact('title'));
    }

    public function masuk(Request $request)
    {        
        if ($request->filled('awal', 'akhir')) {
            $awal = Carbon::createFromFormat('Y-m-d', $request->awal)->format('Y-m-d');
            $akhir = Carbon::createFromFormat('Y-m-d', $request->akhir)->format('Y-m-d');
            $date = [
                'awal' =>  $awal,
                'akhir' =>  $akhir
            ];
            $rules = array(
                'awal'    => 'date',
                'akhir'      => 'date|after_or_equal:awal',
            );
            $messages = array(
                'akhir.after_or_equal' => 'Tanggal tidak valid!',
            );  

            $validator = Validator::make($date, $rules, $messages);
            
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                } else {
                    $datas = Transaction::where('users_id', Auth::user()->id)
                    ->where('is_pemasukan', 1)
                    ->whereBetween('tanggal', [$awal, $akhir])
                    ->orderByDesc('created_at')->get();  
                }
        } else {
            $datas = Transaction::where('users_id', Auth::user()->id)
            ->where('is_pemasukan', 1)
            ->orderByDesc('created_at')->get();              
        }
        
        $title = 'Uang Masuk';
        return view('keluarmasuk', compact('title','datas'));
    }

    public function keluar(Request $request)
    {
        if ($request->filled('awal', 'akhir')) {
            $awal = Carbon::createFromFormat('Y-m-d', $request->awal)->format('Y-m-d');
            $akhir = Carbon::createFromFormat('Y-m-d', $request->akhir)->format('Y-m-d');
            $date = [
                'awal' =>  $awal,
                'akhir' =>  $akhir
            ];
            $rules = array(
                'awal'    => 'date',
                'akhir'      => 'date|after_or_equal:awal',
            );
            $messages = array(
                'akhir.after_or_equal' => 'Tanggal tidak valid!',
            );  

            $validator = Validator::make($date, $rules, $messages);
            
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                } else {
                    $datas = Transaction::where('users_id', Auth::user()->id)
                    ->where('is_pemasukan', 0)
                    ->whereBetween('tanggal', [$awal, $akhir])
                    ->orderByDesc('created_at')->get();  
                }
        } else {
            $datas = Transaction::where('users_id', Auth::user()->id)
            ->where('is_pemasukan', 0)
            ->orderByDesc('created_at')->get();              
        }
        
        $title = 'Uang Keluar';
        return view('keluarmasuk', compact('title','datas'));
    }

    public function log()
    {
        $logs = Log::where('users_id', Auth::user()->id)
        ->orderByDesc('created_at')
        ->paginate(10);

        $title = 'Log';
        return view('log', compact('title', 'logs'));
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
                            
                Log::create([
                    'keterangan'=> 'Memperbarui informasi akun',
                    'type' => 'U',
                    'users_id' => Auth::user()->id,
                ]);

            } elseif ($request->tipe == 'pass'){
                $old_user->update([
                    'password' => isset($request->password)? bcrypt($request->password): $old_user->password ,
                ]);
                Log::create([
                    'keterangan'=> 'Memperbarui password akun',
                    'type' => 'U',
                    'users_id' => Auth::user()->id,
                ]);
            }

            return redirect()->route('profil')->with('success','Akun berhasil di update!');
        }

        
        
    }
}

