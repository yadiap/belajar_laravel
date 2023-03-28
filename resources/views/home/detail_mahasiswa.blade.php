@extends('layouts.main')

@section('content')
<h1>Data Mahasiswa | {{$data_mahasiswa['id']}}</h1>

<div class="row">
  <div class="col-2">
    Nama
  </div>
  <div class="col">
    {{ $data_mahasiswa['nama'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    NIM
  </div>
  <div class="col">
    {{ $data_mahasiswa['nim'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Gender
  </div>
  <div class="col">
    {{ ($data_mahasiswa['gender'] == 0 ? "Laki-laki" : "Perempuan") }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Usia
  </div>
  <div class="col">
    {{ $data_mahasiswa['usia'] }}
  </div>
</div>
<div class="row">
  <div class="col-2">
    Alamat
  </div>
  <div class="col">
    {{ $data_mahasiswa['alamat'] }}
  </div>
</div>
<div class="mt-2">
  <x-button-link url='/home' text="Kembali ke Home" />
</div>
@endsection