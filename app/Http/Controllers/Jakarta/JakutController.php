<?php

namespace App\Http\Controllers\Jakarta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jakut;

class JakutController extends Controller
{
    public function jakutadmin()
    {
        $jakut = Jakut::all();
        return view('backend.jakarta.jakut.data', compact('jakut'));
    }

    public function tambahjakut(Request $request){
        // dd($request->all());
        $jakut = Jakut::create($request->all());
        return redirect()->route('jakut-admin');
    }
    public function tampiljakut($id){
        $data = Jakut::find($id);
        return view('backend.jakarta.jakut.edit', compact('data'));
    }
    public function updatejakut(Request $request, $id){
        $data = Jakut::find($id);
        $data->update($request->all());

        return redirect()->route('jakut-admin');
    }
    public function hapusjakut($id){
        $data = Jakut::find($id);
        $data->delete();
        return redirect()->route('jakut-admin');
    }
}
