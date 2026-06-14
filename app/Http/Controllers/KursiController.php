<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel kursi
        $data = DB::table('kursi')->get();
        return view('kursi.index', compact('data'));
    }

    public function create()
    {
        return view('kursi.create');
    }

    public function store(Request $request)
    {
        // Menyimpan data baru ke tabel kursi
        DB::table('kursi')->insert([
            'merkkursi'  => $request->merkkursi,
            'stockkursi' => $request->stockkursi,
            'tersedia'  => $request->tersedia,
        ]);

        return redirect()->route('kursi.index')->with('success', 'Data kursi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Mencari data berdasarkan primary key 'kodekursi'
        $kursi = DB::table('kursi')->where('kodekursi', $id)->first();
        if (!$kursi) abort(404);

        return view('kursi.edit', compact('kursi'));
    }

    public function update(Request $request, $id)
    {
        // Memperbarui data berdasarkan primary key 'kodekursi'
        DB::table('kursi')->where('kodekursi', $id)->update([
            'merkkursi'  => $request->merkkursi,
            'stockkursi' => $request->stockkursi,
            'tersedia'  => $request->tersedia,
        ]);

        return redirect()->route('kursi.index')->with('success', 'Data kursi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Menghapus data berdasarkan primary key 'kodekursi'
        DB::table('kursi')->where('kodekursi', $id)->delete();

        return redirect()->route('kursi.index')->with('success', 'Data kursi berhasil dihapus!');
    }
}
