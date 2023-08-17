<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LHP;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Verifikasi_LHPSController extends Controller
{

    public function verif()
    {
        $verif = DB::table('l_h_p_s')->get();
        return view('verif_lhp.index', compact('verif'));
    }

    public function update(Request $request, $id)
    {
        // Temukan data berdasarkan ID
        $data = LHP::findOrFail($id);

        // Ubah status verifikasi menjadi "sudah oke"
        $data->update([
            'status_verifikasi' => 'sudah oke',
        ]);

        return redirect()->back()->with('success', 'Status verifikasi berhasil diverifikasi.');
    }

}
