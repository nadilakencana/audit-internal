<?php

namespace App\Http\Controllers\Jakarta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JakpusController extends Controller
{
    public function index()
    {
        return view('datatable.data');
    }

    public function jakpus()
    {
        return view('datatable.jakarta.jakpus');
    }
    public function jakut()
    {
        return view('datatable.jakarta.jakut');
    }
    public function jaktim()
    {
        return view('datatable.jakarta.jaktim');
    }
    public function jaksel()
    {
        return view('datatable.jakarta.jaksel');
    }
}
