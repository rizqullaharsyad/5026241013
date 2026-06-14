@extends('template')
@section('title', 'Edit Kursi')
@section('konten')

    <h2>Edit Data Kursi</h2>

    <form action="{{ route('kursi.update', $kursi->kodekursi) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Merk Kursi</label><br>
            <input type="text" name="merkkursi" maxlength="30" value="{{ $kursi->merkkursi }}" required>
        </p>
        <p>
            <label>Stock Kursi</label><br>
            <input type="number" name="stockkursi" min="0" value="{{ $kursi->stockkursi }}" required>
        </p>
        <p>
            <label>Tersedia (Y/T)</label><br>
            <input type="text" name="tersedia" maxlength="1" placeholder="Y atau T" value="{{ $kursi->tersedia }}" required style="text-transform: uppercase;">
        </p>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('kursi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection