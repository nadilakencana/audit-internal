<?php

namespace App\Http\Controllers\Sidoarjo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SidoarjoController extends Controller
{
    public function index()
    {
        return view('datatable.sidoarjo.kab');
    }
}
