<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Tutor;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home', [
            'title' => 'Home',
            'user' => "Yadi",
            'usia' => 18,
            'isMember' => true,
            'grade' => 100,
            'list_mahasiswa' => Mahasiswa::all(),
        ]);
    }

    public function daftar_mahasiswa()
    {
        return view('home.daftar_mahasiswa', [
            'title' => 'Daftar Mahasiswa',
            'daftar_mahasiswa' => Mahasiswa::all(),
        ]);
    }
    public function detail_mahasiswa(Request $request)
    {
        return view('home.detail_mahasiswa', [
            'title' => 'Detail Mahasiswa',
            'data_mahasiswa' => Mahasiswa::find($request->id),
        ]);
    }

    public function tambah_mahasiswa(Request $request)
    {
        return view('home.form_mahasiswa', [
            'title' => 'Edit Mahasiswa',
        ]);
    }

    public function simpan_tambah_mahasiswa(Request $request)
    {
        // dd($request->all());
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

        return redirect('/daftar_mahasiswa');
    }

    public function edit_mahasiswa(Request $request)
    {
        return view('home.form_edit_mahasiswa', [
            'title' => 'Edit Mahasiswa',
            'data' => Mahasiswa::find($request->id)
        ]);
    }

    public function update_mahasiswa(Request $request, $id)
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

        return redirect('/daftar_mahasiswa');
    }

    public function hapus_mahasiswa($id)
    {
        $data = Mahasiswa::find($id);  
        $data->delete();

        return redirect('/daftar_mahasiswa');
    }

    public function daftar_tutor()
    {
        return view('home.daftar_tutor', [
            'title' => 'Daftar Tutor',
            'daftar_tutor' => Tutor::all(),
        ]);
    }

    public function detail_tutor(Request $request)
    {
        return view('home.detail_tutor', [
            'title' => 'Detail Tutor',
            'data' => Tutor::find($request->id),
        ]);
    }

}
