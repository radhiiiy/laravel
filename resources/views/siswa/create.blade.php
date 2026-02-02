@extends('layouts.app')

@section('content')
<h3>Tambah Siswa</h3>

<form action="/siswa" method="POST">
@csrf
<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control">
</div>

<div class="mb-3">
    <label>Kelas</label>
    <input type="text" name="kelas" class="form-control">
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control">
</div>

<button class="btn btn-success">Simpan</button>
<a href="/siswa" class="btn btn-secondary">Kembali</a>
</form>
@endsection
