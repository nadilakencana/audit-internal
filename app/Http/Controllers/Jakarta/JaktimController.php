<?php

namespace App\Http\Controllers\Jakarta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jaktim;

class JaktimController extends Controller
{
    public function jaktimadmin()
    {
        $jaktim = Jaktim::all();
        return view('backend.jakarta.jaktim.data', compact('jaktim'));
    }

    public function tambahjaktim(Request $request){
        // dd($request->all());
        $jaktim = Jaktim::create($request->all());
        return redirect()->route('jaktim-admin');
    }
    public function tampiljaktim($id){
        $data = Jaktim::find($id);
        return view('backend.jakarta.jaktim.edit', compact('data'));
    }
    public function updatejaktim(Request $request, $id){
        $data = Jaktim::find($id);
        $data->update($request->all());

        return redirect()->route('jaktim-admin');
    }
    public function hapusjaktim($id){
        $data = Jaktim::find($id);
        $data->delete();
        return redirect()->route('jaktim-admin');
    }
}
