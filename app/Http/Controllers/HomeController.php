<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebHimti;
use App\Models\Jadwal_sharing;
use Illuminate\Support\Facades\Auth;
use App\Models\Acara;

class HomeController extends Controller
{
    public function home(){
        return view('dashboard.index');
    }
}
