<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;

class AcaraController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Acara::where('title', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Acara::where('id',2)->first();
            // dd($data->kategori->id);
            $data = Acara::with('kategori')->latest()->paginate(5);
        }
        return view('acara.data', compact('data'));
    }
    public function tambahdata(){ 
        return view('acara');
    }
    public function tambahacara(Request $request){
        // dd($request->all());
        $data = Acara::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('acara');
    }
    public function tampilacara($id){
        $data = Acara::find($id);
        return view('acara.edit', compact('data'));
    }
    public function updateacara(Request $request, $id){
        $data = Acara::find($id);
        // if($request->hasFile('image')){
        //     $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
        //     $data->image = $request->file('image')->getClientOriginalName();
        //     $data->save();
        // }
        $data->update($request->all());

        return redirect()->route('acara');
    }
    public function hapusacara($id){
        $data = Acara::find($id);
        dd($data);
        $data->delete();
        return redirect()->route('acara');
    }
}
