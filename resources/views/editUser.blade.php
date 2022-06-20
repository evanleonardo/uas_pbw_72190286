@extends('layout/main')
@section('title','Form Edit User')
@section('content')
  <div class="container-fluid mt-4 rounded">
    <form action="/user/updateUser/{{ $user->id }}" method="POST" class="pt-2 pb-2">
    @csrf
    @method('PUT')
    <div class="form-group w-25">
        <label>NIK</label>
        <input type="number" name="nik" class="form-control" value="{{$user->nik_user}}">
    </div>
    <div class="form-group w-25">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{$user->nama_user}}">
    </div>
    <div class="form-group w-25">
        <label>Nomor HP</label>
        <input type="number" name="no_hp" class="form-control" value="{{$user->no_hp}}">
    </div>
    <div class="form-check w-25">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{$user->email}}">
    </div>
    <div class="form-check w-25">
        <label>Password</label>
        <input type="password" name="password" class="form-control" value="{{$user->password}}">
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN DATA" class="btn btn-outline-primary">
    </div>
    </form>
</div>
@endsection