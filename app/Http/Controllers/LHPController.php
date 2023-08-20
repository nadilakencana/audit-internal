<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LHP;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LHPController extends Controller
{  

    public function index()
    {
        $lhps = DB::table('l_h_p_s')->get();
        return view('lhp.index', compact('lhps'));
    }

    public function lhp()
    {
        $lhp = DB::table('l_h_p_s')->get();
        return view('lhp.fix', compact('lhp'));
    }

    public function create()
    {
        return view('lhp.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'kode_lhp' => [
                'required',
                Rule::unique('l_h_p_s', 'kode_lhp'),
            ],
            'tanggal' => 'required|date',
            'uraian' => 'required',
            'unit' => 'required',
            'file' => 'required|mimes:png,jpg,pdf,doc,docx,xls,xlsx',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with(['error' => 'Kode LHP sudah digunakan.']);
        }
    
        // Upload file to the 'file_LHP' folder in 'public' disk
        $file = $request->file('file');
        $folderPath = 'file_LHP'; // Folder name
        $filePath = $file->storeAs($folderPath, $file->getClientOriginalName(), 'public');
    
        // Simpan data ke database
        LHP::create([
            'kategori' => $request->kategori,
            'kode_lhp' => $request->kode_lhp,
            'tanggal' => $request->tanggal,
            'uraian' => $request->uraian,
            'unit' => $request->unit,
            'file' => $filePath,
        ]);
    
        session()->flash('success', 'Data LHP berhasil ditambah.');
    
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
    
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'kode_lhp' => [
                'required',
                Rule::unique('l_h_p_s', 'kode_lhp')->ignore($lhp->id),
            ],
            'tanggal' => 'required|date',
            'uraian' => 'required',
            'unit' => 'required',
            'file' => 'nullable|mimes:png,jpg,pdf,doc,docx,xls,xlsx',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with(['error' => 'Kode LHP sudah digunakan.']);
        }
    
        if ($request->hasFile('file')) {
            // Delete existing file
            Storage::disk('public')->delete($lhp->file);
    
            // Upload new file
            $file = $request->file('file');
            $folderPath = 'file_LHP'; // Folder name
            $filePath = $file->storeAs($folderPath, $file->getClientOriginalName(), 'public');
            $lhp->file = $filePath;
        }
    
        // Update other fields
        $lhp->update($request->only(['kategori', 'kode_lhp', 'tanggal', 'uraian', 'unit']));
    
        session()->flash('success', 'Data LHP berhasil diedit.');
    
        return redirect()->route('datalhp');
    }

    public function destroy($id)
    {
        $lhp = LHP::findOrFail($id);
    
        // Delete the file from the 'public' disk
        Storage::disk('public')->delete($lhp->file);
    
        // Delete the data from the database
        $lhp->delete();
    
        session()->flash('success', 'Data LHP berhasil dihapus.');
    
        return redirect()->route('datalhp');
    }

    // public function download($id)
    // {
    //     $file = LHP::findOrFail($id);
    //     $filePath = $file->file_path;  // Pastikan kolom 'file_path' berisi path yang lengkap

    //     // Mendapatkan path lengkap file di dalam direktori publik
    //     $publicFilePath = public_path($filePath);

    //     // Periksa apakah file ada sebelum diunduh
    //     if (file_exists($publicFilePath)) {
    //         return response()->download($publicFilePath);
    //     } else {
    //         return back()->with('error', 'File tidak ditemukan.');
    //     }
    // }

    // public function review(Request $request, $id)
    // {
    //     $file = LHP::findOrFail($id);
    //     $file->review = $request->input('review');
    //     $file->save();

    //     return redirect()->route('verif')->with('success', 'Review berhasil ditambahkan.');
    // }

}
