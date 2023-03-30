<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::controller(HomeController::class)->group(function (){
    Route::get('/home','index');
    Route::get('/daftar_mahasiswa', 'daftar_mahasiswa')->middleware('auth');
    Route::get('/detail_mahasiswa/{id}','detail_mahasiswa');
    Route::get('/tambah_mahasiswa','tambah_mahasiswa');
    Route::post('/tambah_mahasiswa','simpan_tambah_mahasiswa');
    Route::get('/edit_mahasiswa/{id}','edit_mahasiswa');
    Route::put('/update_mahasiswa/{id}','update_mahasiswa');
    Route::delete('/hapus_mahasiswa/{id}','hapus_mahasiswa');

    Route::get('/daftar_tutor', 'daftar_tutor')->middleware('auth');
    Route::get('/detail_tutor/{id}', 'detail_tutor' );
});


Route::get('/about', [AboutController::class, 'index']);

Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'indexLogin')->middleware('guest')->name('login');
    Route::post('/login', 'storeLogin');
    Route::post('/logout', 'storeLogout');
    Route::get('/register','indexRegister')->middleware('guest');
    Route::post('/register', 'storeRegister');
});