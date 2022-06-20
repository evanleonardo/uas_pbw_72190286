@extends('layout/main')
@section('title','Form Mahasiswa')
@section('content')
        <div class="container-fluid mt-4 rounded">
    <form action="/mahasiswa/simpanMhs" method="POST">
    @csrf
    <div class="form-group w-25">
        <label>NIM</label>
        <input type="number" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa">
    </div>
    <div class="form-group w-25">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap Mahasiswa">
    </div>
    <label>Gender</label>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Perempuan" class="form-check-input">
        <label>Perempuan</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Laki-laki" class="form-check-input">
        <label>Laki-laki</label>
    </div>
    <div class="form-group w-25">
        <label>Fakultas</label>
        <select name="jurusan" class="form-control">
            <option value="0">----Pilih Fakultas----</option>
            <option value="Fakultas Teologi">Fakultas Teologi</option>
            <option value="Fakultas Teknologi Informasi">Fakultas Teknologi Informasi</option>
            <option value="Fakultas Arsitektur dan Desain">Fakultas Arsitektur dan Desain</option>
            <option value="Fakultas Bisnis">Fakultas Bisnis</option>
            <option value="Fakultas Bioteknologi">Fakultas Bioteknologi</option>
            <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
            <option value="Fakultas Sosial Humoniora">Fakultas Sosial Humoniora</option>
        </select>
    </div>
    <label>Program Studi</label>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Filsafat Keilahian" class="form-check-input">
        <label>Filsafat Keilahian</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Arsitektur" class="form-check-input">
        <label>Arsitektur</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Desain Produk" class="form-check-input">
        <label>Desain Produk</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Manajemen" class="form-check-input">
        <label>Manajemen</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Akuntansi" class="form-check-input">
        <label>Akuntansi</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Biologi" class="form-check-input">
        <label>Biologi</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Informatika" class="form-check-input">
        <label>Informatika</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Sistem Informasi" class="form-check-input">
        <label>Sistem Informasi</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Pend.Bahasa Inggris" class="form-check-input">
        <label>Pend.Bahasa Inggris</label>
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN DATA" class="btn btn-outline-primary">
    </div>
    </form>
</div>
@endsection