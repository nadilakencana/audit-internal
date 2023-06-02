<?php

namespace App\Http\Controllers\Serang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Serang;

class SerangController extends Controller
{
    public function index(){
        $serang = Serang::all();
        return view('datatable.serang.kab', compact('serang'));
    }
    public function serangadmin()
    {
        $serang = Serang::all();
        return view('backend.serang.data', compact('serang'));
    }

    public function tambahserang(Request $request){
        // dd($request->all());
        $serang = Serang::create($request->all());
        return redirect()->route('serang-admin');
    }
    public function tampilserang($id){
        $data = Serang::find($id);
        return view('backend.serang.edit', compact('data'));
    }
    public function updateserang(Request $request, $id){
        $data = Serang::find($id);
        $data->update($request->all());

        return redirect()->route('serang-admin');
    }
    public function hapusserang($id){
        $data = Serang::find($id);
        $data->delete();
        return redirect()->route('serang-admin');
    }
}
