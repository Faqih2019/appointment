<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Mahasiswa
route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'mahasiswaedit']);
route::get('/mahasiswa/show/{id}', [MahasiswaController::class, 'mahasiswashow']);
route::get('/mahasiswa/create', [MahasiswaController::class, 'mahasiswacreate']);
route::post('/mahasiswa/add', [MahasiswaController::class, 'mahasiswaadd']);

//Dosen
route::get('/dosen', [DosenController::class, 'dosen']);
route::get('/dosen/{id}/edit', [DosenController::class, 'dosenedit']);
route::get('/dosen/show/{id}', [DosenController::class, 'dosenshow']);
route::get('/dosen/create', [DosenController::class, 'dosencreate']);
route::post('/dosen/add', [DosenController::class, 'dosenadd']);

//Jadwal
route::get('/jadwal', [JadwalController::class, 'jadwal']);
route::get('/jadwaledit', [JadwalController::class, 'jadwaledit']);
route::get('/jadwalshow', [JadwalController::class, 'jadwalshow']);
