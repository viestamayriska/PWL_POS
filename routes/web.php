<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// level
Route::get('/level', [LevelController::class, 'index']);
// kategori
Route::get('/kategori', [KategoriController::class, 'index']);
//user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
//tambah
Route::get('/user/tambah', [UserController::class, 'tambah']);
//tambah_simpan
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
//ubah
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
//ubah_simpan
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
//delete
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);