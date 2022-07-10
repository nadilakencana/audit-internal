<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Datauser;
use Illuminate\Http\Request; 

class DatauserController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $data = User::where('name', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else{
            $data = User::paginate(5);
        }
        return view('Datauser', compact('data'));
    }
    public function tambahdtuser(Request $request){
        $data = User::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('fotokategori/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datauser');
    }
    public function tampiluser($id){
        $data = user::find($id);
        return view('edituser', compact('data'));
    }
    public function updateuser(Request $request, $id){
        $data = user::find($id);
        $data->update($request->all());

        return redirect()->route('datauser');
    }
}
