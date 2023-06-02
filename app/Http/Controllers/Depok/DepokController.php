<?php

namespace App\Http\Controllers\Depok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Depok;

class DepokController extends Controller
{
    public function index()
    {
        $depok = Depok::all();
        return view('datatable.depok.kotadepok', compact('depok'));
    }

    public function depokadmin()
    {
        $depok = Depok::all();
        return view('backend.depok.data', compact('depok'));
    }

    public function tambahdepok(Request $request){
        // dd($request->all());
        $depok = Depok::create($request->all());
        return redirect()->route('depok-admin');
    }
    public function tampildepok($id){
        $data = Depok::find($id);
        return view('backend.depok.edit', compact('data'));
    }
    public function updatedepok(Request $request, $id){
        $data = Depok::find($id);
        $data->update($request->all());

        return redirect()->route('depok-admin');
    }
    public function hapusdepok($id){
        $data = Depok::find($id);
        $data->delete();
        return redirect()->route('depok-admin');
    }
}
