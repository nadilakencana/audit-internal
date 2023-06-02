<?php

namespace App\Http\Controllers\Ponorogo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ponorogo;

class PonorogoController extends Controller
{
    public function index()
    {
        $ponorogo = Ponorogo::all();
        return view('datatable.ponorogo.kab', compact('ponorogo'));
    }
    public function ponorogoadmin()
    {
        $ponorogo = Ponorogo::all();
        return view('backend.ponorogo.data', compact('ponorogo'));
    }

    public function tambahponorogo(Request $request){
        // dd($request->all());
        $ponorogo = Ponorogo::create($request->all());
        return redirect()->route('ponorogo-admin');
    }
    public function tampilponorogo($id){
        $data = Ponorogo::find($id);
        return view('backend.ponorogo.edit', compact('data'));
    }
    public function updateponorogo(Request $request, $id){
        $data = Ponorogo::find($id);
        $data->update($request->all());

        return redirect()->route('ponorogo-admin');
    }
    public function hapusponorogo($id){
        $data = Ponorogo::find($id);
        $data->delete();
        return redirect()->route('ponorogo-admin');
    }
}
