<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContollerUser;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/transaksi', [ContollerUser::class, 'transaksi'])->name('transaksi');
    //link->controllerUser(fungsi dalam kutip)
    Route::get('/uangmasuk', [ContollerUser::class, 'masuk'])->name('masuk');
    Route::get('/uangkeluar', [ContollerUser::class, 'keluar'])->name('keluar');
    Route::get('/log', [ContollerUser::class, 'log'])->name('log');
    
    Route::get('/profil',[ContollerUser::class, 'profil'])->name('profil');
    Route::put('/profil/{id}',[ContollerUser::class, 'profil_update'])->name('profilupdate');
    Route::get('/profil/validate',[ContollerUser::class, 'validatepass'])->name('validatepass');
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/dokumentasi', [HomeController::class, 'doc'])->name('doc');