<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tabel_produk', function () {
    // Data dipecah menjadi beberapa array
    $kode_produk = ['BRG001', 'BRG002', 'BRG003'];
    $nama_produk = ['Pena', 'TV', 'Beras'];
    $jenis_produk = ['Alat Tulis', 'Elektronik', 'Sembako'];
    $harga_produk = [5000, 10000, 2000];
    $jumlah = count($jenis_produk);

    return view('produk.tabel_produk', compact(
        'kode_produk',
        'nama_produk',
        'jenis_produk',
        'harga_produk',
        'jumlah'
    ));
})->name('produk.tabel_produk');
Route::get('/tambah_produk', function () {
    return view('produk.tambah_produk');
})->name('produk.tambah_produk');
