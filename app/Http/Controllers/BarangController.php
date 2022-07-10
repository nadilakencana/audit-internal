<?php

namespace App\Http\Controllers;

use App\Models\Barang;                                                                           
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Barang::where('nama_barang', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Barang::latest()->paginate(5);
        }
        return view('barang', compact('data'));
    }
    public function tambahbarang(){ 
        return view('barang');
    }
    public function add(Request $request){
        Barang::create($request->all());
        return redirect()->route('barang');
    }
    public function tampildata($id){
        $data = Barang::find($id);
        return view('edit', compact('data'));
    }
    public function update(Request $request, $id){
        $data = Barang::find($id);
        $data->update($request->all());

        return redirect()->route('barang');
    }
    public function delete($id){
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('barang');
    }

}
