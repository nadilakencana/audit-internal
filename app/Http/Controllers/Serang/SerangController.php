<?php

namespace App\Http\Controllers\Serang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SerangController extends Controller
{
    public function index(){
        return view('datatable.serang.kab');
    }
}
