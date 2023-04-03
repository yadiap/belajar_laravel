@extends('layouts.main')

@section('content')
<h1>{{ $title }}</h1>

<form action="/tutor" method="POST">
  @csrf

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Tutor</label>
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
      <label for="exampleFormControlInput1" class="form-label">Kode Tutor</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('kode_tutor') is-invalid @enderror" name="kode_tutor" value={{ old('kode_tutor') }}>
      @error('kode_tutor')
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
      <label for="exampleFormControlInput1" class="form-label">Email</label>
    </div>
    <div class="col">
      <input type="email" class="form-control @error ('email') is-invalid @enderror" name="email" value={{ old('nilai') }}>
      @error('email')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Bidang</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('bidang') is-invalid @enderror" name="bidang" value={{ old('bidang') }}>
      @error('bidang')
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