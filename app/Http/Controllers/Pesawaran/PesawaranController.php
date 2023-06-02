<?php

namespace App\Http\Controllers\Pesawaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesawaranController extends Controller
{
    public function index()
    {
        return view('datatable.pesawaran.kab');
    }
}
