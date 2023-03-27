@extends('layouts.main')

@section('content')
<H1>{{ $title}}</H1>
<table class="table">
  <thead>
      <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Kode Tutor</th>
          <th scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($daftar_tutor as $data)
          <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $data['nama'] }}</td>
              <td>{{ $data['kode_tutor'] }}</td>
              <td>
                  <x-button-link url="/detail_tutor/{{$data['id']}}" text="Detail" color="secondary" />
              </td>
          </tr>
      @endforeach
  </tbody>
</table>@endsection