<?php

namespace App\Http\Controllers\Sidoarjo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sidoarjo;

use PDF;

class SidoarjoController extends Controller
{
    public function index()
    {
        $sidoarjo = Sidoarjo::all();
        return view('datatable.sidoarjo.kab', compact('sidoarjo'));
    }
    public function sidoarjoadmin()
    {
        $sidoarjo = Sidoarjo::all();
        return view('backend.sidoarjo.data', compact('sidoarjo'));
    }

    public function tambahsidoarjo(Request $request){
        // dd($request->all());
        $sidoarjo = Sidoarjo::create($request->all());
        return redirect()->route('sidoarjo-admin');
    }
    public function tampilsidoarjo($id){
        $data = Sidoarjo::find($id);
        return view('backend.sidoarjo.edit', compact('data'));
    }
    public function updatesidoarjo(Request $request, $id){
        $data = Sidoarjo::find($id);
        $data->update($request->all());

        return redirect()->route('sidoarjo-admin');
    }
    public function hapussidoarjo($id){
        $data = Sidoarjo::find($id);
        $data->delete();
        return redirect()->route('sidoarjo-admin');
    }

    public function exportpdfsidoarjo($id)
    {
        $data = Sidoarjo::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.sidoarjo.sidoarjo');
        return $pdf->download('Hasil export sidoarjo.pdf');
    }
}
