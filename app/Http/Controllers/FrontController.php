<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebHimti;
use App\Models\Jadwal_sharing;
use Illuminate\Support\Facades\Auth;
use App\Models\Acara;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.index', ['loggedIn' => Auth::check()]);
    }
    public function home(){
        return view('frontend.home');
    }
    public function data(){
        return view('frontend.data');
    }
    public function lokasi(){
        return view('frontend.lokasi');
    }
    public function jakarta(){
        return view('frontend.jakarta.jakarta');
    }
    public function dtacara(){
        $acara = Acara::all();
        return view('frontend.acara', compact('acara'));
    }
    public function klinik(){
        return view('frontend.klinik');
    }
}
