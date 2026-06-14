@extends('template')
@section('title', 'Data Kursi')
@section('konten')

    <h2>Data Kursi</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('kursi.create') }}" class="btn btn-primary">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Kursi</th>
            <th>Merk Kursi</th>
            <th>Stock Kursi</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($data as $row)
            <tr>
                <td>{{ $row->kodekursi }}</td>
                <td>{{ $row->merkkursi }}</td>
                <td>{{ $row->stockkursi }}</td>
                <td>{{ $row->tersedia }}</td>
                <td>
                    <a href="{{ route('kursi.edit', $row->kodekursi) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kursi.destroy', $row->kodekursi) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data kursi.</td>
            </tr>
        @endforelse
    </table>
@endsection
