<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController extends Controller
{
    public function user(){
        $user = User::all();
        return view('user', ['user' => $user]);
    }

    public function formulirUser(){
        return view('formulirUser');
    }

    public function simpanUser(Request $req){
        $user = User::create([
            'nik_user' => $req->nik,
            'nama_user' => $req->nama,
            'no_hp' => $req->no_hp,
            'email' => $req->email,
            'password' => md5($req->password)
        ]);
        return redirect('/user')->with('alertCreate', 'Data Berhasil Disimpan');
    }

    public function editUser($id){
        $user = User::find($id);
        return view('editUser',['user' => $user]);
    }

    public function updateUser($id, Request $request){
        $user = User::find($id);
        $user->nik_user = $request->nik;
        $user->nama_user = $request->nama;
        $user->no_hp = $request->no_hp;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/user')->with('alertUpdate', 'Data Berhasil Terupdate');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alertDelete', 'Data Berhasil Dihapus');
    }

    public function login(){
        return view('/login');
    }

    public function cekLogin(Request $req){
    $user = User::where('email', $req->email)
            ->where('password',md5($req->password))
            ->first();
        if($user){
            Auth::login($user);
            return redirect('/mahasiswa');
        }else{
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('alertLogout', 'Logout Berhasil');
    }

}
