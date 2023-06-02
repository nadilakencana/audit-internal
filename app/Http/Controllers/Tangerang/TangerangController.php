<?php

namespace App\Http\Controllers\Tangerang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TangerangController extends Controller
{
    public function index()
    {
        return view('datatable.tangerang.kota');
    }
    public function tangsel()
    {
        return view('datatable.tangerang.tangsel');
    }
    public function kab()
    {
        return view('datatable.tangerang.kab');
    }
}
