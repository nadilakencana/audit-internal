<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jakpus;
use App\Models\Jaktim;
use App\Models\Jakut;
use App\Models\Jaksel;
use App\Models\Depok;
use App\Models\Serang;
use App\Models\Tangerang;
use App\Models\Tangkab;
use App\Models\Tangsel;
use App\Models\Bogor;
use App\Models\Kabbogor;
use App\Models\Bekasi;
use App\Models\Kabbekasi;
use App\Models\Ponorogo;
use App\Models\Sidoarjo;
use App\Models\Surabaya;
use App\Models\Pesawaran;
use App\Models\Cirebon;
use App\Models\Sukabumi;
use App\Models\Karawang;
use App\Models\Bandung;

use PDF;

class ExportPDFController extends Controller
{
    // jakarta 
    public function exportpdfjakpus(Request $request)
    {
        $jakpus = Jakpus::all();

        view()->share('jakpus', $jakpus);
        $pdf = PDF::loadview('export.jakarta.jakpus');
        return $pdf->download('Hasil export jakpus.pdf');
    }
    public function exportpdfjakut(Request $request)
    {
        $jakut = Jakut::all();

        view()->share('jakut', $jakut);
        $pdf = PDF::loadview('export.jakarta.jakut');
        return $pdf->download('Hasil export jakut.pdf');
    }
    public function exportpdfjaktim(Request $request)
    {
        $jaktim = Jaktim::all();

        view()->share('jaktim', $jaktim);
        $pdf = PDF::loadview('export.jakarta.jaktim');
        return $pdf->download('Hasil export jaktim.pdf');
    }
    public function exportpdfjaksel(Request $request)
    {
        $jaksel = Jaksel::all();
        
        view()->share('jaksel', $jaksel);
        $pdf = PDF::loadview('export.jakarta.jaksel');
        return $pdf->download('Hasil export jaksel.pdf');
    }
    
    // Depok 
    public function exportpdfdepok(Request $request)
    {
        $depok = Depok::all();

        view()->share('depok', $depok);
        $pdf = PDF::loadview('export.depok.depok');
        return $pdf->download('Hasil export depok.pdf');
    }

    // serang 
    public function exportpdfserang(Request $request)
    {
        $serang = Serang::all();

        view()->share('serang', $serang);
        $pdf = PDF::loadview('export.serang.serang');
        return $pdf->download('Hasil export serang.pdf');
    }

    // tangerang 
    public function exportpdftangerang(Request $request)
    {
        $tangerang = Tangerang::all();

        view()->share('tangerang', $tangerang);
        $pdf = PDF::loadview('export.tangerang.tangerang');
        return $pdf->download('Hasil export tangerang.pdf');
    }
    public function exportpdftangkab(Request $request)
    {
        $tangkab = Tangkab::all();

        view()->share('tangkab', $tangkab);
        $pdf = PDF::loadview('export.tangerang.tangkab');
        return $pdf->download('Hasil export tangkab.pdf');
    }
    public function exportpdftangsel(Request $request)
    {
        $tangsel = Tangsel::all();

        view()->share('tangsel', $tangsel);
        $pdf = PDF::loadview('export.tangerang.tangsel');
        return $pdf->download('Hasil export tangsel.pdf');
    }
    
    // Bogor
    public function exportpdfbogor(Request $request)
    {
        $bogor = Bogor::all();

        view()->share('bogor', $bogor);
        $pdf = PDF::loadview('export.bogor.bogor');
        return $pdf->download('Hasil export bogor.pdf');
    }
    public function exportpdfkabbogor(Request $request)
    {
        $kabbogor = Kabbogor::all();

        view()->share('kabbogor', $kabbogor);
        $pdf = PDF::loadview('export.bogor.kabbogor');
        return $pdf->download('Hasil export kabbogor.pdf');
    }
    
    // bekasi
    public function exportpdfbekasi(Request $request)
    {
        $bekasi = Bekasi::all();

        view()->share('bekasi', $bekasi);
        $pdf = PDF::loadview('export.bekasi.bekasi');
        return $pdf->download('Hasil export bekasi.pdf');
    }
    public function exportpdfkabbekasi(Request $request)
    {
        $kabbekasi = Kabbekasi::all();
        
        view()->share('kabbekasi', $kabbekasi);
        $pdf = PDF::loadview('export.bekasi.kabbekasi');
        return $pdf->download('Hasil export kabbekasi.pdf');
    }
    
    // ponorogo
    public function exportpdfponorogo(Request $request)
    {
        $ponorogo = Ponorogo::all();

        view()->share('ponorogo', $ponorogo);
        $pdf = PDF::loadview('export.ponorogo.ponorogo');
        return $pdf->download('Hasil export ponorogo.pdf');
    }
    
    // sidoarjo
    public function exportpdfsidoarjo(Request $request)
    {
        $sidoarjo = Sidoarjo::all();

        view()->share('sidoarjo', $sidoarjo);
        $pdf = PDF::loadview('export.sidoarjo.sidoarjo');
        return $pdf->download('Hasil export sidoarjo.pdf');
    }

    // surabaya
    public function exportpdfsurabaya(Request $request)
    {
        $surabaya = Surabaya::all();

        view()->share('surabaya', $surabaya);
        $pdf = PDF::loadview('export.surabaya.surabaya');
        return $pdf->download('Hasil export surabaya.pdf');
    }
    // pesawaran
    public function exportpdfpesawaran(Request $request)
    {
        $pesawaran = Pesawaran::all();

        view()->share('pesawaran', $pesawaran);
        $pdf = PDF::loadview('export.pesawaran.pesawaran');
        return $pdf->download('Hasil export pesawaran.pdf');
    }
    // cirebon
    public function exportpdfcirebon(Request $request)
    {
        $cirebon = Cirebon::all();

        view()->share('cirebon', $cirebon);
        $pdf = PDF::loadview('export.cirebon.cirebon');
        return $pdf->download('Hasil export cirebon.pdf');
    }
    // sukabumi
    public function exportpdfsukabumi(Request $request)
    {
        $sukabumi = Sukabumi::all();

        view()->share('sukabumi', $sukabumi);
        $pdf = PDF::loadview('export.sukabumi.sukabumi');
        return $pdf->download('Hasil export sukabumi.pdf');
    }
    // karawang
    public function exportpdfkarawang(Request $request)
    {
        $karawang = Karawang::all();

        view()->share('karawang', $karawang);
        $pdf = PDF::loadview('export.karawang.karawang');
        return $pdf->download('Hasil export karawang.pdf');
    }
    // bandung
    public function exportpdfbandung(Request $request)
    {
        $bandung = Bandung::all();

        view()->share('bandung', $bandung);
        $pdf = PDF::loadview('export.bandung.bandung');
        return $pdf->download('Hasil export bandung.pdf');
    }
}
