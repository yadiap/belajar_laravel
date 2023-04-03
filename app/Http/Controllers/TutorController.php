<?php

namespace App\Http\Controllers;

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
            'title' => 'Edit Tutor',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $this->validate_data($request);

        Tutor::create($validateData);

        return redirect('/tutor');
    }

    public function edit(Request $request)
    {
        return view('tutor.edit', [
            'title' => 'Edit Tutor',
            'data' => Tutor::find($request->tutor)
        ]);
    }

    public function update(Request $request, $id)
    {
        
        $validateData = $this->validate_data($request);
            
        Tutor::find($id)->update($validateData);

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
        ], [
            'nama.required' => 'tidak boleh kosong',
            'kode_tutor.required' => 'tidak boleh kosong',
            'gender.required' => 'tidak boleh kosong',
            'email.required' => 'tidak boleh kosong',
            'bidang.required' => 'tidak boleh kosong',
        ]);
        
        return $validateData;
    }
}
