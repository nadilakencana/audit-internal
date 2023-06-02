<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Jakarta\JakpusController;
use App\Http\Controllers\Depok\DepokController;
use App\Http\Controllers\Tangerang\TangerangController;
use App\Http\Controllers\Serang\SerangController;
use App\Http\Controllers\Bogor\BogorController;
use App\Http\Controllers\Bekasi\BekasiController;
use App\Http\Controllers\Ponorogo\PonorogoController;
use App\Http\Controllers\Sidoarjo\SidoarjoController;
use App\Http\Controllers\Surabaya\SurabayaController;
use App\Http\Controllers\Pesawaran\PesawaranController;
use App\Http\Controllers\Cirebon\CirebonController;
use App\Http\Controllers\Sukabumi\SukabumiController;
use App\Http\Controllers\Karawang\KarawangController;
use App\Http\Controllers\Bandung\BandungController;


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
//     return view('frontendhimti.index');
// });
Route::get('/index', function () {
    return view('index');
})->middleware('auth');
 
// Acara
// Route::get('/acara', [AcaraController::class, 'index'])->name('acara');
// Route::post('/tambahacara', [AcaraController::class, 'tambahacara'])->name('tambahacara');
// Route::get('/tampilacara/{id}', [AcaraController::class, 'tampilacara'])->name('tampilacara');
// Route::post('/updateacara/{id}', [AcaraController::class, 'updateacara'])->name('updateacara');
// Route::get('/hapusacara/{id}', [AcaraController::class, 'hapusacara'])->name('hapusacara');

Route::get('/dashboard-admin', [FrontController::class, 'dashboard'])->name('dashboard-admin');
Route::get('/jakpus-admin', [JakpusController::class, 'jakpusadmin'])->name('jakpus-admin');

// dataTable 
Route::get('/datatable', [JakpusController::class, 'index'])->name('datatable')->middleware('auth');
// jakarta 
Route::get('/datatable-jakpus', [JakpusController::class, 'jakpus'])->name('datatable-jakpus')->middleware('auth');
Route::get('/datatable-jakut', [JakpusController::class, 'jakut'])->name('datatable-jakut')->middleware('auth');
Route::get('/datatable-jaktim', [JakpusController::class, 'jaktim'])->name('datatable-jaktim')->middleware('auth');
Route::get('/datatable-jaksel', [JakpusController::class, 'jaksel'])->name('datatable-jaksel')->middleware('auth');

// jakarta 
Route::get('/datatable-kotadepok', [DepokController::class, 'index'])->name('datatable-kotadepok')->middleware('auth');

// Tangerang 
Route::get('/datatable-tangerang', [TangerangController::class, 'index'])->name('datatable-tangerang')->middleware('auth');
Route::get('/datatable-tangsel', [TangerangController::class, 'tangsel'])->name('datatable-tangsel')->middleware('auth');
Route::get('/datatable-kabtangerang', [TangerangController::class, 'kab'])->name('datatable-kabtangerang')->middleware('auth');

// serang 
Route::get('/datatable-serang', [SerangController::class, 'index'])->name('datatable-serang')->middleware('auth');

// bogor 
Route::get('/datatable-bogor', [BogorController::class, 'index'])->name('datatable-bogor')->middleware('auth');
Route::get('/datatable-kab', [BogorController::class, 'kab'])->name('datatable-kab')->middleware('auth');

// bogor 
Route::get('/datatable-bekasi', [BekasiController::class, 'index'])->name('datatable-bekasi')->middleware('auth');
Route::get('/datatable-kab', [BekasiController::class, 'kab'])->name('datatable-kab')->middleware('auth');

// ponorogo 
Route::get('/datatable-ponorogo', [PonorogoController::class, 'index'])->name('datatable-ponorogo')->middleware('auth');

// Sidoarjo 
Route::get('/datatable-sidoarjo', [SidoarjoController::class, 'index'])->name('datatable-sidoarjo')->middleware('auth');

// surabaya 
Route::get('/datatable-surabaya', [SurabayaController::class, 'index'])->name('datatable-surabaya')->middleware('auth');

// pesawaran
Route::get('/datatable-pesawaran', [PesawaranController::class, 'index'])->name('datatable-pesawaran')->middleware('auth');

// cirebon
Route::get('/datatable-cirebon', [CirebonController::class, 'index'])->name('datatable-cirebon')->middleware('auth');

// sukabumi
Route::get('/datatable-sukabumi', [SukabumiController::class, 'index'])->name('datatable-sukabumi')->middleware('auth');

// karawang
Route::get('/datatable-karawang', [KarawangController::class, 'index'])->name('datatable-karawang')->middleware('auth');

// bandung
Route::get('/datatable-bandung', [BandungController::class, 'index'])->name('datatable-bandung')->middleware('auth');

// frontend
Route::get('/log', [LoginController::class, 'index'])->name('log');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::post('/tambahuser', [LoginController::class, 'tambahuser'])->name('tambahuser');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/home', [FrontController::class, 'home'])->name('home')->middleware('auth');
Route::get('/data', [FrontController::class, 'data'])->name('data')->middleware('auth');
Route::get('/lokasi', [FrontController::class, 'lokasi'])->name('lokasi')->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// jakarta 
Route::get('/jakarta', [FrontController::class, 'jakarta'])->name('jakarta')->middleware('auth');
Route::get('/jakpus', function () {
    return view('frontend.jakarta.jakpus');
})->middleware('auth');
Route::get('/jakut', function () {
    return view('frontend.jakarta.jakut');
})->middleware('auth');
Route::get('/jaktim', function () {
    return view('frontend.jakarta.jaktim');
})->middleware('auth');
Route::get('/jaksel', function () {
    return view('frontend.jakarta.jaksel');
})->middleware('auth');

// bogor 
Route::get('/bogor', function () {
    return view('frontend.bogor.bogor');
})->middleware('auth');
Route::get('/kotabogor', function () {
    return view('frontend.bogor.kota');
})->middleware('auth');
Route::get('/kabbogor', function () {
    return view('frontend.bogor.kab');
})->middleware('auth');

// tangerang 
Route::get('/tangerang', function () {
    return view('frontend.tangerang.tangerang');
})->middleware('auth');
Route::get('/tangsel', function () {
    return view('frontend.tangerang.tangsel');
})->middleware('auth');
Route::get('/kabtangerang', function () {
    return view('frontend.tangerang.kab');
})->middleware('auth');

// depok 
Route::get('/depok', function () {
    return view('frontend.depok.depok');
})->middleware('auth');

// karawang 
Route::get('/karawang', function () {
    return view('frontend.karawang.karawang');
})->middleware('auth');

// bandung 
Route::get('/bandung', function () {
    return view('frontend.bandung.bandung');
})->middleware('auth');

// serang 
Route::get('/serang', function () {
    return view('frontend.serang.serang');
})->middleware('auth');

// bekasi 
Route::get('/bekasi', function () {
    return view('frontend.bekasi.bekasi');
})->middleware('auth');
Route::get('/kotabekasi', function () {
    return view('frontend.bekasi.kota');
})->middleware('auth');
Route::get('/kabbekasi', function () {
    return view('frontend.bekasi.kab');
})->middleware('auth');

// sukabumi 
Route::get('/sukabumi', function () {
    return view('frontend.sukabumi.sukabumi');
})->middleware('auth');

// lampung 
Route::get('/lampung', function () {
    return view('frontend.lampung.lampung');
})->middleware('auth');

// surabaya 
Route::get('/surabaya', function () {
    return view('frontend.surabaya.surabaya');
})->middleware('auth');

// ponorogo 
Route::get('/ponorogo', function () {
    return view('frontend.ponorogo.ponorogo');
})->middleware('auth');

// sidoarjo 
Route::get('/sidoarjo', function () {
    return view('frontend.sidoarjo.sidoarjo');
})->middleware('auth');

// backend 




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
