<?php

namespace App\Http\Controllers\Bekasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BekasiController extends Controller
{
    public function index()
    {
        return view('datatable.bekasi.kota');
    }
    public function kab()
    {
        return view('datatable.bekasi.kab');
    }
}
