<?php

namespace App\Http\Controllers\Depok;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepokController extends Controller
{
    public function index()
    {
        return view('datatable.depok.kotadepok');
    }
}
