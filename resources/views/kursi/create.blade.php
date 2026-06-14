@extends('template')
@section('title', 'Tambah Kursi')
@section('konten')

    <h2>Tambah Data Kursi</h2>

    <form action="{{ route('kursi.store') }}" method="POST">
        @csrf
        <p>
            <label>Merk Kursi</label><br>
            <input type="text" name="merkkursi" maxlength="30" required>
        </p>
        <p>
            <label>Stock Kursi</label><br>
            <input type="number" name="stockkursi" min="0" required>
        </p>
        <p>
            <label>Tersedia (Y/T)</label><br>
            <input type="text" name="tersedia" maxlength="1" placeholder="Y atau T" required style="text-transform: uppercase;">
        </p>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('kursi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection