<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function index()
    {
        return view('tutor.index', [
            'title' => 'Daftar Tutor',
            'daftar_tutor' => Tutor::paginate(5),
        ]);
    }
    public function show(Request $request)
    {
        return view('tutor.show', [
            'title' => 'Detail Tutor',
            'data' => Tutor::find($request->tutor),
        ]);
    }

    public function create(Request $request)
    {
        return view('tutor.create', [
            'title' => 'Tambah Tutor',
            'data_mata_kuliah' => MataKuliah::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $this->validate_data($request);
        // $validateData = 1;
        $tutor = Tutor::create($validateData);
        // SAve Multiple Mata Kuliah By Tutor Id
        $tutor->mata_kuliahs()->attach($validateData['mata_kuliah']);

        return redirect('/tutor');
    }

    public function edit(Request $request)
    {
        return view('tutor.edit', [
            'title' => 'Edit Tutor',
            'data' => Tutor::find($request->tutor),
            'data_mata_kuliah' => MataKuliah::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        
        $validateData = $this->validate_data($request);
            
        $tutor = Tutor::find($id);
        
        $update = $tutor->update($validateData);

        if ($update) {
            $tutor->mata_kuliahs()->sync($validateData['mata_kuliah']);
        }

        return redirect('/tutor')->with('success', 'Anda telah berhasil merubah data');
    }

    public function destroy($tutor)
    {
        // $data = Mahasiswa::find($mahasiswa);  
        // $data->delete();
        Tutor::destroy($tutor);

        return redirect('/tutor')->with('info', 'Anda telah berhasil menghapus data');
    }

    private function validate_data(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'kode_tutor' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'bidang' => 'required',
            'mata_kuliah' => 'required|max:4|min:1',
        ], [
            'nama.required' => 'tidak boleh kosong',
            'kode_tutor.required' => 'tidak boleh kosong',
            'gender.required' => 'tidak boleh kosong',
            'email.required' => 'tidak boleh kosong',
            'bidang.required' => 'tidak boleh kosong',
        ]);
        
        $validateData['mata_kuliah_id'] = 1;
        return $validateData;
    }
}
