<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $list_mahasiswa = [
            [
                'nama' => 'Yadi',
                'nim' => '04512345',
                'nilai' => 95
            ],
            [
                'nama' => 'Rafika Ayun',
                'nim' => '04522222',
                'nilai' => 85
            ],
            [
                'nama' => 'Menanda Fuad',
                'nim' => '04533333',
                'nilai' => 70
            ],
            [
                'nama' => 'Fery',
                'nim' => '04544444',
                'nilai' => 70
            ],
            [
                'nama' => 'Evi',
                'nim' => '0455555',
                'nilai' => 85
            ],
        ];
    
        return view('home', [
            'title' => 'Home',
            'user' => "Yadi",
            'usia' => 18,
            'isMember' => true,
            'grade' => 100,
            'list_mahasiswa' => $list_mahasiswa,
        ]);
    }
}
