<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LHP;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LHPController extends Controller
{  

    public function index()
    {
        $lhps = DB::table('l_h_p_s')->get();
        return view('lhp.index', compact('lhps'));
    }

    public function create()
    {
        return view('lhp.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kategori' => 'required',
            'kode_lhp' => 'required',
            'tanggal' => 'required|date',
            'uraian' => 'required',
            'unit' => 'required',
            'file' => 'required|mimes:png,jpg,pdf,doc,docx,xls,xlsx',
        ]);

        // Upload file to the 'datafile_LHP' folder
        $file = $request->file('file');
        $folderPath = 'datafile_LHP'; // Folder name
        $filePath = $file->storeAs($folderPath, $file->getClientOriginalName());

        // Simpan data ke database
        LHP::create([
            'kategori' => $request->kategori,
            'kode_lhp' => $request->kode_lhp,
            'tanggal' => $request->tanggal,
            'uraian' => $request->uraian,
            'unit' => $request->unit,
            'file' => $filePath,
        ]);

        Session::flash('success', 'Data LHP berhasil ditambah.'); // Flash success message

        return redirect()->route('datalhp');

    }

    public function edit($id)
    {
        $lhp = LHP::findOrFail($id);
        return view('lhp.edit', compact('lhp'));
    }

    public function update(Request $request, $id)
    {
        $lhp = LHP::findOrFail($id);
        
        $request->validate([
            'kategori' => 'required',
            'kode_lhp' => 'required',
            'tanggal' => 'required|date',
            'uraian' => 'required',
            'unit' => 'required',
            'file' => 'nullable|mimes:png,jpg,pdf,doc,docx,xls,xlsx',
        ]);
    
        if ($request->hasFile('file')) {
            Storage::delete($lhp->file);
            $file = $request->file('file');
            $folderPath = 'datafile_LHP'; // Folder name
            $filePath = $file->store($folderPath);
            $lhp->file = $filePath;
        }
    
        $lhp->update($request->only(['kategori', 'kode_lhp', 'tanggal', 'uraian', 'unit']));
    
        Session::flash('success', 'Data LHP berhasil diedit.'); // Flash success message

        return redirect()->route('datalhp');
    }

    public function destroy($id)
    {
        $lhp = LHP::findOrFail($id);
        Storage::delete($lhp->file);
        $lhp->delete();

        return redirect()->route('datalhp');
    }

    public function downloadFile($filename)
    {
        $file = Storage::disk('public')->get('datafile_LHP/' . $filename);
        $fileType = Storage::disk('public')->mimeType('datafile_LHP/' . $filename);

        return response($file)->header('Content-Type', $fileType);
    }

}
