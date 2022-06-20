<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MhsModel;

class MhsAPIController extends Controller
{
    public function all(){
        $mahasiswa = MhsModel::all();
        return response()->json([
            'succsess'   => true,
            'message'    => 'Data Displayed Successfully',
            'data'       => $mahasiswa
        ],200);
    }

    public function create(Request $request){
        $mahasiswa = MhsModel::create([
            'nim'   => $request->nim,
            'nama'   => $request->nama,
            'gender'   => $request->gender,
            'jurusan'   => $request->jurusan,
            'bidang_minat'   => $request->bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'success'    => true,
                'message'    => 'Data Added Successfully',
            ],200);
        }else{
            return response()->json([
                'success'    => false,
                'message'    => 'Data Cannot be Added'
            ],401);
        }
    }

    public function update($id, Request $request){
        $mahasiswa = MhsModel::whereId($id)->update([
            'nim'   => $request->nim,
            'nama'   => $request->nama,
            'gender'   => $request->gender,
            'jurusan'   => $request->jurusan,
            'bidang_minat'   => $request->bidang_minat,
        ]);

        if($mahasiswa){
            return response()->json([
                'success'    => true,
                'message'    => 'Data Changed Successfully',
            ],200);
        }else{
            return response()->json([
                'success'    => false,
                'message'    => 'Data Cannot be Changed'
            ],400);
        }
    }

    public function delete($id){
        $mahasiswa = MhsModel::find($id);
        $mahasiswa -> delete();

        if($mahasiswa){
            return response()->json([
                'success'    => true,
                'message'    => 'Data Deleted Successfully',
            ],200);
        }else{
            return response()->json([
                'success'    => false,
                'message'    => 'Data Cannot be Deleted'
            ],400);
        }
    }
}
