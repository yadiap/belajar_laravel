<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {

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
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});