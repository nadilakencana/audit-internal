<?php

namespace App\Http\Controllers;

use App\Models\BuktiTemuan;
use App\Models\DataCabang;
use App\Models\DataPenugasan;
use Illuminate\Http\Request;
use App\Models\LHP;
use App\Models\TemuanAudit;
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
        $cabang = DataCabang::all();
        $penugasan = DataPenugasan::all();
        return view('lhp.create', compact('cabang', 'penugasan'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'id_penugasan' => 'required',
            'id_cabang' => 'required',
            'tanggal' => 'required',
        ]);
        //dd($request);
        $lhps = new LHP();
        $lhps -> id_penugasan = $request->id_penugasan;
        $lhps -> tanggal = $request->tanggal;
        $lhps -> id_cabang = $request->id_cabang;
        $lhps -> status_verifikasi = "Dalam Pemeriksaan";

        // dd($lhps);
       if($lhps->save()){
            $temuans = $request->audit;
            foreach($temuans as $audit){
                $temuanAudit = new TemuanAudit();
                $temuanAudit->id_lhps = $lhps->id;
                $temuanAudit->deskripsi_temuan = $audit['deskripsi_audit'];


                if($temuanAudit->save()){
                    $bukti = $request->buktiTemuan;
                    $newDir = public_path().'/buktitemuan/'.$temuanAudit->id.'/';

                    if (!file_exists($newDir)) {
                        mkdir($newDir, 0755, true);
                    }

                    foreach($bukti as $buktiTemuan){
                        $bkTemuan = new BuktiTemuan();
                        $bkTemuan->id_temuan_audit = $temuanAudit->id;
                        $newUrl = 'http://127.0.0.1:8000/buktitemuan/'.$temuanAudit->id.'/'.$buktiTemuan['file'];
                        $bkTemuan->bukti_temuan  = $newUrl;
                        dd($bkTemuan);
                        $bkTemuan->save();


                    }


                }
            }
            return redirect()->route('')->with('success', 'Data LHPS berhasil di buat');
       }else{
            return redirect()->back()->with('faild', 'Data LHPS gagal di buat');
       }


    }

    public function edit($id)
    {
        $lhp = LHP::findOrFail($id);
        $cabang = DataCabang::all();
        $penugasan = DataPenugasan::all();
        return view('lhp.edit', compact('lhp', 'cabang', 'penugasan'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
            'id_penugasan' => 'required',
            'id_cabang' => 'required',
            'tanggal' => 'required',
        ]);

        $lhps = new LHP();
        $lhps -> id_penugasan = $request->id_penugasan;
        $lhps -> tanggal = $request->tanggal;
        $lhps -> id_cabang = $request->id_cabang;
        $lhps -> status_verifikasi = "Dalam Pemeriksaan";

       if($lhps->save()){
            $temuan = $request->temuan;
            foreach($temuan as $audit){
                $temuanAudit = new TemuanAudit();
                $temuanAudit->id_lhps = $lhps->id;
                $temuanAudit->deskripsi_temuan = $audit['deskripsi_audit'];

                if($temuanAudit->save()){
                    $bukti = $request->buktiTemuan;
                    $newDir = public_path().'/buktitemuan/'.$temuanAudit->id.'/';

                    if (!file_exists($newDir)) {
                        mkdir($newDir, 0755, true);
                    }

                    foreach($bukti as $buktiTemuan){
                        $bkTemuan = new BuktiTemuan();
                        $bkTemuan->id_temuan_audit = $temuanAudit->id;
                        $newUrl = 'http://127.0.0.1:8000/buktitemuan/'.$temuanAudit->id.'/'.$buktiTemuan['file'];
                        $bkTemuan->bukti_temuan  = $newUrl;
                        $bkTemuan->save();

                    }


                }
            }
            return redirect()->route('')->with('success', 'Data LHPS berhasil di buat');
       }else{
            return redirect()->back()->with('faild', 'Data LHPS gagal di buat');
       }
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
