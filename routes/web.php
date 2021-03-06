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
route::post('/mahasiswa/change/{id}', [MahasiswaController::class, 'mahasiswachange']);
route::get('/mahasiswa/create', [MahasiswaController::class, 'mahasiswacreate']);
route::post('/mahasiswa/add', [MahasiswaController::class, 'mahasiswaadd']);
route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'mahasiswadelete']);

//Dosen
route::get('/dosen', [DosenController::class, 'dosen']);
route::get('/dosen/{id}/edit', [DosenController::class, 'dosenedit']);
route::get('/dosen/show/{id}', [DosenController::class, 'dosenshow']);
route::post('/dosen/change/{id}', [DosenController::class, 'dosenchange']);
route::get('/dosen/create', [DosenController::class, 'dosencreate']);
route::post('/dosen/add', [DosenController::class, 'dosenadd']);
route::get('/dosen/delete/{id}', [DosenController::class, 'dosendelete']);

//Jadwal
route::resource('/jadwal', JadwalController::class);
