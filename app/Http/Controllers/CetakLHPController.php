<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LHP;
use Illuminate\Support\Facades\DB;

use PDF;

class CetakLHPController extends Controller
{

    public function index()
    {
        $cetak = DB::table('l_h_p_s')->get();
        return view('cetaklhp.index', compact('cetak'));
    }

    public function CetakLHP($id)
    {
        $cetak = LHP::find($id);

        view()->share('cetak', $cetak);
        $pdf = PDF::loadview('cetaklhppdf.index');
        return $pdf->download('Hasil Cetak LHP.pdf');
    }
}
