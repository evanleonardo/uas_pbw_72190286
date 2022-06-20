@extends('layout/main')
@section('title','Form Mahasiswa')
@section('content')
        <div class="container-fluid mt-4 rounded">
            @php
                $bidang_minat = explode(',',$mahasiswa->Bidang_Minat);
            @endphp
        <form action="/mahasiswa/updateMhs/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
    @csrf
    @method('PUT')-
    <div class="form-group w-25">
        <label>NIM</label>
        <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->Nim }}">
    </div>
    <div class="form-group w-25">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->Nama }}">
    </div>
    <label>Gender</label>
    <div class="form-check w-25=">
        <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa->Gender = 'Perempuan' ? 'checked':''}} class="form-check-input">
        <label>Perempuan</label>
    </div>
    <div class="form-check w-25">
        <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa->Gender = 'Laki-laki' ? 'checked':''}} class="form-check-input">
        <label>Laki-laki</label>
    </div>
    <div class="form-group w-25">
        <label>Fakultas</label>
        <select name="jurusan" class="form-control">
            <option value="0">----Pilih Fakultas----</option>
            <option value="Fakultas Teologi" {{ $mahasiswa->Jurusan = 'Fakultas Teologi' ? 'selected':''}}>Fakultas Teologi</option>
            <option value="Fakultas Teknologi Informasi" {{ $mahasiswa->Jurusan = 'Fakultas Teknologi Informasi' ? 'selected':''}}>Fakultas Teknologi Informasi</option>
            <option value="Fakultas Arsitektur dan Desain" {{ $mahasiswa->Jurusan = 'Fakultas Arsitektur dan Desain' ? 'selected':''}}>Fakultas Arsitektur dan Desain</option>
            <option value="Fakultas Bisnis" {{ $mahasiswa->Jurusan = 'Fakultas Bisnis' ? 'selected':''}}>Fakultas Bisnis</option>
            <option value="Fakultas Bioteknologi" {{ $mahasiswa->Jurusan = 'Fakultas Bioteknologi' ? 'selected':''}}>Fakultas Bioteknologi</option>
            <option value="Fakultas Kedokteran" {{ $mahasiswa->Jurusan = 'Fakultas Kedokteran' ? 'selected':''}}>Fakultas Kedokteran</option>
            <option value="Fakultas Sosial Humoniora" {{ $mahasiswa->Jurusan = 'Fakultas Sosial Humoniora' ? 'selected':''}}>Fakultas Sosial Humoniora</option>
        </select>
    </div>
    <label>Program Studi</label>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Filsafat Keilahian" {{ in_array('Filsafat Keilahian', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Filsafat Keilahian</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Arsitektur" {{ in_array('Arsitektur', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Arsitektur</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Desain Produk" {{ in_array('Desain Produk', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Desain Produk</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Manajemen" {{ in_array('Manajemen', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Manajemen</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Akuntansi" {{ in_array('Akuntansi', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Akuntansi</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Biologi" {{ in_array('Biologi', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Biologi</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Informatika" {{ in_array('Informatika', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Informatika</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Sistem Informasi" {{ in_array('Sistem Informasi', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Sistem Informasi</label>
    </div>
    <div class="form-check w-25">
        <input type="checkbox" name="bidang_minat[]" value="Pend.Bahasa Inggris" {{ in_array('Pend.Bahasa Inggris', $bidang_minat) ? 'checked':'' }} class="form-check-input">
        <label>Pend.Bahasa Inggris</label>
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN DATA" class="btn btn-outline-primary">
    </div>
    </form>
</div>
@endsection