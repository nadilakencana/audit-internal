<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Jakarta\JakpusController;
use App\Http\Controllers\Depok\DepokController;
use App\Http\Controllers\Tangerang\TangerangController;
use App\Http\Controllers\Tangerang\TangkabController;
use App\Http\Controllers\Tangerang\TangselController;
use App\Http\Controllers\Serang\SerangController;
use App\Http\Controllers\Bogor\BogorController;
use App\Http\Controllers\Bogor\KabbogorController;
use App\Http\Controllers\Bekasi\BekasiController;
use App\Http\Controllers\Bekasi\KabbekasiController;
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
use App\Http\Controllers\ExportPDFController;


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
}) ;
 
/*                                              Export PDF                                       */

// Jakarta 
Route::get('/export-pdf-jakpus', [ExportPDFController::class, 'exportpdfjakpus'])->name('export-pdf-jakpus');
Route::get('/export-pdf-jakpus/{id}', [JakpusController::class, 'exportpdfjakpus'])->name('export-pdf-jakpus');
Route::get('/export-pdf-jakut', [ExportPDFController::class, 'exportpdfjakut'])->name('export-pdf-jakut');
Route::get('/export-pdf-jakut/{id}', [JakutController::class, 'exportpdfjakut'])->name('export-pdf-jakut');
Route::get('/export-pdf-jaktim', [ExportPDFController::class, 'exportpdfjaktim'])->name('export-pdf-jaktim');
Route::get('/export-pdf-jaktim/{id}', [JaktimController::class, 'exportpdfjaktim'])->name('export-pdf-jaktim');
Route::get('/export-pdf-jaksel', [ExportPDFController::class, 'exportpdfjaksel'])->name('export-pdf-jaksel');
Route::get('/export-pdf-jaksel/{id}', [JakselController::class, 'exportpdfjaksel'])->name('export-pdf-jaksel');

// Depok 
Route::get('/export-pdf-depok', [ExportPDFController::class, 'exportpdfdepok'])->name('export-pdf-depok');
Route::get('/export-pdf-depok/{id}', [DepokController::class, 'exportpdfdepok'])->name('export-pdf-depok');

// serang 
Route::get('/export-pdf-serang', [ExportPDFController::class, 'exportpdfserang'])->name('export-pdf-serang');
Route::get('/export-pdf-serang/{id}', [SerangController::class, 'exportpdfserang'])->name('export-pdf-serang');

// ponorogo 
Route::get('/export-pdf-ponorogo', [ExportPDFController::class, 'exportpdfponorogo'])->name('export-pdf-ponorogo');
Route::get('/export-pdf-ponorogo/{id}', [PonorogoController::class, 'exportpdfponorogo'])->name('export-pdf-ponorogo');

// surabaya 
Route::get('/export-pdf-surabaya', [ExportPDFController::class, 'exportpdfsurabaya'])->name('export-pdf-surabaya');
Route::get('/export-pdf-surabaya/{id}', [SurabayaController::class, 'exportpdfsurabaya'])->name('export-pdf-surabaya');

// pesawaran 
Route::get('/export-pdf-pesawaran', [ExportPDFController::class, 'exportpdfpesawaran'])->name('export-pdf-pesawaran');
Route::get('/export-pdf-pesawaran/{id}', [PesawaranController::class, 'exportpdfpesawaran'])->name('export-pdf-pesawaran');

// cirebon 
Route::get('/export-pdf-cirebon', [ExportPDFController::class, 'exportpdfcirebon'])->name('export-pdf-cirebon');
Route::get('/export-pdf-cirebon/{id}', [CirebonController::class, 'exportpdfcirebon'])->name('export-pdf-cirebon');

// sukabumi 
Route::get('/export-pdf-sukabumi', [ExportPDFController::class, 'exportpdfsukabumi'])->name('export-pdf-sukabumi');
Route::get('/export-pdf-sukabumi/{id}', [SukabumiController::class, 'exportpdfsukabumi'])->name('export-pdf-sukabumi');

// karawang 
Route::get('/export-pdf-karawang', [ExportPDFController::class, 'exportpdfkarawang'])->name('export-pdf-karawang');
Route::get('/export-pdf-karawang/{id}', [KarawangController::class, 'exportpdfkarawang'])->name('export-pdf-karawang');

// bandung 
Route::get('/export-pdf-bandung', [ExportPDFController::class, 'exportpdfbandung'])->name('export-pdf-bandung');
Route::get('/export-pdf-bandung/{id}', [BandungController::class, 'exportpdfbandung'])->name('export-pdf-bandung');

// sidoarjo 
Route::get('/export-pdf-sidoarjo', [ExportPDFController::class, 'exportpdfsidoarjo'])->name('export-pdf-sidoarjo');
Route::get('/export-pdf-sidoarjo/{id}', [SidoarjoController::class, 'exportpdfsidoarjo'])->name('export-pdf-sidoarjo');

// serang 
Route::get('/export-pdf-tangerang', [ExportPDFController::class, 'exportpdftangerang'])->name('export-pdf-tangerang');
Route::get('/export-pdf-tangerang/{id}', [TangerangController::class, 'exportpdftangerang'])->name('export-pdf-tangerang');
Route::get('/export-pdf-tangkab', [ExportPDFController::class, 'exportpdftangkab'])->name('export-pdf-tangkab');
Route::get('/export-pdf-tangkab/{id}', [TangkabController::class, 'exportpdftangkab'])->name('export-pdf-tangkab');
Route::get('/export-pdf-tangsel', [ExportPDFController::class, 'exportpdftangsel'])->name('export-pdf-tangsel');
Route::get('/export-pdf-tangsel/{id}', [TangselController::class, 'exportpdftangsel'])->name('export-pdf-tangsel');

// bogor 
Route::get('/export-pdf-bogor', [ExportPDFController::class, 'exportpdfbogor'])->name('export-pdf-bogor');
Route::get('/export-pdf-bogor/{id}', [BogorController::class, 'exportpdfbogor'])->name('export-pdf-bogor');
Route::get('/export-pdf-kabbogor', [ExportPDFController::class, 'exportpdfkabbogor'])->name('export-pdf-kabbogor');
Route::get('/export-pdf-kabbogor/{id}', [KabbogorController::class, 'exportpdfkabbogor'])->name('export-pdf-kabbogor');

// bekasi 
Route::get('/export-pdf-bekasi', [ExportPDFController::class, 'exportpdfbekasi'])->name('export-pdf-bekasi');
Route::get('/export-pdf-bekasi/{id}', [BekasiController::class, 'exportpdfbekasi'])->name('export-pdf-bekasi');
Route::get('/export-pdf-kabbekasi', [ExportPDFController::class, 'exportpdfkabbekasi'])->name('export-pdf-kabbekasi');
Route::get('/export-pdf-kabbekasi/{id}', [KabbekasiController::class, 'exportpdfkabbekasi'])->name('export-pdf-kabbekasi');

/*                                             end Export PDF                                       */

/*                                              backend                                       */

Route::get('/dashboard-admin', [FrontController::class, 'dashboard'])->name('dashboard-admin');
// jakpus 
Route::get('/jakpus-admin', [JakpusController::class, 'jakpusadmin'])->name('jakpus-admin') ;
Route::post('/tambahjakpus', [JakpusController::class, 'tambahjakpus'])->name('tambahjakpus');
Route::get('/tampiljakpus/{id}', [JakpusController::class, 'tampiljakpus'])->name('tampiljakpus');
Route::post('/updatejakpus/{id}', [JakpusController::class, 'updatejakpus'])->name('updatejakpus');
Route::get('/hapusjakpus/{id}', [JakpusController::class, 'hapusjakpus'])->name('hapusjakpus');

// jaktim 
Route::get('/jaktim-admin', [JaktimController::class, 'jaktimadmin'])->name('jaktim-admin') ;
Route::post('/tambahjaktim', [JaktimController::class, 'tambahjaktim'])->name('tambahjaktim');
Route::get('/tampiljaktim/{id}', [JaktimController::class, 'tampiljaktim'])->name('tampiljaktim');
Route::post('/updatejaktim/{id}', [JaktimController::class, 'updatejaktim'])->name('updatejaktim');
Route::get('/hapusjaktim/{id}', [JaktimController::class, 'hapusjaktim'])->name('hapusjaktim');

// jakut 
Route::get('/jakut-admin', [JakutController::class, 'jakutadmin'])->name('jakut-admin') ;
Route::post('/tambahjakut', [JakutController::class, 'tambahjakut'])->name('tambahjakut');
Route::get('/tampiljakut/{id}', [JakutController::class, 'tampiljakut'])->name('tampiljakut');
Route::post('/updatejakut/{id}', [JakutController::class, 'updatejakut'])->name('updatejakut');
Route::get('/hapusjakut/{id}', [JakutController::class, 'hapusjakut'])->name('hapusjakut');

// jakut 
Route::get('/jaksel-admin', [JakselController::class, 'jakseladmin'])->name('jaksel-admin') ;
Route::post('/tambahjaksel', [JakselController::class, 'tambahjaksel'])->name('tambahjaksel');
Route::get('/tampiljaksel/{id}', [JakselController::class, 'tampiljaksel'])->name('tampiljaksel');
Route::post('/updatejaksel/{id}', [JakselController::class, 'updatejaksel'])->name('updatejaksel');
Route::get('/hapusjaksel/{id}', [JakselController::class, 'hapusjaksel'])->name('hapusjaksel');

// depok 
Route::get('/depok-admin', [DepokController::class, 'depokadmin'])->name('depok-admin') ;
Route::post('/tambahdepok', [DepokController::class, 'tambahdepok'])->name('tambahdepok');
Route::get('/tampildepok/{id}', [DepokController::class, 'tampildepok'])->name('tampildepok');
Route::post('/updatedepok/{id}', [DepokController::class, 'updatedepok'])->name('updatedepok');
Route::get('/hapusdepok/{id}', [DepokController::class, 'hapusdepok'])->name('hapusdepok');

// serang 
Route::get('/serang-admin', [SerangController::class, 'serangadmin'])->name('serang-admin') ;
Route::post('/tambahserang', [SerangController::class, 'tambahserang'])->name('tambahserang');
Route::get('/tampilserang/{id}', [SerangController::class, 'tampilserang'])->name('tampilserang');
Route::post('/updateserang/{id}', [SerangController::class, 'updateserang'])->name('updateserang');
Route::get('/hapusserang/{id}', [SerangController::class, 'hapusserang'])->name('hapusserang');

// ponorogo 
Route::get('/ponorogo-admin', [PonorogoController::class, 'ponorogoadmin'])->name('ponorogo-admin') ;
Route::post('/tambahponorogo', [PonorogoController::class, 'tambahponorogo'])->name('tambahponorogo');
Route::get('/tampilponorogo/{id}', [PonorogoController::class, 'tampilponorogo'])->name('tampilponorogo');
Route::post('/updateponorogo/{id}', [PonorogoController::class, 'updateponorogo'])->name('updateponorogo');
Route::get('/hapusponorogo/{id}', [PonorogoController::class, 'hapusponorogo'])->name('hapusponorogo');

// sidoarjo 
Route::get('/sidoarjo-admin', [SidoarjoController::class, 'sidoarjoadmin'])->name('sidoarjo-admin') ;
Route::post('/tambahsidoarjo', [SidoarjoController::class, 'tambahsidoarjo'])->name('tambahsidoarjo');
Route::get('/tampilsidoarjo/{id}', [SidoarjoController::class, 'tampilsidoarjo'])->name('tampilsidoarjo');
Route::post('/updatesidoarjo/{id}', [SidoarjoController::class, 'updatesidoarjo'])->name('updatesidoarjo');
Route::get('/hapussidoarjo/{id}', [SidoarjoController::class, 'hapussidoarjo'])->name('hapussidoarjo');

// surabaya 
Route::get('/surabaya-admin', [SurabayaController::class, 'surabayaadmin'])->name('surabaya-admin') ;
Route::post('/tambahsurabaya', [SurabayaController::class, 'tambahsurabaya'])->name('tambahsurabaya');
Route::get('/tampilsurabaya/{id}', [SurabayaController::class, 'tampilsurabaya'])->name('tampilsurabaya');
Route::post('/updatesurabaya/{id}', [SurabayaController::class, 'updatesurabaya'])->name('updatesurabaya');
Route::get('/hapussurabaya/{id}', [SurabayaController::class, 'hapussurabaya'])->name('hapussurabaya');

// pesawaran 
Route::get('/pesawaran-admin', [PesawaranController::class, 'pesawaranadmin'])->name('pesawaran-admin') ;
Route::post('/tambahpesawaran', [PesawaranController::class, 'tambahpesawaran'])->name('tambahpesawaran');
Route::get('/tampilpesawaran/{id}', [PesawaranController::class, 'tampilpesawaran'])->name('tampilpesawaran');
Route::post('/updatepesawaran/{id}', [PesawaranController::class, 'updatepesawaran'])->name('updatepesawaran');
Route::get('/hapuspesawaran/{id}', [PesawaranController::class, 'hapuspesawaran'])->name('hapuspesawaran');

// cirebon 
Route::get('/cirebon-admin', [CirebonController::class, 'cirebonadmin'])->name('cirebon-admin') ;
Route::post('/tambahcirebon', [CirebonController::class, 'tambahcirebon'])->name('tambahcirebon');
Route::get('/tampilcirebon/{id}', [CirebonController::class, 'tampilcirebon'])->name('tampilcirebon');
Route::post('/updatecirebon/{id}', [CirebonController::class, 'updatecirebon'])->name('updatecirebon');
Route::get('/hapuscirebon/{id}', [CirebonController::class, 'hapuscirebon'])->name('hapuscirebon');

// sukabumi 
Route::get('/sukabumi-admin', [SukabumiController::class, 'sukabumiadmin'])->name('sukabumi-admin') ;
Route::post('/tambahsukabumi', [SukabumiController::class, 'tambahsukabumi'])->name('tambahsukabumi');
Route::get('/tampilsukabumi/{id}', [SukabumiController::class, 'tampilsukabumi'])->name('tampilsukabumi');
Route::post('/updatesukabumi/{id}', [SukabumiController::class, 'updatesukabumi'])->name('updatesukabumi');
Route::get('/hapussukabumi/{id}', [SukabumiController::class, 'hapussukabumi'])->name('hapussukabumi');

// karawang 
Route::get('/karawang-admin', [KarawangController::class, 'karawangadmin'])->name('karawang-admin') ;
Route::post('/tambahkarawang', [KarawangController::class, 'tambahkarawang'])->name('tambahkarawang');
Route::get('/tampilkarawang/{id}', [KarawangController::class, 'tampilkarawang'])->name('tampilkarawang');
Route::post('/updatekarawang/{id}', [KarawangController::class, 'updatekarawang'])->name('updatekarawang');
Route::get('/hapuskarawang/{id}', [KarawangController::class, 'hapuskarawang'])->name('hapuskarawang');

// bandung 
Route::get('/bandung-admin', [BandungController::class, 'bandungadmin'])->name('bandung-admin') ;
Route::post('/tambahbandung', [BandungController::class, 'tambahbandung'])->name('tambahbandung');
Route::get('/tampilbandung/{id}', [BandungController::class, 'tampilbandung'])->name('tampilbandung');
Route::post('/updatebandung/{id}', [BandungController::class, 'updatebandung'])->name('updatebandung');
Route::get('/hapusbandung/{id}', [BandungController::class, 'hapusbandung'])->name('hapusbandung');

// tangerang 
Route::get('/tangerang-admin', [TangerangController::class, 'tangerangadmin'])->name('tangerang-admin') ;
Route::post('/tambahtangerang', [TangerangController::class, 'tambahtangerang'])->name('tambahtangerang');
Route::get('/tampiltangerang/{id}', [TangerangController::class, 'tampiltangerang'])->name('tampiltangerang');
Route::post('/updatetangerang/{id}', [TangerangController::class, 'updatetangerang'])->name('updatetangerang');
Route::get('/hapustangerang/{id}', [TangerangController::class, 'hapustangerang'])->name('hapustangerang');

// tangkab 
Route::get('/tangkab-admin', [TangkabController::class, 'tangkabadmin'])->name('tangkab-admin') ;
Route::post('/tambahtangkab', [TangkabController::class, 'tambahtangkab'])->name('tambahtangkab');
Route::get('/tampiltangkab/{id}', [TangkabController::class, 'tampiltangkab'])->name('tampiltangkab');
Route::post('/updatetangkab/{id}', [TangkabController::class, 'updatetangkab'])->name('updatetangkab');
Route::get('/hapustangkab/{id}', [TangkabController::class, 'hapustangkab'])->name('hapustangkab');

// tangsel 
Route::get('/tangsel-admin', [TangselController::class, 'tangseladmin'])->name('tangsel-admin') ;
Route::post('/tambahtangsel', [TangselController::class, 'tambahtangsel'])->name('tambahtangsel');
Route::get('/tampiltangsel/{id}', [TangselController::class, 'tampiltangsel'])->name('tampiltangsel');
Route::post('/updatetangsel/{id}', [TangselController::class, 'updatetangsel'])->name('updatetangsel');
Route::get('/hapustangsel/{id}', [TangselController::class, 'hapustangsel'])->name('hapustangsel');

// bogor 
Route::get('/bogor-admin', [BogorController::class, 'bogoradmin'])->name('bogor-admin') ;
Route::post('/tambahbogor', [BogorController::class, 'tambahbogor'])->name('tambahbogor');
Route::get('/tampilbogor/{id}', [BogorController::class, 'tampilbogor'])->name('tampilbogor');
Route::post('/updatebogor/{id}', [BogorController::class, 'updatebogor'])->name('updatebogor');
Route::get('/hapusbogor/{id}', [BogorController::class, 'hapusbogor'])->name('hapusbogor');

// kabbogor 
Route::get('/kabbogor-admin', [KabbogorController::class, 'kabbogoradmin'])->name('kabbogor-admin') ;
Route::post('/tambahkabbogor', [KabbogorController::class, 'tambahkabbogor'])->name('tambahkabbogor');
Route::get('/tampilkabbogor/{id}', [KabbogorController::class, 'tampilkabbogor'])->name('tampilkabbogor');
Route::post('/updatekabbogor/{id}', [KabbogorController::class, 'updatekabbogor'])->name('updatekabbogor');
Route::get('/hapuskabbogor/{id}', [KabbogorController::class, 'hapuskabbogor'])->name('hapuskabbogor');

// bekasi 
Route::get('/bekasi-admin', [BekasiController::class, 'bekasiadmin'])->name('bekasi-admin') ;
Route::post('/tambahbekasi', [BekasiController::class, 'tambahbekasi'])->name('tambahbekasi');
Route::get('/tampilbekasi/{id}', [BekasiController::class, 'tampilbekasi'])->name('tampilbekasi');
Route::post('/updatebekasi/{id}', [BekasiController::class, 'updatebekasi'])->name('updatebekasi');
Route::get('/hapusbekasi/{id}', [BekasiController::class, 'hapusbekasi'])->name('hapusbekasi');

// kabbekasi 
Route::get('/kabbekasi-admin', [KabbekasiController::class, 'kabbekasiadmin'])->name('kabbekasi-admin') ;
Route::post('/tambahkabbekasi', [KabbekasiController::class, 'tambahkabbekasi'])->name('tambahkabbekasi');
Route::get('/tampilkabbekasi/{id}', [KabbekasiController::class, 'tampilkabbekasi'])->name('tampilkabbekasi');
Route::post('/updatekabbekasi/{id}', [KabbekasiController::class, 'updatekabbekasi'])->name('updatekabbekasi');
Route::get('/hapuskabbekasi/{id}', [KabbekasiController::class, 'hapuskabbekasi'])->name('hapuskabbekasi');

/*                                            emd backend                                       */

/*                                            Frontend                                       */
// dataTable 
Route::get('/datatable', [JakpusController::class, 'index'])->name('datatable') ;
// jakarta 
Route::get('/datatable-jakpus', [JakpusController::class, 'jakpus'])->name('datatable-jakpus') ;
Route::get('/datatable-jakut', [JakpusController::class, 'jakut'])->name('datatable-jakut') ;
Route::get('/datatable-jaktim', [JakpusController::class, 'jaktim'])->name('datatable-jaktim') ;
Route::get('/datatable-jaksel', [JakpusController::class, 'jaksel'])->name('datatable-jaksel') ;

// jakarta 
Route::get('/datatable-kotadepok', [DepokController::class, 'index'])->name('datatable-kotadepok') ;

// Tangerang 
Route::get('/datatable-tangerang', [TangerangController::class, 'index'])->name('datatable-tangerang') ;
Route::get('/datatable-tangsel', [TangerangController::class, 'tangsel'])->name('datatable-tangsel') ;
Route::get('/datatable-kabtangerang', [TangerangController::class, 'kab'])->name('datatable-kabtangerang') ;

// serang 
Route::get('/datatable-serang', [SerangController::class, 'index'])->name('datatable-serang') ;

// bogor 
Route::get('/datatable-bogor', [BogorController::class, 'index'])->name('datatable-bogor') ;
Route::get('/datatable-kabbogor', [BogorController::class, 'kabbogor'])->name('datatable-kabbogor') ;

// bogor 
Route::get('/datatable-bekasi', [BekasiController::class, 'index'])->name('datatable-bekasi') ;
Route::get('/datatable-kab', [BekasiController::class, 'kab'])->name('datatable-kab') ;

// ponorogo 
Route::get('/datatable-ponorogo', [PonorogoController::class, 'index'])->name('datatable-ponorogo') ;

// Sidoarjo 
Route::get('/datatable-sidoarjo', [SidoarjoController::class, 'index'])->name('datatable-sidoarjo') ;

// surabaya 
Route::get('/datatable-surabaya', [SurabayaController::class, 'index'])->name('datatable-surabaya') ;

// pesawaran
Route::get('/datatable-pesawaran', [PesawaranController::class, 'index'])->name('datatable-pesawaran') ;

// cirebon
Route::get('/datatable-cirebon', [CirebonController::class, 'index'])->name('datatable-cirebon') ;

// sukabumi
Route::get('/datatable-sukabumi', [SukabumiController::class, 'index'])->name('datatable-sukabumi') ;

// karawang
Route::get('/datatable-karawang', [KarawangController::class, 'index'])->name('datatable-karawang') ;

// bandung
Route::get('/datatable-bandung', [BandungController::class, 'index'])->name('datatable-bandung');

// frontend
Route::get('/log', [LoginController::class, 'index'])->name('log');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::post('/tambahuser', [LoginController::class, 'tambahuser'])->name('tambahuser');
Route::get('/regist', [LoginController::class, 'register'])->name('regist');

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/home', [FrontController::class, 'home'])->name('home') ;
Route::get('/data', [FrontController::class, 'data'])->name('data') ;
Route::get('/lokasi', [FrontController::class, 'lokasi'])->name('lokasi') ;
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// jakarta 
Route::get('/jakarta', [FrontController::class, 'jakarta'])->name('jakarta') ;
Route::get('/jakpus', function () {
    return view('frontend.jakarta.jakpus');
}) ;
Route::get('/jakut', function () {
    return view('frontend.jakarta.jakut');
}) ;
Route::get('/jaktim', function () {
    return view('frontend.jakarta.jaktim');
}) ;
Route::get('/jaksel', function () {
    return view('frontend.jakarta.jaksel');
}) ;

// bogor 
Route::get('/bogor', function () {
    return view('frontend.bogor.bogor');
}) ;
Route::get('/kotabogor', function () {
    return view('frontend.bogor.kota');
}) ;
Route::get('/kabbogor', function () {
    return view('frontend.bogor.kab');
}) ;

// tangerang 
Route::get('/tangerang', function () {
    return view('frontend.tangerang.tangerang');
}) ;
Route::get('/tangsel', function () {
    return view('frontend.tangerang.tangsel');
}) ;
Route::get('/kabtangerang', function () {
    return view('frontend.tangerang.kab');
}) ;

// depok 
Route::get('/depok', function () {
    return view('frontend.depok.depok');
}) ;

// karawang 
Route::get('/karawang', function () {
    return view('frontend.karawang.karawang');
}) ;

// bandung 
Route::get('/bandung', function () {
    return view('frontend.bandung.bandung');
}) ;

// serang 
Route::get('/serang', function () {
    return view('frontend.serang.serang');
}) ;

// bekasi 
Route::get('/bekasi', function () {
    return view('frontend.bekasi.bekasi');
}) ;
Route::get('/kotabekasi', function () {
    return view('frontend.bekasi.kota');
}) ;
Route::get('/kabbekasi', function () {
    return view('frontend.bekasi.kab');
}) ;

// sukabumi 
Route::get('/sukabumi', function () {
    return view('frontend.sukabumi.sukabumi');
}) ;

// lampung 
Route::get('/lampung', function () {
    return view('frontend.lampung.lampung');
}) ;

// surabaya 
Route::get('/surabaya', function () {
    return view('frontend.surabaya.surabaya');
}) ;

// ponorogo 
Route::get('/ponorogo', function () {
    return view('frontend.ponorogo.ponorogo');
}) ;

// cirebon 
Route::get('/cirebon', function () {
    return view('frontend.cirebon.cirebon');
}) ;

// sidoarjo 
Route::get('/sidoarjo', function () {
    return view('frontend.sidoarjo.sidoarjo');
}) ;

// backend 




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
