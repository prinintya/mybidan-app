<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KehamilanController;
use App\Http\Controllers\PersalinanController;
use App\Http\Controllers\NifasController;
use App\Http\Controllers\KbController;
use App\Http\Controllers\AuthController;

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

//data
Route::get('/', [AdminController::class, 'index'])->middleware('admin');

Route::get('/data_pasien', [AdminController::class, 'data_pasien'])->middleware('admin');
Route::get('/data_kehamilan', [AdminController::class, 'data_kehamilan'])->middleware('admin');
Route::get('/data_persalinan', [AdminController::class, 'data_persalinan'])->middleware('admin');
Route::get('/data_nifas', [AdminController::class, 'data_nifas'])->middleware('admin');
Route::get('/data_kb', [AdminController::class, 'data_kb'])->middleware('admin');


//crud pasien
Route::get('/tambah_pasien', [PasienController::class, 'tambah_pasien'])->middleware('admin');
Route::post('/store_pasien', [PasienController::class, 'store_pasien'])->middleware('admin');
Route::post('/hapus_pasien', [PasienController::class, 'hapus_pasien'])->middleware('admin');
Route::get('/edit_pasien/{id}', [PasienController::class, 'edit_pasien'])->middleware('admin');
Route::post('/update_pasien', [PasienController::class, 'update_pasien'])->middleware('admin');
Route::post('/cari_pasien', [PasienController::class, 'cari_pasien']);



//crud kehamilan
Route::get('/tambah_kehamilan', [KehamilanController::class, 'tambah_kehamilan'])->middleware('admin');
Route::post('/store_kehamilan', [KehamilanController::class, 'store_kehamilan'])->middleware('admin');

//crud persalinan
Route::get('/tambah_persalinan', [PersalinanController::class, 'tambah_persalinan'])->middleware('admin');
Route::post('/store_persalinan', [PersalinanController::class, 'store_persalinan'])->middleware('admin');

//crud nifas
Route::get('/tambah_nifas', [NifasController::class, 'tambah_nifas'])->middleware('admin');
Route::post('/store_nifas', [NifasController::class, 'store_nifas'])->middleware('admin');

//crud kb
Route::get('/tambah_kb', [KbController::class, 'tambah_kb'])->middleware('admin');
Route::post('/store_kb', [KbController::class, 'store_kb'])->middleware('admin');

//autentikasi
Route::get('/register', [AuthController::class, 'register']);
Route::post('/store_register', [AuthController::class, 'store_register']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/store_login', [AuthController::class, 'store_login']);
Route::get('/logout', [AuthController::class, 'logout']);