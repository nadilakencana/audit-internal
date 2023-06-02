<?php

namespace App\Http\Controllers\Bogor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BogorController extends Controller
{
    public function index()
    {
        return view('datatable.bogor.kota');
    }
    public function kab()
    {
        return view('datatable.bogor.kab');
    }
}
