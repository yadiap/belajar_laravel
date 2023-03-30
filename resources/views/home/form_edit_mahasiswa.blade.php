@extends('layouts.main')

@section('content')
<h1>Edit Mahasiswa | {{$data['id']}}</h1>

<form action="/update_mahasiswa/{{$data->id}}" method="POST">
  @csrf
  @method('PUT')

  <div class="row mb-3">
    <div class="col-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
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
      <label for="exampleFormControlInput1" class="form-label">Nomor Induk Mahasiswa</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('nim') is-invalid @enderror" name="nim" value={{ old('nim', $data['nim']) }}>
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
      <label for="exampleFormControlInput1" class="form-label">Nilai</label>
    </div>
    <div class="col">
      <input type="input" class="form-control @error ('nilai') is-invalid @enderror" name="nilai" value={{ old('nilai', $data['nilai']) }}>
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
      <input type="input" class="form-control @error ('usia') is-invalid @enderror" name="usia" value={{ old('usia', $data['usia']) }}>
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
      <input type="input" class="form-control @error ('alamat') is-invalid @enderror" name="alamat" value={{ old('alamat', $data['alamat']) }}>
      @error('alamat')
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