<?php

namespace App\Http\Controllers\Bandung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bandung;

use PDF;

class BandungController extends Controller
{
    public function index()
    {
        $bandung = Bandung::all();
        return view('datatable.bandung.kab', compact('bandung'));
    }
    public function bandungadmin()
    {
        $bandung = Bandung::all();
        return view('backend.bandung.data', compact('bandung'));
    }

    public function tambahbandung(Request $request){
        // dd($request->all());
        $bandung = Bandung::create($request->all());
        return redirect()->route('bandung-admin');
    }
    public function tampilbandung($id){
        $data = Bandung::find($id);
        return view('backend.bandung.edit', compact('data'));
    }
    public function updatebandung(Request $request, $id){
        $data = Bandung::find($id);
        $data->update($request->all());

        return redirect()->route('bandung-admin');
    }
    public function hapusbandung($id){
        $data = Bandung::find($id);
        $data->delete();
        return redirect()->route('bandung-admin');
    }

    public function exportpdfbandung($id)
    {
        $data = Bandung::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.bandung.bandung_id');
        return $pdf->download('Hasil export bandung.pdf');
    }
}
