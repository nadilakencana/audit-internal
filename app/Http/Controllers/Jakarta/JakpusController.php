<?php

namespace App\Http\Controllers\Jakarta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jakpus;
use App\Models\Jaktim;
use App\Models\Jakut;
use App\Models\jaksel;

use PDF;

class JakpusController extends Controller
{
    public function index()
    {
        return view('datatable.data');
    }

    public function jakpus()
    {
        $jakpus = Jakpus::all();
        return view('datatable.jakarta.jakpus', compact('jakpus'));
    }
    public function jakut()
    {
        $jakut = Jakut::all();
        return view('datatable.jakarta.jakut', compact('jakut'));
    }
    public function jaktim()
    {
        $jaktim = Jaktim::all();
        return view('datatable.jakarta.jaktim', compact('jaktim'));
    }
    public function jaksel()
    {
        $jaksel = Jaksel::all();
        return view('datatable.jakarta.jaksel', compact('jaksel'));
    }

    public function jakpusadmin()
    {
        $jakpus = Jakpus::all();
        return view('backend.jakarta.jakpus.jakpus', compact('jakpus'));
    }

    public function tambahjakpus(Request $request){
        // dd($request->all());
        $jakpus = Jakpus::create($request->all());
        return redirect()->route('jakpus-admin');
    }
    public function tampiljakpus($id){
        $data = Jakpus::find($id);
        return view('backend.jakarta.jakpus.editjakpus', compact('data'));
    }
    public function updatejakpus(Request $request, $id){
        $data = Jakpus::find($id);
        $data->update($request->all());

        return redirect()->route('jakpus-admin');
    }
    public function hapusjakpus($id){
        $data = Jakpus::find($id);
        $data->delete();
        return redirect()->route('jakpus-admin');
    }

    public function exportpdfjakpus(Request $request)
    {
        $jakpus = Jakpus::all();

        view()->share('jakpus', $jakpus);
        $pdf = PDF::loadview('export.jakarta.jakpus_pdf');
        return $pdf->download('Hasil export jakpus.pdf');
    }
}
