<?php

namespace App\Http\Controllers\Tangerang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tangsel;

use PDF;

class TangselController extends Controller
{
    public function tangseladmin()
    {
        $tangsel = Tangsel::all();
        return view('backend.tangerang.tangsel.data', compact('tangsel'));
    }

    public function tambahtangsel(Request $request){
        // dd($request->all());
        $tangsel = Tangsel::create($request->all());
        return redirect()->route('tangsel-admin');
    }
    public function tampiltangsel($id){
        $data = Tangsel::find($id);
        return view('backend.tangerang.tangsel.edit', compact('data'));
    }
    public function updatetangsel(Request $request, $id){
        $data = Tangsel::find($id);
        $data->update($request->all());

        return redirect()->route('tangsel-admin');
    }
    public function hapustangsel($id){
        $data = Tangsel::find($id);
        $data->delete();
        return redirect()->route('tangsel-admin');
    }

    public function exportpdftangsel($id)
    {
        $data = Tangsel::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.tangerang.tangsel_id');
        return $pdf->download('Hasil export tangsel.pdf');
    }
}
