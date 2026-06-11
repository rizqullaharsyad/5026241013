<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('/pert5', function () {
    return view('pertemuan5');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaietambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaiestore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);

//CRUD Tabel Keranjang
Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);
