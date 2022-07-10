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
use App\Http\Controllers\WebHimtiController;


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
    return view('frontendhimti.home');
});
Route::get('/index', function () {
    return view('index');
})->middleware('auth');
 
//  barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang')->middleware('auth');
Route::post('/add', [BarangController::class, 'add'])->name('add');
Route::get('/tampildata/{id}', [BarangController::class, 'tampildata'])->name('tampildata');
Route::post('/update/{id}', [BarangController::class, 'update'])->name('update');
Route::get('/delete/{id}', [BarangController::class, 'delete'])->name('delete');

// anggota
Route::get('/dataanggota', [AnggotaController::class, 'index'])->name('dataanggota')->middleware('auth');
Route::post('/tambah', [AnggotaController::class, 'tambah'])->name('tambah');
Route::get('/tampilanggota/{id}', [AnggotaController::class, 'tampilanggota'])->name('tampilanggota');
Route::post('/updateanggota/{id}', [AnggotaController::class, 'updateanggota'])->name('updateanggota');
Route::get('/hapus/{id}', [AnggotaController::class, 'hapus'])->name('hapus');

// angkatan
Route::get('/angkatan', [AngkatanController::class, 'index'])->name('angkatan')->middleware('auth');
Route::post('/plus', [AngkatanController::class, 'plus'])->name('plus');
Route::get('/tampilangkatan/{id}', [AngkatanController::class, 'tampilangkatan'])->name('tampilangkatan');
Route::post('/updateangkatan/{id}', [AngkatanController::class, 'updateangkatan'])->name('updateangkatan');
Route::get('/hapusangkatan/{id}', [AngkatanController::class, 'hapusangkatan'])->name('hapusangkatan');

// kategori
Route::get('/kategori', [CategoryController::class, 'index'])->name('kategori')->middleware('auth');
Route::post('/tambahdata', [CategoryController::class, 'tambahdata'])->name('tambahdata');
Route::get('/tampilkategori/{id}', [CategoryController::class, 'tampilkategori'])->name('tampilkategori');
Route::post('/updatekategori/{id}', [CategoryController::class, 'updatekategori'])->name('updatekategori');
Route::get('/hapuskategori/{id}', [CategoryController::class, 'hapuskategori'])->name('hapuskategori');

// Acara
Route::get('/acara', [AcaraController::class, 'index'])->name('acara')->middleware('auth');
Route::post('/tambahacara', [AcaraController::class, 'tambahacara'])->name('tambahacara');
Route::get('/tampilacara/{id}', [AcaraController::class, 'tampilacara'])->name('tampilacara');
Route::post('/updateacara/{id}', [AcaraController::class, 'updateacara'])->name('updateacara');
Route::get('/hapusacara/{id}', [AcaraController::class, 'hapusacara'])->name('hapusacara');

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel')->middleware('auth');
Route::post('/tambahartikel', [ArtikelController::class, 'tambahartikel'])->name('tambahartikel');
Route::get('/tampilartikel/{id}', [ArtikelController::class, 'tampilartikel'])->name('tampilartikel');
Route::post('/updateartikel/{id}', [ArtikelController::class, 'updateartikel'])->name('updateartikel');
Route::get('/hapusartikel/{id}', [ArtikelController::class, 'hapusartikel'])->name('hapusartikel');

// jadwal Sharing
Route::get('/jadwal', [JadwalSharingController::class, 'index'])->name('jadwal')->middleware('auth');
Route::post('/tambahjadwal', [JadwalSharingController::class, 'tambahjadwal'])->name('tambahjadwal');
Route::get('/tampiljadwal/{id}', [JadwalSharingController::class, 'tampiljadwal'])->name('tampiljadwal');
Route::post('/updatejadwal/{id}', [JadwalSharingController::class, 'updatejadwal'])->name('updatejadwal');
Route::get('/hapusjadwal/{id}', [JadwalSharingController::class, 'hapusjadwal'])->name('hapusjadwal');

// datauser
Route::post('/tambahdtuser', [DatauserController::class, 'tambahdtuser'])->name('tambahdtuser');
Route::get('/tampiluser/{id}', [DatauserController::class, 'tampiluser'])->name('tampiluser');
Route::post('/updateuser/{id}', [DatauserController::class, 'updateuser'])->name('updateuser');

Route::get('/datauser', [LoginController::class, 'user'])->name('datauser')->middleware('auth');
Route::get('/hapususer/{id}', [LoginController::class, 'hapususer'])->name('hapususer');

Route::get('/log', [LoginController::class, 'index'])->name('log');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::post('/tambahuser', [LoginController::class, 'tambahuser'])->name('tambahuser');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// webhimti
Route::get('/home', [WebHimtiController::class, 'index'])->name('home');
Route::get('/about', [WebHimtiController::class, 'about'])->name('about');
Route::get('/sharing', [WebHimtiController::class, 'sharing'])->name('sharing');
Route::get('/tutorial', [WebHimtiController::class, 'tutorial'])->name('tutorial');
Route::get('/dtacara', [WebHimtiController::class, 'dtacara'])->name('dtacara');
Route::get('/detailacara', [WebHimtiController::class, 'detailacara'])->name('detailacara');
Route::get('/klinik', [WebHimtiController::class, 'klinik'])->name('klinik');

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
