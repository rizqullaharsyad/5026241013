<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('pert2', function () {
    return view('pertemuan2');
});

Route::get('pert3', function () {
    return view('pertemuan3');
});

Route::get('pert3tugas', function () {
    return view('pertemuan3tugas');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('pert5index', function () {
    return view('pertemuan5index');
});

Route::get('pert5tugas', function () {
    return view('pertemuan5tugas');
});

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore',[PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate',[PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

