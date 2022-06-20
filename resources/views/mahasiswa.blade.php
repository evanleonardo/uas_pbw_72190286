@extends('layout/main')
@section('title','Mahasiswa')
@section('content')
        <div class="card-header">
            <a name="" id="" class="btn btn-success" href="/mahasiswa/formulirMhs" role="button"><i class="bi bi-plus-square"></i><b>Add New Data</b></a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/search">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alertUpdate') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif (session('alertDelete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                    <th scope="col">NIM</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Progam Studi</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $no =>$mhs)
                    <tr>
                        <th scope="row">{{++$no}}</th>
                        <td>{{$mhs->Nim}}</td>
                        <td>{{$mhs->Nama}}</td>
                        <td>{{$mhs->Gender}}</td>
                        <td>{{$mhs->Jurusan}}</td>
                        <td>{{$mhs->Bidang_Minat}}</td>
                        <td>
                            <a href="/mahasiswa/editMhs/{{$mhs->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="/mahasiswa/deleteMhs/{{ $mhs -> id}}" onclick="return confirm('Apakah anda yakin ingin menghapus data?')" 
                            class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> 
            Halaman {{$mahasiswa->currentPage()}} <br>
            {{$mahasiswa->count()}} from {{$mahasiswa->total()}} baris data
            <span class="float-right">{{$mahasiswa->links()}}</span>
        </div>
@endsection