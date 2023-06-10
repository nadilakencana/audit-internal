<?php

namespace App\Http\Controllers\Tangerang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tangerang;
use App\Models\Tangkab;
use App\Models\Tangsel;

use PDF;

class TangerangController extends Controller
{
    public function index()
    {
        $tangerang = Tangerang::all();
        return view('datatable.tangerang.kota', compact('tangerang'));
    }
    public function tangsel()
    {
        $tangsel = Tangsel::all();
        return view('datatable.tangerang.tangsel', compact('tangsel'));
    }
    public function kab()
    {
        $tangkab = Tangkab::all();
        return view('datatable.tangerang.kab', compact('tangkab'));
    }
    
    public function tangerangadmin()
    {
        $tangerang = Tangerang::all();
        return view('backend.tangerang.tangerang.data', compact('tangerang'));
    }

    public function tambahtangerang(Request $request){
        // dd($request->all());
        $tangerang = Tangerang::create($request->all());
        return redirect()->route('tangerang-admin');
    }
    public function tampiltangerang($id){
        $data = Tangerang::find($id);
        return view('backend.tangerang.tangerang.edit', compact('data'));
    }
    public function updatetangerang(Request $request, $id){
        $data = Tangerang::find($id);
        $data->update($request->all());

        return redirect()->route('tangerang-admin');
    }
    public function hapustangerang($id){
        $data = Tangerang::find($id);
        $data->delete();
        return redirect()->route('tangerang-admin');
    }

    public function exportpdftangerang($id)
    {
        $data = Tangerang::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.tangerang.tangerang_id');
        return $pdf->download('Hasil export kota tangerang.pdf');
    }
}
