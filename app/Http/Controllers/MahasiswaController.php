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
        $validateData = $this->validate_data($request);

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
        
        $validateData = $this->validate_data($request);
            
        Mahasiswa::find($id)->update($validateData);

        return redirect('/mahasiswa');
    }

    public function destroy($mahasiswa)
    {
        $data = Mahasiswa::find($mahasiswa);  
        $data->delete();

        return redirect('/mahasiswa');
    }

    private function validate_data(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'gender' => 'required',
            'nilai' => 'required|integer',
            'usia' => 'required|integer',
            'alamat' => 'required',
        ], [
            'nama.required' => 'tidak boleh kosong',
            'nim.required' => 'tidak boleh kosong',
            'gender.required' => 'tidak boleh kosong',
            'nilai.required' => 'tidak boleh kosong',
            'usia.required' => 'tidak boleh kosong',
            'alamat.required' => 'tidak boleh kosong',
        ]);
        
        return $validateData;
    }
}
