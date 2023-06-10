<?php

namespace App\Http\Controllers\Bogor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bogor;
use App\Models\Kabbogor;

use PDF;

class BogorController extends Controller
{
    public function index()
    {
        $bogor = Bogor::all();
        return view('datatable.bogor.kota', compact('bogor'));
    }
    public function kabbogor()
    {
        $kabbogor = Kabbogor::all();
        return view('datatable.bogor.kab', compact('kabbogor'));
    }
    public function bogoradmin()
    {
        $bogor = Bogor::all();
        return view('backend.bogor.bogor.data', compact('bogor'));
    }

    public function tambahbogor(Request $request){
        // dd($request->all());
        $bogor = Bogor::create($request->all());
        return redirect()->route('bogor-admin');
    }
    public function tampilbogor($id){
        $data = Bogor::find($id);
        return view('backend.bogor.bogor.edit', compact('data'));
    }
    public function updatebogor(Request $request, $id){
        $data = Bogor::find($id);
        $data->update($request->all());

        return redirect()->route('bogor-admin');
    }
    public function hapusbogor($id){
        $data = Bogor::find($id);
        $data->delete();
        return redirect()->route('bogor-admin');
    }

    public function exportpdfbogor($id)
    {
        $data = Bogor::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.bogor.bogor_id');
        return $pdf->download('Hasil export bogor.pdf');
    }
}
