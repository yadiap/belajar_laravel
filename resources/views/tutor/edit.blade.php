@extends('layouts.main')

@section('content')
<h1>{{ $title }}| {{$data['id']}}</h1>

<form action="/tutor/{{$data->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Tutor</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}"">
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
      <input type="input" class="form-control @error ('kode_tutor') is-invalid @enderror" name="kode_tutor" value={{ old('kode_tutor', $data['kode_tutor']) }}>
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
        <option value="0" @if ($data['gender'] == "0") selected @endif>Laki-laki</option>
        <option value="1" @if ($data['gender'] == "1") selected @endif>Perempuan</option>
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
      <input type="email" class="form-control @error ('nilai') is-invalid @enderror" name="email" value={{ old('email', $data['email']) }}>
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
      <input type="input" class="form-control @error ('bidang') is-invalid @enderror" name="bidang" value={{ old('bidang', $data['bidang']) }}>
      @error('usia')
      <div id="validationServer03Feedback" class="invalid-feedback">
        {{ $message }}.
      </div>
      @enderror
    </div>
  </div>

  <div class="mt-2">
    <x-button type="submit" text="Update" />
  </div>
</form>

@endsection