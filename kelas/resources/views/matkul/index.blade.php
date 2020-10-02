@extends('layouts.app')
@section('content')
<h4>Menajemen Tabel Mata Kuliah</h4>
<a href="{{ route('matkul.create') }}" class="btn btn-info btn-sm">Tambah Mata Kuliah</a>
<table class="table table-responsive martop-sm">
    <thead>
        <th>Kode Mata Kuliah</th>
        <th>Nama</th>
        <th>Jumlah SKS</th>
        <th>Kelas</th>
    </thead>
    <tbody>
        @foreach ($mk as $m)
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->sks }}</td>
            <td>{{ $m->kelas }}</td>
            <td>
                <form action="{{ route('matkul.destroy', $m->id) }}" method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('matkul.edit', $m->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection