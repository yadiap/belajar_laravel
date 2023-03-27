@extends('layouts.main')

@section('content')
<h1>Data Tutor | {{$data['id']}}</h1>

<div class="row">
  <div class="col-3">
    Nama
  </div>
  <div class="col">
    {{ $data['nama'] }}
  </div>
</div>
<div class="row">
  <div class="col-3">
    Kode Tutor
  </div>
  <div class="col">
    {{ $data['kode_tutor'] }}
  </div>
</div>
<div class="row">
  <div class="col-3">
    Gender
  </div>
  <div class="col">
    {{ ($data['gender'] == 0 ? "Laki-laki" : "Perempuan") }}
  </div>
</div>
<div class="row">
  <div class="col-3">
    Email
  </div>
  <div class="col">
    {{ $data['email'] }}
  </div>
</div>
<div class="row">
  <div class="col-3">
    Bidang
  </div>
  <div class="col">
    {{ $data['bidang'] }}
  </div>
</div>
<div class="mt-2">
  <x-button-link url='/home' text="Kembali ke Home" />
</div>
@endsection