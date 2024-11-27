<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerKaryawan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/axel', [Controller::class, 'tampilmember']); // Menampilkan tabel member dari DB
Route::get('/tambahmember', [Controller::class, 'tambahmember']); // Menampilkan form tambah member
Route::post('/simpanmember', [Controller::class, 'simpanmember']); // Menyimpan data member baru
Route::get('/ubahmember/{kode_member}', [Controller::class, 'ubahmember']); // Menampilkan form edit member
Route::post('/simpanubahmember', [Controller::class, 'simpanubahmember']); // Menyimpan perubahan data member
Route::post('/simpanhapusmember', [Controller::class, 'simpanhapusmember']); // Menghapus data member

// Rute untuk karyawan
Route::get('/', [ControllerKaryawan::class, 'tampilkaryawan']); // Menampilkan tabel karyawan dari DB
Route::get('/tambahkaryawan', [ControllerKaryawan::class, 'tambahkaryawan']); // Menampilkan form tambah karyawan
Route::post('/simpankaryawan', [ControllerKaryawan::class, 'simpankaryawan']); // Menyimpan data karyawan baru
Route::get('/ubahkaryawan/{nama}', [ControllerKaryawan::class, 'ubahkaryawan']); // Menampilkan form edit karyawan
Route::post('/simpanubahkaryawan', [ControllerKaryawan::class, 'simpanubahkaryawan']); // Menyimpan perubahan data karyawan
Route::post('/simpanhapuskaryawan', [ControllerKaryawan::class, 'simpanhapuskaryawan']); // Menghapus data karyawan