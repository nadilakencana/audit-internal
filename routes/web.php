<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LHPController;
use App\Http\Controllers\Verifikasi_LHPSController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('login');
}) ;

Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::post('/tambahuser', [LoginController::class, 'tambahuser'])->name('tambahuser');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    
    Route::get('verif-lhps', [Verifikasi_LHPSController::class, 'verif'])->name('verif');
    Route::put('/verifikasi/{id}', [Verifikasi_LHPSController::class, 'update'])->name('verifikasi.update');
    Route::put('/batalverifikasi/{id}', [Verifikasi_LHPSController::class, 'batal'])->name('verifikasi.batal');
    
    Route::get('download-file/{filename}', [LHPController::class, 'downloadFile'])->name('download.file');
    
    Route::get('akun', [LoginController::class, 'akun'])->name('akun');
    Route::get('akun/create', [LoginController::class, 'create'])->name('akun.create');
    Route::post('akun/store', [LoginController::class, 'store'])->name('akun.store');
    Route::get('akun/edit/{id}', [LoginController::class, 'edit'])->name('akun.edit');
    Route::post('akun/update/{id}', [LoginController::class, 'update'])->name('akun.update');
    Route::get('akun/destroy/{id}', [LoginController::class, 'destroy'])->name('destroy');

    Route::get('datalhp', [LHPController::class, 'index'])->name('datalhp');
    Route::get('LHP_FIX', [LHPController::class, 'lhp'])->name('lhp');
    Route::get('datalhp/create', [LHPController::class, 'create'])->name('lhp.create');
    Route::post('datalhp/store', [LHPController::class, 'store'])->name('lhp.store');
    Route::get('lhp/edit/{id}', [LHPController::class, 'edit'])->name('lhp.edit');
    Route::post('lhp/update/{id}', [LHPController::class, 'update'])->name('lhp.update');
    Route::get('lhp/destroy/{id}', [LHPController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';
