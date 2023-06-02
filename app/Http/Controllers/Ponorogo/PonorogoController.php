<?php

namespace App\Http\Controllers\Ponorogo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PonorogoController extends Controller
{
    public function index()
    {
        return view('datatable.ponorogo.kab');
    }
}
