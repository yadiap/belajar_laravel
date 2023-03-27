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


Route::get('/home',[HomeController::class, 'index'] );

Route::get('/daftar_mahasiswa',[HomeController::class, 'daftar_mahasiswa'] );
Route::get('/detail_mahasiswa/{id}',[HomeController::class, 'detail_mahasiswa'] );
Route::get('/daftar_tutor',[HomeController::class, 'daftar_tutor'] );
Route::get('/detail_tutor/{id}',[HomeController::class, 'detail_tutor'] );


Route::get('/about', [AboutController::class, 'index']);
Route::get('/login', [AuthController::class, 'indexLogin']);
Route::get('/register', [AuthController::class, 'indexRegister']);