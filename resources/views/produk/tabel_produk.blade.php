@extends('layouts.app')
@section('title', 'Produk')
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Halaman Produk</h4>
            <div>
                <a href="{{ route('produk.tambah_produk') }}" class="btn btn-primary">Tambah Produk</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Kode produk</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @while ($i < $jumlah)
                        <tr>
                            <td>{{ $kode_produk[$i] }}</td>
                            <td>{{ $nama_produk[$i] }}</td>
                            <td>{{ $jenis_produk[$i] }}</td>
                            <td>{{ $harga_produk[$i] }}</td>
                        </tr>
                        <?php $i++; ?>
                    @endwhile
                </tbody>
            </table>
        </div>
    </div>

@endsection
