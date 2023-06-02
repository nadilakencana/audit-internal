<?php

namespace App\Http\Controllers\Jakarta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JakpusController extends Controller
{
    public function index()
    {
        return view('datatable.data');
    }

    public function jakpus()
    {
        return view('datatable.jakarta.jakpus');
    }
    public function jakut()
    {
        return view('datatable.jakarta.jakut');
    }
    public function jaktim()
    {
        return view('datatable.jakarta.jaktim');
    }
    public function jaksel()
    {
        return view('datatable.jakarta.jaksel');
    }

    public function jakpusadmin()
    {
        return view('backend.jakarta.jakpus.jakpus');
    }

    public function tambahdata(){ 
        return view('acara');
    }
    public function tambahacara(Request $request){
        // dd($request->all());
        $data = Acara::create($request->all());
        return redirect()->route('acara');
    }
    public function tampilacara($id){
        $data = Acara::find($id);
        return view('acara.edit', compact('data'));
    }
    public function updateacara(Request $request, $id){
        $data = Acara::find($id);
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
