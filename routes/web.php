<?php

use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
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
    return view('pertemuan5index'); // Contoh jika ingin lari ke index pertemuan 5
});

Route::get('pert5tugas', function () {
    return view('pertemuan5tugas'); // Contoh jika ingin lari ke index pertemuan 5
});

