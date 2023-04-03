<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TutorController;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
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

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('tutor', TutorController::class);

Route::controller(HomeController::class)->group(function (){
    Route::get('/home','index');   
});

Route::get('/about', [AboutController::class, 'index']);

Route::controller(AuthController::class)->group(function (){
    Route::get('/login', 'indexLogin')->middleware('guest')->name('login');
    Route::post('/login', 'storeLogin');
    Route::post('/logout', 'storeLogout');
    Route::get('/register','indexRegister')->middleware('guest');
    Route::post('/register', 'storeRegister');
});

Route::get('/mata-kuliah/detail/{matakuliah}', function (MataKuliah $matakuliah) {
    return view('detail-matakuliah', [
        'title' => 'Data Mata Kuliah',
        'data' => $matakuliah,
    ]);
});