<?php

namespace App\Http\Controllers\Pesawaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesawaran;

class PesawaranController extends Controller
{
    public function index()
    {
        $pesawaran = Pesawaran::all();
        return view('datatable.pesawaran.kab', compact('pesawaran'));
    }
    public function pesawaranadmin()
    {
        $pesawaran = Pesawaran::all();
        return view('backend.pesawaran.data', compact('pesawaran'));
    }

    public function tambahpesawaran(Request $request){
        // dd($request->all());
        $pesawaran = Pesawaran::create($request->all());
        return redirect()->route('pesawaran-admin');
    }
    public function tampilpesawaran($id){
        $data = Pesawaran::find($id);
        return view('backend.pesawaran.edit', compact('data'));
    }
    public function updatepesawaran(Request $request, $id){
        $data = Pesawaran::find($id);
        $data->update($request->all());

        return redirect()->route('pesawaran-admin');
    }
    public function hapuspesawaran($id){
        $data = Pesawaran::find($id);
        $data->delete();
        return redirect()->route('pesawaran-admin');
    }
}
