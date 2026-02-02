@extends('layouts.app')

@section('content')

<a href="/siswa/create" class="btn btn-primary mb-3">Tambah Siswa</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswas as $siswa)
            <tr>
               <td>{{ $loop->iteration }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->kelas }}</td>
        <td>{{ $siswa->jurusan }}</td>
        <td>
            <a href="/siswa/{{ $siswa->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

            <form action="/siswa/{{ $siswa->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
            </tr>
    @endforeach
</table>
