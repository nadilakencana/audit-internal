<?php

use Illuminate\Support\Facades\Route;
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
use App\Http\Controllers\Jakarta\JaktimController;
use App\Http\Controllers\Jakarta\JakutController;
use App\Http\Controllers\Jakarta\JakselController;


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
 
/*                                              backend                                       */

Route::get('/dashboard-admin', [FrontController::class, 'dashboard'])->name('dashboard-admin');
// jakpus 
Route::get('/jakpus-admin', [JakpusController::class, 'jakpusadmin'])->name('jakpus-admin')->middleware('auth');
Route::post('/tambahjakpus', [JakpusController::class, 'tambahjakpus'])->name('tambahjakpus');
Route::get('/tampiljakpus/{id}', [JakpusController::class, 'tampiljakpus'])->name('tampiljakpus');
Route::post('/updatejakpus/{id}', [JakpusController::class, 'updatejakpus'])->name('updatejakpus');
Route::get('/hapusjakpus/{id}', [JakpusController::class, 'hapusjakpus'])->name('hapusjakpus');

// jaktim 
Route::get('/jaktim-admin', [JaktimController::class, 'jaktimadmin'])->name('jaktim-admin')->middleware('auth');
Route::post('/tambahjaktim', [JaktimController::class, 'tambahjaktim'])->name('tambahjaktim');
Route::get('/tampiljaktim/{id}', [JaktimController::class, 'tampiljaktim'])->name('tampiljaktim');
Route::post('/updatejaktim/{id}', [JaktimController::class, 'updatejaktim'])->name('updatejaktim');
Route::get('/hapusjaktim/{id}', [JaktimController::class, 'hapusjaktim'])->name('hapusjaktim');

// jakut 
Route::get('/jakut-admin', [JakutController::class, 'jakutadmin'])->name('jakut-admin')->middleware('auth');
Route::post('/tambahjakut', [JakutController::class, 'tambahjakut'])->name('tambahjakut');
Route::get('/tampiljakut/{id}', [JakutController::class, 'tampiljakut'])->name('tampiljakut');
Route::post('/updatejakut/{id}', [JakutController::class, 'updatejakut'])->name('updatejakut');
Route::get('/hapusjakut/{id}', [JakutController::class, 'hapusjakut'])->name('hapusjakut');

// jakut 
Route::get('/jaksel-admin', [JakselController::class, 'jakseladmin'])->name('jaksel-admin')->middleware('auth');
Route::post('/tambahjaksel', [JakselController::class, 'tambahjaksel'])->name('tambahjaksel');
Route::get('/tampiljaksel/{id}', [JakselController::class, 'tampiljaksel'])->name('tampiljaksel');
Route::post('/updatejaksel/{id}', [JakselController::class, 'updatejaksel'])->name('updatejaksel');
Route::get('/hapusjaksel/{id}', [JakselController::class, 'hapusjaksel'])->name('hapusjaksel');

// depok 
Route::get('/depok-admin', [DepokController::class, 'depokadmin'])->name('depok-admin')->middleware('auth');
Route::post('/tambahdepok', [DepokController::class, 'tambahdepok'])->name('tambahdepok');
Route::get('/tampildepok/{id}', [DepokController::class, 'tampildepok'])->name('tampildepok');
Route::post('/updatedepok/{id}', [DepokController::class, 'updatedepok'])->name('updatedepok');
Route::get('/hapusdepok/{id}', [DepokController::class, 'hapusdepok'])->name('hapusdepok');

// serang 
Route::get('/serang-admin', [SerangController::class, 'serangadmin'])->name('serang-admin')->middleware('auth');
Route::post('/tambahserang', [SerangController::class, 'tambahserang'])->name('tambahserang');
Route::get('/tampilserang/{id}', [SerangController::class, 'tampilserang'])->name('tampilserang');
Route::post('/updateserang/{id}', [SerangController::class, 'updateserang'])->name('updateserang');
Route::get('/hapusserang/{id}', [SerangController::class, 'hapusserang'])->name('hapusserang');

// ponorogo 
Route::get('/ponorogo-admin', [PonorogoController::class, 'ponorogoadmin'])->name('ponorogo-admin')->middleware('auth');
Route::post('/tambahponorogo', [PonorogoController::class, 'tambahponorogo'])->name('tambahponorogo');
Route::get('/tampilponorogo/{id}', [PonorogoController::class, 'tampilponorogo'])->name('tampilponorogo');
Route::post('/updateponorogo/{id}', [PonorogoController::class, 'updateponorogo'])->name('updateponorogo');
Route::get('/hapusponorogo/{id}', [PonorogoController::class, 'hapusponorogo'])->name('hapusponorogo');

// sidoarjo 
Route::get('/sidoarjo-admin', [SidoarjoController::class, 'sidoarjoadmin'])->name('sidoarjo-admin')->middleware('auth');
Route::post('/tambahsidoarjo', [SidoarjoController::class, 'tambahsidoarjo'])->name('tambahsidoarjo');
Route::get('/tampilsidoarjo/{id}', [SidoarjoController::class, 'tampilsidoarjo'])->name('tampilsidoarjo');
Route::post('/updatesidoarjo/{id}', [SidoarjoController::class, 'updatesidoarjo'])->name('updatesidoarjo');
Route::get('/hapussidoarjo/{id}', [SidoarjoController::class, 'hapussidoarjo'])->name('hapussidoarjo');

// surabaya 
Route::get('/surabaya-admin', [SurabayaController::class, 'surabayaadmin'])->name('surabaya-admin')->middleware('auth');
Route::post('/tambahsurabaya', [SurabayaController::class, 'tambahsurabaya'])->name('tambahsurabaya');
Route::get('/tampilsurabaya/{id}', [SurabayaController::class, 'tampilsurabaya'])->name('tampilsurabaya');
Route::post('/updatesurabaya/{id}', [SurabayaController::class, 'updatesurabaya'])->name('updatesurabaya');
Route::get('/hapussurabaya/{id}', [SurabayaController::class, 'hapussurabaya'])->name('hapussurabaya');

// pesawaran 
Route::get('/pesawaran-admin', [PesawaranController::class, 'pesawaranadmin'])->name('pesawaran-admin')->middleware('auth');
Route::post('/tambahpesawaran', [PesawaranController::class, 'tambahpesawaran'])->name('tambahpesawaran');
Route::get('/tampilpesawaran/{id}', [PesawaranController::class, 'tampilpesawaran'])->name('tampilpesawaran');
Route::post('/updatepesawaran/{id}', [PesawaranController::class, 'updatepesawaran'])->name('updatepesawaran');
Route::get('/hapuspesawaran/{id}', [PesawaranController::class, 'hapuspesawaran'])->name('hapuspesawaran');

// cirebon 
Route::get('/cirebon-admin', [CirebonController::class, 'cirebonadmin'])->name('cirebon-admin')->middleware('auth');
Route::post('/tambahcirebon', [CirebonController::class, 'tambahcirebon'])->name('tambahcirebon');
Route::get('/tampilcirebon/{id}', [CirebonController::class, 'tampilcirebon'])->name('tampilcirebon');
Route::post('/updatecirebon/{id}', [CirebonController::class, 'updatecirebon'])->name('updatecirebon');
Route::get('/hapuscirebon/{id}', [CirebonController::class, 'hapuscirebon'])->name('hapuscirebon');

// sukabumi 
Route::get('/sukabumi-admin', [SukabumiController::class, 'sukabumiadmin'])->name('sukabumi-admin')->middleware('auth');
Route::post('/tambahsukabumi', [SukabumiController::class, 'tambahsukabumi'])->name('tambahsukabumi');
Route::get('/tampilsukabumi/{id}', [SukabumiController::class, 'tampilsukabumi'])->name('tampilsukabumi');
Route::post('/updatesukabumi/{id}', [SukabumiController::class, 'updatesukabumi'])->name('updatesukabumi');
Route::get('/hapussukabumi/{id}', [SukabumiController::class, 'hapussukabumi'])->name('hapussukabumi');

// karawang 
Route::get('/karawang-admin', [KarawangController::class, 'karawangadmin'])->name('karawang-admin')->middleware('auth');
Route::post('/tambahkarawang', [KarawangController::class, 'tambahkarawang'])->name('tambahkarawang');
Route::get('/tampilkarawang/{id}', [KarawangController::class, 'tampilkarawang'])->name('tampilkarawang');
Route::post('/updatekarawang/{id}', [KarawangController::class, 'updatekarawang'])->name('updatekarawang');
Route::get('/hapuskarawang/{id}', [KarawangController::class, 'hapuskarawang'])->name('hapuskarawang');

// bandung 
Route::get('/bandung-admin', [BandungController::class, 'bandungadmin'])->name('bandung-admin')->middleware('auth');
Route::post('/tambahbandung', [BandungController::class, 'tambahbandung'])->name('tambahbandung');
Route::get('/tampilbandung/{id}', [BandungController::class, 'tampilbandung'])->name('tampilbandung');
Route::post('/updatebandung/{id}', [BandungController::class, 'updatebandung'])->name('updatebandung');
Route::get('/hapusbandung/{id}', [BandungController::class, 'hapusbandung'])->name('hapusbandung');

/*                                            emd backend                                       */

/*                                            Frontend                                       */
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
