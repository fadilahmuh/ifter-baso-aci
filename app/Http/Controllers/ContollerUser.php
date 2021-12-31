<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContollerUser extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        view('welcome', compact('title'));
    }

    public function transaksi()
    {
        // $title = 'Transaksi';
        view('transaction', compact('title'));
    }
}

