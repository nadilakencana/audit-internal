<?php

namespace App\Http\Controllers\Surabaya;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SurabayaController extends Controller
{
    public function index()
    {
        return view('datatable.surabaya.kota');
    }
}
