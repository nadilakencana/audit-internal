<?php

namespace App\Http\Controllers\Sukabumi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sukabumi;

use PDF;

class SukabumiController extends Controller
{
    public function index()
    {
        $sukabumi = Sukabumi::all();
        return view('datatable.sukabumi.kab', compact('sukabumi'));
    }
    public function sukabumiadmin()
    {
        $sukabumi = Sukabumi::all();
        return view('backend.sukabumi.data', compact('sukabumi'));
    }
    public function tambahsukabumi(Request $request){
        // dd($request->all());
        $sukabumi = Sukabumi::create($request->all());
        return redirect()->route('sukabumi-admin');
    }
    public function tampilsukabumi($id){
        $data = Sukabumi::find($id);
        return view('backend.sukabumi.edit', compact('data'));
    }
    public function updatesukabumi(Request $request, $id){
        $data = Sukabumi::find($id);
        $data->update($request->all());

        return redirect()->route('sukabumi-admin');
    }
    public function hapussukabumi($id){
        $data = Sukabumi::find($id);
        $data->delete();
        return redirect()->route('sukabumi-admin');
    }

    public function exportpdfsukabumi($id)
    {
        $data = Sukabumi::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.sukabumi.sukabumi_id');
        return $pdf->download('Hasil export sukabumi.pdf');
    }
}
