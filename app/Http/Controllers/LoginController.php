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
use Illuminate\Support\Facades\Hash;
use App\Models\DataCabang;
use App\Models\Level;

class LoginController extends Controller{

    public function index(){
        return view('login');
    }

    public function akun()
    {
        $akun = DB::table('users')->get();
        return view('akun.index', compact('akun'));
    }

    public function create()
    {
        $cabang = DataCabang::all();
        $level = Level::all();
        return view('akun.create',  compact('cabang', 'level'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users', 'email')
            ],
            'notel' => [
                'required',
                Rule::unique('users', 'notel')
            ],
            'password' => 'required',
            'id_level' => 'required',
            'id_cabang' => 'required',
        ],
        [
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
            'id_level' => $request->id_level,
            'id_cabang' => $request->id_cabang,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60)
        ]);
        $data->save();
        Session::flash('success', 'Data User berhasil ditambahkan.');

        return redirect()->route('akun'); // Pastikan route 'log' sesuai dengan yang ada di routes/web.php
    }

    public function edit($id)
    {
        $akun = User::findOrFail($id);
        $cabang = DataCabang::all();
        $level = Level::all();
        return view('akun.edit', compact('akun', 'cabang', 'level'));
    }

    // Fungsi untuk mengupdate data user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('users', 'email')->ignore($id)
            ],
            'notel' => [
                'required',
                Rule::unique('users', 'notel')->ignore($id)
            ],
            'id_level' => 'required',
            'id_cabang' => 'required',
            'password' => 'required',
        ],
        [
            'email.unique' => 'Email sudah digunakan.',
            'notel.unique' => 'Nomor telepon sudah digunakan.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update data user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->notel = $request->notel;
        $user->id_level = $request->id_level;
        $user->id_cabang = $request->id_cabang;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        Session::flash('success', 'Data pengguna berhasil diperbarui.');

        return redirect()->route('akun'); // Ganti 'users.index' dengan route yang sesuai
    }

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
            Session::flash('success', 'Anda berhasil login sebagai ');
            return redirect('/home');
        }

        Session::flash('error', 'Email atau password salah.');
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function destroy($id){
        $akun = User::find($id);
        $akun->delete();
        return redirect()->route('akun');
    }
}




