@extends('layouts.app')
@section('content')
<h4>Tambah Matkul Baru</h4>
<form action="{{ route('matkul.store') }}" method="post">
    {{csrf_field()}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        Terdapat beberapa kasalahan pada saat mengisi yang harus diperbaiki.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label for="id" class="control-label">Kode Mata Kuliah</label>
        <input type="text" class="form-control" name="id" placeholder="kode mata kuliah">
    </div>

    <div class="form-group">
        <label for="nama" class="control-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="nama">
    </div>
    <div class="form-group">
        <label for="sks" class="control-label">Jumlah SKS</label>
        <input type="text" class="form-control" name="sks" placeholder="jumlah sks">
    </div>
    <div class="form-group">
        <label for="kelas" class="control-label">kelas</label>
        <input type="text" class="form-control" name="kelas" placeholder="kelas">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('matkul.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection