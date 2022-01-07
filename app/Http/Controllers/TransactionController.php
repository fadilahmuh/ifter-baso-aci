<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TransactionController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Transaksi';
        return view('transaction', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        // dd($request->tanggal);  
        $rules = array(
            'tanggal' => 'required|before_or_equal:today',
            'keterangan' => 'required',
            'nominal' => 'required|integer',
            'is_pemasukan' => 'required|boolean',
        );    
        $messages = array(
            'tanggal.required' => 'Tanggal Kosong, Tambahkan tanggal!!',
            'tanggal.before' => 'Masukan tanggal yang valid!!',
            'keterangan.required' => 'Keterangan tidak boleh kosong!!',
            'nominal.required' => 'Nominal tidak boleh kosong!!',
            'nominal.integer' => 'Nominal tidak valid, masukan nominal angka!!',
            'is_pemasukan.required' => 'Pilih jenis transaksi, Pemasukan/Pengeluaran!!',
        );

        $request->all();
        $validator = Validator::make($request->all(), $rules, $messages);        

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        } else {
            $data = Transaction::create([
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
                'nominal' => $request->nominal,
                'is_pemasukan' => $request->is_pemasukan,
                'users_id' => Auth::user()->id,
            ]);

            Log::create([
                'keterangan'=> 'Menambahkan transaksi',
                'type' => 'C',
                'transactions_id' => $data->id,
                'users_id' => Auth::user()->id,
            ]);

            if($request->is_pemasukan == 1)
            {                
                $msg = 'Transaksi Pemasukan berhasil ditambahkan.';
            } else {
                $msg = 'Transaksi Pengeluaran berhasil ditambahkan.';
            };

            return redirect()->route('transaksi')->with('success',$msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaction::findorfail($id)->delete();

        return redirect()->route('masuk')->with('success','Data berhasil dihapus');
    }
}
