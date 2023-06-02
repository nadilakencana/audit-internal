<?php

namespace App\Http\Controllers\Surabaya;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Surabaya;

class SurabayaController extends Controller
{
    public function index()
    {
        $surabaya = Surabaya::all();
        return view('datatable.surabaya.kota', compact('surabaya'));
    }
    public function surabayaadmin()
    {
        $surabaya = Surabaya::all();
        return view('backend.surabaya.data', compact('surabaya'));
    }

    public function tambahsurabaya(Request $request){
        // dd($request->all());
        $surabaya = Surabaya::create($request->all());
        return redirect()->route('surabaya-admin');
    }
    public function tampilsurabaya($id){
        $data = Surabaya::find($id);
        return view('backend.surabaya.edit', compact('data'));
    }
    public function updatesurabaya(Request $request, $id){
        $data = Surabaya::find($id);
        $data->update($request->all());

        return redirect()->route('surabaya-admin');
    }
    public function hapussurabaya($id){
        $data = Surabaya::find($id);
        $data->delete();
        return redirect()->route('surabaya-admin');
    }
}
