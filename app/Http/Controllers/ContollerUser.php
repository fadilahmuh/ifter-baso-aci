<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

