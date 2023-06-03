<?php

namespace App\Http\Controllers\Bekasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bekasi;
use App\Models\Kabbekasi;

class BekasiController extends Controller
{
    public function index()
    {
        $bekasi = Bekasi::all();
        return view('datatable.bekasi.kota', compact('bekasi'));
    }
    public function kab()
    {
        $kabbekasi = Kabbekasi::all();
        return view('datatable.bekasi.kab', compact('kabbekasi'));
    }
    public function bekasiadmin()
    {
        $bekasi = Bekasi::all();
        return view('backend.bekasi.bekasi.data', compact('bekasi'));
    }

    public function tambahbekasi(Request $request){
        // dd($request->all());
        $bekasi = Bekasi::create($request->all());
        return redirect()->route('bekasi-admin');
    }
    public function tampilbekasi($id){
        $data = Bekasi::find($id);
        return view('backend.bekasi.bekasi.edit', compact('data'));
    }
    public function updatebekasi(Request $request, $id){
        $data = Bekasi::find($id);
        $data->update($request->all());

        return redirect()->route('bekasi-admin');
    }
    public function hapusbekasi($id){
        $data = Bekasi::find($id);
        $data->delete();
        return redirect()->route('bekasi-admin');
    }
}
