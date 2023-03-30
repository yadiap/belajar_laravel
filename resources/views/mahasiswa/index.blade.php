@extends('layouts.main')

@section('content')
  <H1>{{ $title}}</H1>

  <x-button-link url="/mahasiswa/create" text="Tambah" color="secondary" />
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
                    <form action="/mahasiswa/{{$data['id']}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button-link url="/mahasiswa/{{$data['id']}}" text="Detail" color="secondary" />
                        <x-button-link url="/mahasiswa/{{$data['id']}}/edit" text="Edit" color="warning" />
                        <x-button type="submit" text="Hapus" color="danger" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection