<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
    
    public function tambahuser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users', 'email')->ignore($request->id)
            ],
            'notel' => [
                'required',
                Rule::unique('users', 'notel')->ignore($request->id)
            ],
            'password' => 'required',
        ], [
            'email.unique' => 'Email sudah digunakan.',
            'notel.unique' => 'Nomor telepon sudah digunakan.'
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'notel' => $request->notel,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
    
        Session::flash('success', 'Pendaftaran berhasil! Silakan masuk.');
    
        return redirect()->route('log');
    }
    
    public function register(){
        return view('regist');
    }

    // public function loginproses(Request $request)
    // {
    //     if(Auth::attempt($request -> only('email', 'password'))){
    //         return redirect('/home');
    //     }
    //     Session::flash('error', 'Email atau password salah.');
    //     return redirect('/log');
    // }

    public function loginproses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user(); // Mendapatkan data user yang sedang login
    
            $tables = DB::connection()->getDoctrineSchemaManager()->listTableNames();
    
            foreach ($tables as $table) {
                $columns = DB::getSchemaBuilder()->getColumnListing($table);
                
                // Cek apakah tabel memiliki kolom 'link'
                if (in_array('link', $columns)) {
                    $links = DB::table($table)->where('user_id', $user->id)->pluck('link');
    
                    // Memeriksa apakah ada link dalam tabel yang perlu dicek
                    if ($links->isNotEmpty()) {
                        foreach ($links as $link) {
                            // Mengarahkan pengguna ke link jika sudah login
                            return Redirect::away($link);
                        }
                    }
                }
            }
    
            return redirect('/home');
        }
    
        Session::flash('error', 'Email atau password salah.');
        return redirect('/log');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    
    public function hapususer($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('datauser');
    }
}

    


