<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Artikel::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Artikel::where('id',1)->first();
            // dd($data->kategori->kategori);
            $data = Artikel::with('kategori')->latest()->paginate(5);
        }
        return view('artikel.data', compact('data'));
    }
    public function tambahdata(){ 
        return view('artikel');
    }
    public function tambahartikel(Request $request){
        $data = Artikel::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('artikel');
    }
    public function tampilartikel($id){
        $data = Artikel::find($id);
        return view('artikel.edit', compact('data'));
    }
    public function updateartikel(Request $request, $id){
        $data = Artikel::find($id);
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        $data->update($request->all());

        return redirect()->route('artikel'); 
    }
    public function hapusartikel($id){
        $data = Artikel::find($id);
        $data->delete();
        return redirect()->route('artikel');
    }
}
