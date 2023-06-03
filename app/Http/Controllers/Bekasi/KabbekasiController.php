<?php

namespace App\Http\Controllers\Bekasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bekasi;
use App\Models\Kabbekasi;

class KabbekasiController extends Controller
{
    public function kabbekasiadmin()
    {
        $kabbekasi = Kabbekasi::all();
        return view('backend.bekasi.kabbekasi.data', compact('kabbekasi'));
    }

    public function tambahkabbekasi(Request $request){
        // dd($request->all());
        $Kabbekasi = Kabbekasi::create($request->all());
        return redirect()->route('kabbekasi-admin');
    }
    public function tampilkabbekasi($id){
        $data = Kabbekasi::find($id);
        return view('backend.bekasi.kabbekasi.edit', compact('data'));
    }
    public function updatekabbekasi(Request $request, $id){
        $data = Kabbekasi::find($id);
        $data->update($request->all());

        return redirect()->route('kabbekasi-admin');
    }
    public function hapuskabbekasi($id){
        $data = Kabbekasi::find($id);
        $data->delete();
        return redirect()->route('kabbekasi-admin');
    }
}
