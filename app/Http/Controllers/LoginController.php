<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Middleware;

class LoginController extends Controller{
    public function index(){
        return view('log');
    }
    public function user(Request $request){
        if($request->has('search')){
            $data = User::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = User::latest()->paginate(5);
        }
        return view('Datauser', compact('data'));
    }
    public function tambahuser(Request $request){
        $data = User::create([
            'image' => $request->image,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('log');
    }
    public function register(){
        return view('regist');
    }

    // public function tambahuser(Request $request){
    //     $data = User::create($request->all());
    //     if($request->hasFile('image')){
    //         $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
    //         $data->image = $request->file('image')->getClientOriginalName();
    //         $data->save();
    //     }
    //     return redirect()->route('log');
    // }

    public function loginproses(Request $request){
        if(Auth::attempt($request -> only('email', 'password'))){
            return redirect('/index');
        }
        return redirect('/log');
    }

    // public function registeruser(Request $request){
    //     // $request->validate([
    //     //     'name' => ['required', 'string', 'max:255'],
    //     //     'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
    //     //     'password' => ['required', 'min:8'],
    //     // ], [
    //     //     'name.required' => 'Username tidak boleh kosong',
    //     //     'email.required' => 'Email sudah terdaftar',
    //     //     'password.required' => 'Masukkan password minimal 8 karakter',
    //     // ]);

    //     User::create([
    //         'image' => $request->image,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'remember_token' => Str::random(60)
    //     ]);
    //     return redirect('/log');
    // }
    public function logout(){
        Auth::logout();
        return redirect('/log');
    }
    public function hapususer($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser');
    }
}

    


