<?php

namespace App\Http\Controllers;

use App\Models\Anggota; 
use App\Models\Angkatan; 
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){ 
            $data = Anggota::where('nama', 'LIKE', '%' .$request->search. '%')->paginate(10);
        }else{
            
            $data = Anggota::with('angkatan')->latest()->paginate(10);
        }
        return view('anggota.dataanggota', compact('data'));
    }
    public function tambahdata(){ 
        $angkatan = Angkatan::all();
        return view('dataanggota', compact('angkatan'));
    }
    public function tambah(Request $request){
        Anggota::create($request->all());
        return redirect()->route('dataanggota');
    }
    public function tampilanggota($id){
        $data = Anggota::find($id);
        return view('anggota.editanggota', compact('data'));
    }
    public function updateanggota(Request $request, $id){
        $data = Anggota::find($id);
        $data->update($request->all());

        return redirect()->route('dataanggota');
    }
    public function hapus($id){
        $data = Anggota::find($id);
        $data->delete();
        return redirect()->route('dataanggota');
    }
}
