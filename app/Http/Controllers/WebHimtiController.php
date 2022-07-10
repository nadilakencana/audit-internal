<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebHimti;
use App\Models\Jadwal_sharing;
use App\Models\Acara;

class WebHimtiController extends Controller
{
    public function index(){
        return view('frontendhimti.home');
    }
    public function about(){
        return view('frontendhimti.about');
    }
    public function sharing(){
        $sharing = Jadwal_sharing::all();
        return view('frontendhimti.sharing', compact('sharing'));
    }
    public function tutorial(){
        return view('frontendhimti.tutorial');
    }
    public function detailacara(){
        $acara = Acara::all();
        return view('frontendhimti.detailacara', compact('acara'));
    }
    public function dtacara(){
        $acara = Acara::all();
        return view('frontendhimti.acara', compact('acara'));
    }
    public function klinik(){
        return view('frontendhimti.klinik');
    }
}
