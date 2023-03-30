@extends('layouts.main')

@section('content')
<h1>Tambah Mahasiswa</h1>

<form action="/mahasiswa" method="POST">
  @csrf

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('nama') is-invalid @enderror" name="nama" value={{ old('nama') }}>
      @error('nama')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>

  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('nim') is-invalid @enderror" name="nim" value={{ old('nim') }}>
      @error('nim')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror   
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label class="form-label">Jenis Kelamin</label>
    </div>
    <div class="col">
      <select id="gender"class="form-select @error ('gender') is-invalid @enderror" aria-label="Default select example" name="gender">
        <option disable selected>{{ old('gender') }}</option>
        <option value="0">Laki-laki</option>
        <option value="1">Perempuan</option>
      </select>
      @error('gender')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
  </div>
 
  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nilai</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('nilai') is-invalid @enderror" name="nilai" value={{ old('nilai') }}>
      @error('gender')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Usia</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('usia') is-invalid @enderror" name="usia" value={{ old('usia') }}>
      @error('usia')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Alamat</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('alamat') is-invalid @enderror" name="alamat" value={{ old('alamat') }}>
      @error('alamat')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
  </div>

  <div class="mt-2">
    <x-button type="submit" text="Tambah" />
  </div>
</form>
@endsection