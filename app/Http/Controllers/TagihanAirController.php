<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    public function index()
    {
        // mengambil data dari table tagihan_air
        $tagihan_air = DB::table('tagihan_air')->get();

        // mengirim data tagihan_air ke view index
        return view('tagihanair.index', ['tagihan_air' => $tagihan_air]);
    }

    // method untuk menampilkan view form tambah data
    public function tambah()
    {
        // memanggil view tambah
        return view('tagihanair.tambah');
    }

    // method untuk insert data ke table tagihan_air
    public function store(Request $request)
    {
        // insert data ke table tagihan_air
        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir' => $request->MeterAkhir
        ]);

        // alihkan halaman ke halaman nilaikuliah
        return redirect('tagihanair');
    }
}
