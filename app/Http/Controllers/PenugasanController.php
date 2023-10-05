<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnggotaPenugasan;
use App\Models\DataPenugasan;
use App\Models\Divisi;
use App\Models\DataCabang;
use App\Models\User;
class PenugasanController extends Controller
{
    public function index(){
        $penugasan = DataPenugasan::all();
        return view('data_penugasan.penugasan', compact('penugasan'));
    }

    public function create(){
        $divisi = Divisi::all();
        $cabang = DataCabang::all();
        $user = User::all();
        return view('data_penugasan.create', compact('divisi', 'cabang', 'user'));
    }

    public function getUser(Request $request){
        $query = $request->input('query');

        $options = User::where('name', 'LIKE', '%' . $query . '%')->get();

        return response()->json($options);
    }

    public function createPenugasan(Request $request){

        $penugasan = new DataPenugasan();
        $penugasan->status = 'Proses';
        $penugasan->tanggal = $request->tanggal;
        $penugasan->deskripsi = $request->deskripsi;
        // $penugasan->id_divisi = $request->id_divisi;
        $penugasan->id_cabang = $request->id_cabang;
        $penugasan->id_user_ketua = $request->id_user_ketua;
        // dd($penugasan);
        if($penugasan->save()){
             $anggota = $request->anggota;
            // dd($varians);
            foreach($anggota as $anggota){
                // dd($varian);
                $petugas = New AnggotaPenugasan();
                $petugas-> id_penugasan  =  $penugasan->id;
                $petugas-> id_anggota_user = $anggota['id_anggota_user'];
                // dd($brangVarian);
                $petugas->save();
            }

            return redirect()->route('penugasan.index')->with('success', 'Data penugasan berhasil di buat');
        }else{
            return redirect()->back();
        }
    }

    public function EditPenugasan($id){
        $penugasan = DataPenugasan::find($id);
        // $divisi = Divisi::all();
        $cabang = DataCabang::all();
        $user = User::all();
        $anggota = AnggotaPenugasan::where('id_penugasan', $penugasan->id)->get();

        $anggotas = '';
        foreach($anggota as $k=>$data){
            if($k < count($anggota) - 1){
                $anggotas = $anggotas.$data->user->name.', ';
            }else{
                $anggotas = $anggotas.$data->user->name;
            }

        }

        return view('data_penugasan.edit', compact('penugasan', 'anggota', 'anggotas', 'divisi', 'user', 'cabang'));
    }

    public function updateData(Request $request, $id){

        $penugasan = DataPenugasan::find($id);
        $penugasan->status = 'Proses';
        $penugasan->tanggal = $request->tanggal;
        $penugasan->deskripsi = $request->deskripsi;
        // $penugasan->id_divisi = $request->id_divisi;
        $penugasan->id_cabang = $request->id_cabang;
        $penugasan->id_user_ketua = $request->id_user_ketua;
        // dd($penugasan);
        if($penugasan->save()){
            if($request->has('anggota')){
                $anggotas = $request->anggota;
            // dd($varians);
                foreach($anggotas as $anggota){
                   if(array_key_exists('id', $anggota)){
                        $petugas = AnggotaPenugasan::where('id', $anggota['id'])->first();
                        $petugas-> id_penugasan  =  $penugasan->id;
                        $petugas-> id_anggota_user = $anggota['id_anggota_user'];
                        // dd($brangVarian);
                        $petugas->save();
                   }else{
                        $petugas = new AnggotaPenugasan();
                        $petugas-> id_penugasan  =  $penugasan->id;
                        $petugas-> id_anggota_user = $anggota['id_anggota_user'];
                        // dd($brangVarian);
                        $petugas->save();
                   }

                }
            }

            return redirect()->route('penugasan.index')->with('success', 'Data penugasan berhasil di buat');
        }else{
            return redirect()->back();
        }
    }

    public function HapusData($id){
        $penugasan = DataPenugasan::find($id);


        if($penugasan->delete()){
            return redirect()->back()->with('success', 'Data Berhasil di hapus');

        }else{
            return redirect()->back()->with('Data Berhasil di hapus');

        }
    }

}
