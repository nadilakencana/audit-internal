<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisPemeriksaan;
class JenisPemerikasaanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = JenisPemeriksaan::all();
        return view('jenisPemeriksaan.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisPemeriksaan.create');
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
            'nama_jenis' => 'required|unique:jenis_pemeriksaan',
        ]);

        $JenisPemeriksaan = new JenisPemeriksaan($request->all());
        // $divisi->save();

        if($JenisPemeriksaan->save()){
            return redirect()->route('jenis.index')->with('success', 'Jenis Pemeriksaan berhasil Ditambahkan');
        }else{
            return redirect()->back()->with('error', 'Jenis Pemeriksaan gagal di tambahkan data sudah ada');
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
        $JenisPemeriksaan = JenisPemeriksaan::find($id);
        return view('jenisPemeriksaan.edit', compact('JenisPemeriksaan'));
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
            'nama_jenis' => 'required|unique:jenis_pemeriksaan',
        ]);

        $JenisPemeriksaan = JenisPemeriksaan::find($id);
        $JenisPemeriksaan->nama_jenis = $request->nama_jenis;


       if($JenisPemeriksaan->save()){
            return redirect()->route('jenis.index')->with('success', 'Jenis Pemeriksaan berhasil di ubah');
        }else{
            return redirect()->back()->with('error', 'Jenis Pemeriksaan gagal di ubah');
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
        $JenisPemeriksaan = JenisPemeriksaan::find($id);
        $JenisPemeriksaan->delete();

        return redirect()->back()->with('success', 'data berhasil di hapus');
    }
}
