@extends('layouts.app')

@section('content')
<h3>Edit Siswa</h3>

<form action="/siswa/{{ $siswa->id }}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}">
</div>

<div class="mb-3">
    <label>Kelas</label>
    <input type="text" name="kelas" class="form-control" value="{{ $siswa->kelas }}">
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ $siswa->jurusan }}">
</div>

<button class="btn btn-primary">Update</button>
<a href="/siswa" class="btn btn-secondary">Kembali</a>
</form>
@endsection
