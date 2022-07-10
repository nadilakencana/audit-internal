<?php

namespace App\Http\Controllers;

use App\Models\Angkatan; 
use Illuminate\Http\Request;

class AngkatanController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Angkatan::where('angkatan', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Angkatan::latest()->paginate(5);
        }
        return view('anggota.angkatan', compact('data'));
    }
    public function tambahangkatan(){ 
        return view('angkatan');
    }
    public function plus(Request $request){
        Angkatan::create($request->all());
        return redirect()->route('angkatan');
    }
    public function tampilangkatan($id){
        $data = Angkatan::find($id);
        return view('anggota.editangkatan', compact('data'));
    }
    public function updateangkatan(Request $request, $id){
        $data = Angkatan::find($id);
        $data->update($request->all());

        return redirect()->route('angkatan');
    }
    public function hapusangkatan($id){
        $data = Angkatan::find($id);
        $data->delete();
        return redirect()->route('angkatan');
    }
}
