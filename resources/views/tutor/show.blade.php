@extends('layouts.main')

@section('content')
<h1>Data Tutor | {{$data['id']}}</h1>

<div class="row">
  <div class="col-2">
    Nama Tutor
  </div>
  <div class="col">
    {{ $data['nama'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Kode Tutor
  </div>
  <div class="col">
    {{ $data['kode_tutor'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Jenis Kelamin
  </div>
  <div class="col">
    {{ ($data['gender'] == 0 ? "Laki-laki" : "Perempuan") }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Email
  </div>
  <div class="col">
    {{ $data['email'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Bidang
  </div>
  <div class="col">
    {{ $data['bidang'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Mata Kuliah
  </div>
  <div class="col">
    <ol>
      @foreach ($data->mata_kuliahs as $mata_kuliah)        
        <li>
          {{ $mata_kuliah->nama }}
        </li>
      @endforeach
    </ol>
  </div>
</div>
<div class="mt-2">
  <x-button-link url='/tutor' text="Kembali ke daftar" />
</div>
@endsection