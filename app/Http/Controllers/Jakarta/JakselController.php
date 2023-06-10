<?php

namespace App\Http\Controllers\Jakarta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jaksel;

use PDF;

class JakselController extends Controller
{
    public function jakseladmin()
    {
        $jaksel = Jaksel::all();
        return view('backend.jakarta.jaksel.data', compact('jaksel'));
    }

    public function tambahjaksel(Request $request){
        // dd($request->all());
        $jaksel = Jaksel::create($request->all());
        return redirect()->route('jaksel-admin');
    }
    public function tampiljaksel($id){
        $data = Jaksel::find($id);
        return view('backend.jakarta.jaksel.edit', compact('data'));
    }
    public function updatejaksel(Request $request, $id){
        $data = Jaksel::find($id);
        $data->update($request->all());

        return redirect()->route('jaksel-admin');
    }
    public function hapusjaksel($id){
        $data = Jaksel::find($id);
        $data->delete();
        return redirect()->route('jaksel-admin');
    }

    public function exportpdfjaksel($id)
    {
        $data = Jaksel::find($id);

        view()->share('data', $data);
        $pdf = PDF::loadview('export.jakarta.jaksel_id');
        return $pdf->download('Hasil export jaksel.pdf');
    }
}
