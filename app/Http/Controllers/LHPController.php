<?php

namespace App\Http\Controllers;

use App\Models\BuktiTemuan;
use App\Models\DataCabang;
use App\Models\DataPenugasan;
use Illuminate\Http\Request;
use App\Models\LHP;
use App\Models\TemuanAudit;
use Illuminate\Support\Facades\Auth;
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
        if(Auth::user()->level->nama == 'user'){
            $lhps = LHP::where('id_cabang', Auth::user()->id_cabang)->where('status_verifikasi', 'Approved Supervisor')->get();
        }else{
            $lhps = LHP::where('status_verifikasi', 'Dalam Pemeriksaan')->get();
        }

        return view('lhp.index', compact('lhps'));
    }

    public function lhp()
    {
        $lhp = LHP::where('status_verifikasi', 'Approved Supervisor')->get();
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
            // dd($temuans, $request->buktiTemuan);

            foreach($temuans as $audit){
                $temuanAudit = new TemuanAudit();
                $temuanAudit->id_lhps = $lhps->id;
                $temuanAudit->deskripsi_temuan = $audit['deskripsi_audit'];

                $temuanAudit->save();

            }

            $bukti =$request->buktiTemuan;
            // dd($bukti);


                $newDir = public_path().'/buktitemuan/'.$lhps->id;



            foreach($bukti as $buktiTemuan){
                    // dd($buktiTemuan);
                      $file = $buktiTemuan['file'];
                      $fileName = $file->getClientOriginalName();

                        if(!file_exists($newDir)){
                            mkdir($newDir, 0777, true);
                        }
                        $file->move($newDir, $fileName);
                    // $bukti->store($newDir);
                    $bkTemuan = new BuktiTemuan();
                    $bkTemuan->id_lhps = $lhps->id;
                    //$newUrl = $newDir.$filePath;
                    $bkTemuan->bukti_temuan  ='http://localhost:8000/buktitemuan/'.$lhps->id.'/'.$fileName ;
                    //  dd($bkTemuan);
                    $bkTemuan->save();
                }

            return redirect()->route('datalhp')->with('success', 'Data LHPS berhasil di buat');
       }else{
            return redirect()->back()->with('faild', 'Data LHPS gagal di buat');
       }


    }

    public function edit($id)
    {
        $lhp = LHP::findOrFail($id);
        $cabang = DataCabang::all();
        $penugasan = DataPenugasan::all();
        $buktiTemuan = BuktiTemuan::where('id_lhps', $lhp->id)->get();
        $ketTemuan = TemuanAudit::where('id_lhps', $lhp->id)->get();

        return view('lhp.edit', compact('lhp', 'cabang', 'penugasan', 'buktiTemuan', 'ketTemuan'));
    }

    public function update(Request $request, $id)
    {
       $request->validate([
            'id_penugasan' => 'required',
            'id_cabang' => 'required',
            'tanggal' => 'required',
        ]);

        $lhps = LHP::findOrFail($id);
        $lhps -> id_penugasan = $request->id_penugasan;
        $lhps -> tanggal = $request->tanggal;
        $lhps -> id_cabang = $request->id_cabang;
        $lhps -> status_verifikasi = "Dalam Pemeriksaan";

       if($lhps->save()){
        if($request->has("audit")){
            $temuan = $request->audit;
            foreach($temuan as $audit){
                if(array_key_exists('id', $audit)){
                    $temuanAudit = TemuanAudit::where('id', $audit['id'])->first();
                    $temuanAudit->id_lhps = $lhps->id;
                    $temuanAudit->deskripsi_temuan = $audit['deskripsi_audit'];
                    $temuanAudit->save();
                }else{
                    $temuanAudit = new TemuanAudit();
                    $temuanAudit->id_lhps = $lhps->id;
                    $temuanAudit->deskripsi_temuan = $audit['deskripsi_audit'];
                    $temuanAudit->save();
                }


            }

        }

        if($request->has('buktiTemuan')){
            $bukti =$request->buktiTemuan;
            // dd($bukti);
            $newDir = public_path().'/buktitemuan/'.$lhps->id;

                foreach($bukti as $buktiTemuan){
                    // dd($buktiTemuan);

                    // $bukti->store($newDir);
                    if(array_key_exists('id', $buktiTemuan)){
                        if(!empty($buktiTemuan['file'])){
                            $file = $buktiTemuan['file'];
                            $fileName = $file->getClientOriginalName();
                            if(!file_exists($newDir)){
                                mkdir($newDir, 0777, true);
                            }
                            $file->move($newDir, $fileName);

                            $bkTemuan = BuktiTemuan::where('id', $buktiTemuan['id'])->first();
                            $bkTemuan->id_lhps = $lhps->id;

                            $bkTemuan->bukti_temuan  = $lhps->id.'/'.$fileName ;
                            $bkTemuan->save();
                        }




                    }else{
                         if(!empty($buktiTemuan['file'])){
                            $file = $buktiTemuan['file'];
                            $fileName = $file->getClientOriginalName();
                            if(!file_exists($newDir)){
                                mkdir($newDir, 0777, true);
                            }
                            $file->move($newDir, $fileName);
                            $bkTemuan = new BuktiTemuan();
                            $bkTemuan->id_lhps = $lhps->id;
                            $bkTemuan->bukti_temuan  ='http://localhost:8000/buktitemuan/'.$lhps->id.'/'.$fileName ;
                            $bkTemuan->save();
                         }


                    }


                }
        }



            return redirect()->route('datalhp')->with('success', 'Data LHPS berhasil di ubah');
       }else{
            return redirect()->back()->with('faild', 'Data LHPS gagal di ubah');
       }
    }


    public function approveLHP(Request $request, $id){
        // $idx = $request->id;
        $lhp = LHP::where('id', $id)->first();
        $lhp->status_verifikasi = 'Approved Supervisor';
        $lhp->save();

        return response()->json([
            'status' => true,
            'message' => 'Data Berhasil di update Approved',
            'data' => $lhp
        ]);

    }

    public function ConfirmPerbaikan(Request $request){
        $idx = $request->id;
        $lhp = LHP::where('id', $idx)->first();
        $lhp->status_verifikasi = 'Dalam Pemeriksaan';
        $lhp->status_perbaikan = 'Telah di perbaiki';
        $lhp->tanggal_perbaikan = $request->tanggal;
        $lhp->keterangan_perbaikan = $request->keterangan;
        $lhp->save();

         return response()->json([
            'status' => true,
            'message' => 'Perbaikan audit berhasil di kirim',
            'data' => $lhp
        ]);

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
