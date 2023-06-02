<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\JadwalSharingController;
use App\Http\Controllers\FrontController;


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
 
//  barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::post('/add', [BarangController::class, 'add'])->name('add');
Route::get('/tampildata/{id}', [BarangController::class, 'tampildata'])->name('tampildata');
Route::post('/update/{id}', [BarangController::class, 'update'])->name('update');
Route::get('/delete/{id}', [BarangController::class, 'delete'])->name('delete');

// anggota
Route::get('/dataanggota', [AnggotaController::class, 'index'])->name('dataanggota');
Route::post('/tambah', [AnggotaController::class, 'tambah'])->name('tambah');
Route::get('/tampilanggota/{id}', [AnggotaController::class, 'tampilanggota'])->name('tampilanggota');
Route::post('/updateanggota/{id}', [AnggotaController::class, 'updateanggota'])->name('updateanggota');
Route::get('/hapus/{id}', [AnggotaController::class, 'hapus'])->name('hapus');

// angkatan
Route::get('/angkatan', [AngkatanController::class, 'index'])->name('angkatan');
Route::post('/plus', [AngkatanController::class, 'plus'])->name('plus');
Route::get('/tampilangkatan/{id}', [AngkatanController::class, 'tampilangkatan'])->name('tampilangkatan');
Route::post('/updateangkatan/{id}', [AngkatanController::class, 'updateangkatan'])->name('updateangkatan');
Route::get('/hapusangkatan/{id}', [AngkatanController::class, 'hapusangkatan'])->name('hapusangkatan');

// kategori
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori');
Route::post('/tambahdata', [CategoryController::class, 'tambahdata'])->name('tambahdata');
Route::get('/tampilkategori/{id}', [CategoryController::class, 'tampilkategori'])->name('tampilkategori');
Route::post('/updatekategori/{id}', [CategoryController::class, 'updatekategori'])->name('updatekategori');
Route::get('/hapuskategori/{id}', [CategoryController::class, 'hapuskategori'])->name('hapuskategori');

// Acara
Route::get('/acara', [AcaraController::class, 'index'])->name('acara');
Route::post('/tambahacara', [AcaraController::class, 'tambahacara'])->name('tambahacara');
Route::get('/tampilacara/{id}', [AcaraController::class, 'tampilacara'])->name('tampilacara');
Route::post('/updateacara/{id}', [AcaraController::class, 'updateacara'])->name('updateacara');
Route::get('/hapusacara/{id}', [AcaraController::class, 'hapusacara'])->name('hapusacara');

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::post('/tambahartikel', [ArtikelController::class, 'tambahartikel'])->name('tambahartikel');
Route::get('/tampilartikel/{id}', [ArtikelController::class, 'tampilartikel'])->name('tampilartikel');
Route::post('/updateartikel/{id}', [ArtikelController::class, 'updateartikel'])->name('updateartikel');
Route::get('/hapusartikel/{id}', [ArtikelController::class, 'hapusartikel'])->name('hapusartikel');

// jadwal Sharing
Route::get('/jadwal', [JadwalSharingController::class, 'index'])->name('jadwal');
Route::post('/tambahjadwal', [JadwalSharingController::class, 'tambahjadwal'])->name('tambahjadwal');
Route::get('/tampiljadwal/{id}', [JadwalSharingController::class, 'tampiljadwal'])->name('tampiljadwal');
Route::post('/updatejadwal/{id}', [JadwalSharingController::class, 'updatejadwal'])->name('updatejadwal');
Route::get('/hapusjadwal/{id}', [JadwalSharingController::class, 'hapusjadwal'])->name('hapusjadwal');

// datauser
Route::post('/tambahdtuser', [DatauserController::class, 'tambahdtuser'])->name('tambahdtuser');
Route::get('/tampiluser/{id}', [DatauserController::class, 'tampiluser'])->name('tampiluser');
Route::post('/updateuser/{id}', [DatauserController::class, 'updateuser'])->name('updateuser');

Route::get('/datauser', [LoginController::class, 'user'])->name('datauser');
Route::get('/hapususer/{id}', [LoginController::class, 'hapususer'])->name('hapususer');

Route::get('/log', [LoginController::class, 'index'])->name('log');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::post('/tambahuser', [LoginController::class, 'tambahuser'])->name('tambahuser');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// frontend
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/home', [FrontController::class, 'home'])->name('home')->middleware('auth');
Route::get('/data', [FrontController::class, 'data'])->name('data')->middleware('auth');
Route::get('/lokasi', [FrontController::class, 'lokasi'])->name('lokasi')->middleware('auth');

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


// Route::get('/anggota',[AnggotaController::class, 'input']);
// Route::get('/input1',[AnggotaController::class, 'input1']);
// Route::get('/updateanggota',[AnggotaController::class, 'update']);
// Route::get('/angkatan',[AngkatanController::class, 'input']);
// Route::get('/category',[CategoryController::class, 'category']);
// Route::get('/jadwal',[CategoryController::class, 'jADWAL']);
// Route::get('/acara',[CategoryController::class, 'acara']);
// Route::get('/artikel',[CategoryController::class, 'artikel']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
