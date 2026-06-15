<!-- Menghubungkan dengan view template -->
@extends('template')

@section('title', 'Tagihan Air')
@section('konten')
    <center>
        <br />

        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>No Meteran</th>
                <th>Penggunaan</th>
                <th>Total Tagihan</th>

            </tr>
            @foreach ($tagihan_air as $t)

                <tr>
                    <td>{{ $t->ID }}</td>
                    <td>{{ $t->NoMeteran }}</td>
                    <td>Rp {{ number_format($t->MeterAkhir - $t->MeterAwal, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format(($t->MeterAkhir - $t->MeterAwal)* 5000) }}</td>
                    <td>
                        |

                    </td>
                </tr>
            @endforeach
        </table>
        <a href="/eas/tambah/" class="btn btn-danger">Input Tagihan Baru</a>
    </center>

@endsection
