<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

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

    public function detail(Request $request)
    {
        return view('home.detail', [
            'title' => 'Detail Mahasiswa',
            'data_mahasiswa' => Mahasiswa::find($request->id),
        ]);
    }
}
