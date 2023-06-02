<?php

namespace App\Http\Controllers\Bandung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BandungController extends Controller
{
    public function index()
    {
        return view('datatable.bandung.kab');
    }
}
