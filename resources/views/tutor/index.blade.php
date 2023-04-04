@extends('layouts.main')

@section('content')
  <H1>{{ $title}}</H1>

  <x-button-link url="/tutor/create" text="Tambah" color="secondary" />
  <table class="table">
    <thead>
        <tr>
            <th class="col">#</th>
            <th class="col">Nama</th>
            <th class="col">Kode Tutor</th>
            <th class="col">Email</th>
            <th class="col-3">Mata Kuliah</th>
            <th class="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($daftar_tutor as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data['nama'] }}</td>
                <td>{{ $data['kode_tutor'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>
                    @foreach ($data->mata_kuliahs as $mata_kuliah)
                    <a href="/mata-kuliah/detail/{{ $mata_kuliah->id }}"> {{ $mata_kuliah->nama }}</a>   
                    @endforeach
                </td>
                <td>
                    <x-button-link url="/tutor/{{$data['id']}}" text="Detail" color="secondary" />
                    <x-button-link url="/tutor/{{$data['id']}}/edit" text="Edit" color="warning" />
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        Hapus
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $daftar_tutor->links() }}

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