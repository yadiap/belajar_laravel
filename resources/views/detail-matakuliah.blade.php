@extends('layouts.main')

@section('content')    

<table class="table">
  <h2>Daftar Tutor yang mengampu Mata Kuliah {{ $data->nama }} | {{ $data->kode }}</h2>
  <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Kode Tutor</th>
          <th scope="col">Email</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($data->tutors as $data)
          <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $data['nama'] }}</td>
              <td>{{ $data['kode_tutor'] }}</td>
              <td>{{ $data['email'] }}</td>
          </tr>
      @endforeach
  </tbody>
</table>
@endsection


