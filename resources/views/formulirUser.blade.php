@extends('layout/main')
@section('title','Form User')
@section('content')
  <div class="container-fluid mt-4 rounded">
    <form action="/user/simpanUser" method="POST">
    @csrf
    <div class="form-group w-25">
        <label>NIK</label>
        <input type="number" name="nik" class="form-control" placeholder="Masukkan NIK User" required>
        <div class="alert-danger">{{$errors->first('nik')}}</div>
    </div>
    <div class="form-group w-25">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama User" required>
        <div class="alert-danger">{{$errors->first('nama')}}</div>
    </div>
    <div class="form-group w-25">
        <label>Nomor HP</label>
        <input type="number" name="no_hp" class="form-control" placeholder="Masukkan No Handphone" required>
        <div class="alert-danger">{{$errors->first('no_hp')}}</div>
    </div>
    <div class="form-check w-25">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Masukkan Email User" required>
        <div class="alert-danger">{{$errors->first('email')}}</div>
    </div>
    <div class="form-check w-25">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password User" required>
        <div class="alert-danger">{{$errors->first('password')}}</div>
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN DATA" class="btn btn-outline-primary">
    </div>
    </form>
</div>
@endsection