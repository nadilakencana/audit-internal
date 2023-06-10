<?php

namespace App\Http\Controllers\Bogor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kabbogor;

use PDF;

class KabbogorController extends Controller
{
    public function kabbogoradmin()
    {
        $kabbogor = Kabbogor::all();
        return view('backend.bogor.kabbogor.data', compact('kabbogor'));
    }

    public function tambahkabbogor(Request $request){
        // dd($request->all());
        $kabbogor = Kabbogor::create($request->all());
        return redirect()->route('kabbogor-admin');
    }
    public function tampilkabbogor($id){
        $data = Kabbogor::find($id);
        return view('backend.bogor.kabbogor.edit', compact('data'));
    }
    public function updatekabbogor(Request $request, $id){
        $data = Kabbogor::find($id);
        $data->update($request->all());

        return redirect()->route('kabbogor-admin');
    }
    public function hapuskabbogor($id){
        $data = Kabbogor::find($id);
        $data->delete();
        return redirect()->route('kabbogor-admin');
    }

    public function exportpdfkabbogor($id)
    {
        $data = Kabbogor::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.bogor.kabbogor_id');
        return $pdf->download('Hasil export kab bogor.pdf');
    }
}
