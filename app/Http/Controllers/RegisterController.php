<?php

namespace App\Http\Controllers;

use App\Models\Register;                                                                          
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    

    // public function index(){
    //     // $data = Register::all();
    //     return view('regist');
    // }

    // public function store(Request $request ){
    //     $request->validate([
    //         'name'=> ['required', 'string', 'max:255'],
    //         'email'=> ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
    //         'password' => ['required']
    //     ]);
        
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password)
    //     ]);

    //     return redirect('/login');
    // }
}
