<?php

namespace App\Http\Controllers\Cirebon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cirebon;

class CirebonController extends Controller
{
    public function index()
    {
        $cirebon = Cirebon::all();
        return view('datatable.cirebon.kab', compact('cirebon'));
    }
    public function cirebonadmin()
    {
        $cirebon = Cirebon::all();
        return view('backend.cirebon.data', compact('cirebon'));
    }

    public function tambahcirebon(Request $request){
        // dd($request->all());
        $cirebon = Cirebon::create($request->all());
        return redirect()->route('cirebon-admin');
    }
    public function tampilcirebon($id){
        $data = Cirebon::find($id);
        return view('backend.cirebon.edit', compact('data'));
    }
    public function updatecirebon(Request $request, $id){
        $data = Cirebon::find($id);
        $data->update($request->all());

        return redirect()->route('cirebon-admin');
    }
    public function hapuscirebon($id){
        $data = Cirebon::find($id);
        $data->delete();
        return redirect()->route('cirebon-admin');
    }
}
