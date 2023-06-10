<?php

namespace App\Http\Controllers\Tangerang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tangkab;

use PDF;

class TangkabController extends Controller
{
    
    public function tangkabadmin()
    {
        $tangkab = Tangkab::all();
        return view('backend.tangerang.tangkab.data', compact('tangkab'));
    }

    public function tambahtangkab(Request $request){
        // dd($request->all());
        $tangkab = Tangkab::create($request->all());
        return redirect()->route('tangkab-admin');
    }
    public function tampiltangkab($id){
        $data = Tangkab::find($id);
        return view('backend.tangerang.tangkab.edit', compact('data'));
    }
    public function updatetangkab(Request $request, $id){
        $data = Tangkab::find($id);
        $data->update($request->all());

        return redirect()->route('tangkab-admin');
    }
    public function hapustangkab($id){
        $data = Tangkab::find($id);
        $data->delete();
        return redirect()->route('tangkab-admin');
    }

    public function exportpdftangkab($id)
    {
        $data = Tangkab::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.tangerang.tangkab_id');
        return $pdf->download('Hasil export kota Tangerang.pdf');
    }
}
