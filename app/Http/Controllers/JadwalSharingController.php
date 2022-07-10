<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal_sharing;

class JadwalSharingController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Jadwal_sharing::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Jadwal_sharing::with('kategori')->latest()->paginate(5);
        }
        return view('jadwal.data', compact('data'));
    }
    public function tambahdata(){ 
        return view('jadwal');
    }
    public function sharing(){ 
        return view('sharing');
    }
    public function tambahjadwal(Request $request){
        $data = Jadwal_sharing::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('jadwal');
    }
    public function tampiljadwal($id){
        $data = Jadwal_sharing::find($id);
        return view('jadwal.edit', compact('data'));
    }
    public function updatejadwal(Request $request, $id){
        $data = Jadwal_sharing::find($id);
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        $data->update($request->all());

        return redirect()->route('jadwal');
    }
    public function hapusjadwal($id){
        $data = Jadwal_sharing::find($id);
        $data->delete();
        return redirect()->route('jadwal');
    }
}
