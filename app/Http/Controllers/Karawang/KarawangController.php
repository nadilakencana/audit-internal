<?php

namespace App\Http\Controllers\Karawang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KarawangController extends Controller
{
    public function index()
    {
        return view('datatable.karawang.kab');
    }
}
