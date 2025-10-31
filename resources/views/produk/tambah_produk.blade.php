@extends('layouts.app')
@section('title', 'Tambah Produk')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Tambah Produk</h4>
                <a href="{{ route('produk.tabel_produk') }}" class="btn btn-primary">Kembali</a>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Kode Produk</label>
                            <input type="text" class="form-control" placeholder="Input Kode Produk"></input>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" placeholder="Input Nama Produk"></input>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="jenis_produk" class="form-label">Jenis Produk</label>
                            <select class="form-select" id="jenis_produk" name="jenis_produk">
                                <option selected disabled>Pilih Jenis Produk</option>
                                @foreach ($jenis_produk as $jenis)
                                    <option value="{{ $jenis }}">{{ $jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="" class="form-label">Harga Produk</label>
                            <input type="text" class="form-control" placeholder="Input Harga Produk"></input>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">&nbsp;</label>
                            <a href="{{ route('produk.tabel_produk') }}" class="btn btn-success w-100">simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
