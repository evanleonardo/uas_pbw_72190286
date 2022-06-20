@extends('layout/main')
@section('title','User')
@section('content')
  <div class="card-header">
    <a name="" id="" class="btn btn-warning" href="/user/formulirUser" role="button">
        <i class="bi bi-plus-square"></i><b> Add New Data User</b></a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/search">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0 bg-warning" type="submit">Search</button>
    </form>
</div>
<div class="card-body">
    @if (session('alertCreate'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('alertCreate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('alertUpdate'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ session('alertUpdate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session('alertDelete'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alertDelete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama User</th>
                <th scope="col">No.Handphone</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $no => $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->nik_user}}</td>
                    <td>{{$u->nama_user}}</td>
                    <td>{{$u->no_hp}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->password}}</td>
                    <td>
                        <a href="/user/editUser/{{$u->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/user/deleteUser/{{$u->id}}" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"
                        class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
            @endforeach           
        </tbody>
    </table>
</div>
@endsection