<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MhsModel;

class MhsController extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = MhsModel::query()
        ->orderBy('id','desc')
        ->paginate(10);
        return view ('mahasiswa',['mahasiswa'=> $mahasiswa]);
    }

    public function search(Request $request){
        $cari = $request->cari;
        $mahasiswa = MhsModel::query()
        ->where('Nim','like','%'.$cari.'%')
        ->orwhere('Nama','like','%'.$cari.'%')
        ->paginate();

        return view('mahasiswa',['mahasiswa'=> $mahasiswa]);
    }

    public function formulirMhs(){
        return view('formulirMhs');
    }

    public function simpanMhs(Request $req){
        $bidang_minat = implode(",", $req->get('bidang_minat'));
        MhsModel::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bidang_minat' => $bidang_minat,
        ]);
        return redirect('/mahasiswa')->with('alertCreate','Data Baru Telah Berhasil Disimpan!');
    }

    public function editMhs($id)
    {
        $mahasiswa = MhsModel::find($id);
        return view('editMhs', ['mahasiswa' => $mahasiswa]);
    }

    public function updateMhs($id, Request $request)
    {
        $bidang_minat = implode(',',$request->bidang_minat);
        $mahasiswa = MhsModel::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $bidang_minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')->with('alertUpdate','Perubahan Data Telah Berhasil Disimpan!');
    }

    public function deleteMhs($id)
    {
        $mahasiswa = MhsModel::find($id);
        $mahasiswa->delete();

        return redirect('/mahasiswa')->with('alertDelete','Data Telah Berhasil Dihapus!');
    }

}
