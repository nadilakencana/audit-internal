<?php

namespace App\Http\Controllers\Sukabumi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SukabumiController extends Controller
{
    public function index()
    {
        return view('datatable.sukabumi.kab');
    }
}
