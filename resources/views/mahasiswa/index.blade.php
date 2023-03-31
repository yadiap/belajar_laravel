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
                    <x-button-link url="/mahasiswa/{{$data['id']}}" text="Detail" color="secondary" />
                    <x-button-link url="/mahasiswa/{{$data['id']}}/edit" text="Edit" color="warning" />
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Hapus
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data {{ $data['nama'] }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah anda yakin akan menghapus data ini?
        </div>
        <div class="modal-footer">
            <form action="/mahasiswa/{{$data['id']}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection