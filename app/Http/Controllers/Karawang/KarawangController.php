<?php

namespace App\Http\Controllers\Karawang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Karawang;

use PDF;

class KarawangController extends Controller
{
    public function index()
    {
        $karawang = Karawang::all();
        return view('datatable.karawang.kab', compact('karawang'));
    }
    public function karawangadmin()
    {
        $karawang = Karawang::all();
        return view('backend.karawang.data', compact('karawang'));
    }

    public function tambahkarawang(Request $request){
        // dd($request->all());
        $karawang = Karawang::create($request->all());
        return redirect()->route('karawang-admin');
    }
    public function tampilkarawang($id){
        $data = Karawang::find($id);
        return view('backend.karawang.edit', compact('data'));
    }
    public function updatekarawang(Request $request, $id){
        $data = Karawang::find($id);
        $data->update($request->all());

        return redirect()->route('karawang-admin');
    }
    public function hapuskarawang($id){
        $data = Karawang::find($id);
        $data->delete();
        return redirect()->route('karawang-admin');
    }

    public function exportpdfkarawang($id)
    {
        $data = Karawang::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.karawang.karawang_id');
        return $pdf->download('Hasil export karawang.pdf');
    }
}
