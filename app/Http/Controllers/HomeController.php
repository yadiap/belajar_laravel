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
