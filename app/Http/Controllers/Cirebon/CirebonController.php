<?php

namespace App\Http\Controllers\Cirebon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CirebonController extends Controller
{
    public function index()
    {
        return view('datatable.cirebon.kab');
    }
}
