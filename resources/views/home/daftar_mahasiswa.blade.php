@extends('layouts.main')

@section('content')
  <H1>{{ $title}}</H1>

  <x-button-link url="/tambah_mahasiswa" text="Tambah" color="secondary" />
  <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($daftar_mahasiswa as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['nim'] }}</td>
                <td>
                    <x-button-link url="/detail_mahasiswa/{{$data['id']}}" text="Detail" color="secondary" />
                    <x-button-link url="/edit_mahasiswa/{{$data['id']}}" text="Edit" color="warning" />
                    <x-button-link url="/hapus_mahasiswa" text="Hapus" color="danger" />
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection