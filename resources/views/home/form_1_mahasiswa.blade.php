@extends('layouts.main')

@section('content')
<h1>Edit Mahasiswa | {{$data_mahasiswa['id']}}</h1>

<form action="/update_mahasiswa" method="POST">
  @csrf

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
    </div>
    <div class="col">
      <input type="input" class="form-control" name="name" value={{ $data_mahasiswa['nama'] }}>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa</label>
    </div>
    <div class="col">
      <input type="input" class="form-control" name="nim" value={{ $data_mahasiswa['nim'] }}>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label class="form-label">Jenis Kelamin</label>
    </div>
    <div class="col">
      <select class="form-select" aria-label="Default select example">
        <option selected>{{ $data_mahasiswa['gender'] }}</option>
        <option value="0">Laki-laki</option>
        <option value="1">Perempuan</option>
      </select>
      <input type="input" class="form-control" name="nim" value={{ $data_mahasiswa['gender'] }}>
    </div>
  </div>
 
  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Usia</label>
    </div>
    <div class="col">
      <input type="input" class="form-control" name="nim" value={{ $data_mahasiswa['usia'] }}>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    </div>
    <div class="col">
      <input type="input" class="form-control" name="nim" value={{ $data_mahasiswa['alamat'] }}>
    </div>
  </div>

  <div class="mt-2">
    <x-button type="submit" text="Update" />
  </div>
</form>
@endsection