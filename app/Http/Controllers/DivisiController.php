<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Divisi;
class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divis = Divisi::all();
        return view('divisi.index', compact('divis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required|unique:divisi',
        ]);

        $divisi = new Divisi($request->all());
        // $divisi->save();

        if($divisi->save()){
            return redirect()->route('divisi.index')->with('success', 'Divisi berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Divisi gagal di tambahkan data sudah ada');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisi = Divisi::find($id);
        return view('divisi.edit', compact('divisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_divisi' => 'required|unique:divisi',
        ]);

        $divisi = Divisi::find($id);
        $divisi->nama_divisi = $request->nama_divisi;


       if($divisi->save()){
            return redirect()->route('divisi.index')->with('success', 'Divisi berhasil di ubah');
        }else{
            return redirect()->back()->with('error', 'Divisi gagal di ubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();

        return redirect()->back()->with('success', 'data berhasil di hapus');
    }
}
