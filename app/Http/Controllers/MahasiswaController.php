<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index', [
            'title' => 'Daftar Mahasiswa',
            'daftar_mahasiswa' => Mahasiswa::all(),
        ]);
    }
    public function show(Request $request)
    {
        return view('mahasiswa.show', [
            'title' => 'Detail Mahasiswa',
            'data_mahasiswa' => Mahasiswa::find($request->mahasiswa),
        ]);
    }

    public function create(Request $request)
    {
        return view('mahasiswa.create', [
            'title' => 'Edit Mahasiswa',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'gender' => 'required',
            'nilai' => 'required',
            'usia' => 'required',
            'alamat' => 'required',
        ], [
            'nama.required' => 'tidak boleh kosong',
            'nim.required' => 'tidak boleh kosong',
            'gender.required' => 'tidak boleh kosong',
            'nilai.required' => 'tidak boleh kosong',
            'usia.required' => 'tidak boleh kosong',
            'alamat.required' => 'tidak boleh kosong',
        ]);

        Mahasiswa::create($validateData);

        return redirect('/mahasiswa');
    }

    public function edit(Request $request)
    {
        return view('mahasiswa.edit', [
            'title' => 'Edit Mahasiswa',
            'data' => Mahasiswa::find($request->mahasiswa)
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data = Mahasiswa::find($id);
        $data->nama = $request->input('nama');
        $data->nim = $request->input('nim');
        $data->gender = $request->input('gender');
        $data->nilai = $request->input('nilai');
        $data->usia = $request->input('usia');
        $data->alamat = $request->input('alamat');
        $data->update();

        return redirect('/mahasiswa');
    }

    public function destroy($mahasiswa)
    {
        $data = Mahasiswa::find($mahasiswa);  
        $data->delete();

        return redirect('/mahasiswa');
    }
}
