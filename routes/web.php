<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\TransactionController;

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

// Route::get('/dokumentasi', [HomeController::class, 'doc'])->name('doc');

Route::middleware('auth')->group(function(){
    //link->controllerUser(fungsi dalam kutip)
    Route::get('/uangmasuk', [ControllerUser::class, 'masuk'])->name('masuk');
    Route::get('/uangmasuk/filter', [ControllerUser::class, 'masuk'])->name('masuk2');         
    Route::get('/uangkeluar', [ControllerUser::class, 'keluar'])->name('keluar');
    Route::get('/uangkeluar/filter', [ControllerUser::class, 'keluar'])->name('keluar2');
    Route::get('/log', [ControllerUser::class, 'log'])->name('log');         
    Route::get('/laporan', [ControllerUser::class, 'laporan'])->name('laporan');         
    Route::get('/laporan/filter', [ControllerUser::class, 'laporan'])->name('laporan2');         
    Route::get('/profil',[ControllerUser::class, 'profil'])->name('profil');
    Route::put('/profil/{id}',[ControllerUser::class, 'profil_update'])->name('profilupdate');
    Route::get('/profil/validate',[ControllerUser::class, 'validatepass'])->name('validatepass');
    
    Route::resource('transaksi', TransactionController::class)->names([
        'index' => 'transaksi',
    ]);

    Route::get('/about', [ControllerUser::class, 'about'])->name('about');

    //JSON
    Route::get('/data-ds', [ControllerUser::class, 'data_ds'])->name('data-ds');
});

