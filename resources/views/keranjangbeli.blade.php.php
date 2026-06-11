@extends('template')

@section('title', 'Keranjang Belanja')

@section('konten')

    <center>
        <br />
        <br />

        <h3>Keranjang Belanja</h3>
        <br />

        <div style="text-align: left; margin-bottom: 10px;">
            <a href="/keranjang/tambah" class="btn btn-primary">Beli</a>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per Item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keranjang as $item)
                    <tr>
                        <td>{{ $item->ID }}</td>
                        <td>{{ $item->KodeBarang }}</td>
                        <td>{{ $item->Jumlah }}</td>

                        <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>

                        <td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>

                        <td>
                            <a href="/keranjang/hapus/{{ $item->ID }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin membatalkan pembelian ini?')">Batal</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
@endsection
