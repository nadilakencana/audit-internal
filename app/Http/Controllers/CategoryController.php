<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = Category::where('kategori', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = Category::latest()->paginate(5);
        }
        return view('kategori.data', compact('data'));
    }
    public function tambahkategori(){ 
        return view('kategori');
    }
    public function tambahdata(Request $request){
        Category::create($request->all());
        return redirect()->route('kategori')->with(['success', 'data berhasil ditambahkan']);
    }
    public function tampilkategori($id){
        $data = Category::find($id);
        return view('kategori.edit', compact('data'));
    }
    public function updatekategori(Request $request, $id){
        $data = Category::find($id);
        $data->update($request->all());

        return redirect()->route('kategori')->with(['success', 'data berhasil diedit']);
    }
    public function hapuskategori($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('kategori')->with(['success', 'data berhasil dihapus']);
    }
} 
