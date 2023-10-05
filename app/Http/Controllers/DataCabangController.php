<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataCabang;

class DataCabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataCabang::all();
        return view ('data_cabang.index_data', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_cabang.create');
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
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $data = new DataCabang($request->all());
        // $divisi->save();

        if($data->save()){
            return redirect()->route('cabang.index')->with('success', 'Data Cabang berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Data Cabang gagal di tambahkan');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataCabang::find($id);
        return view('data_cabang.edit', compact('data'));
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
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $data = DataCabang::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;

        if($data->save()){
            return redirect()->route('cabang.index')->with('success', 'Data Cabang berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Data Cabang gagal di tambahkan');
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
        $data = DataCabang::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'data berhasil di hapus');
    }
}
