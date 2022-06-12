<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

// admin
Route::get('/daftarkanpelanggan', function () {
    return view('daftarkanpelanggan');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/riwayat-transaksi', function () {
    return view('riwayat-transaksi');
});

Route::get('/daftarbarangpelanggan', function () {  //pelanggan juga bisa
    return view('daftarbarangpelanggan');
});

Route::get('/pelangganbarang', function () {  //pelanggan juga bisa
    return view('pelangganbarang');
});

Route::get('/datapembayaran', function () {   //pelanggan juga bisa
    return view('datapembayaran');
});

Route::get('/datapengecekan', function () {
    return view('datapengecekan');
});

Route::get('/laporanpembayaran', function () {
    return view('laporanpembayaran');
});

// teknisi
Route::get('/konfirmasideskripsibarang', function () {
    return view('konfirmasideskripsibarang');
});

Route::get('/teknisipengecekanbarang', function () {
    return view('teknisipengecekanbarang');
});

Route::get('/teknisipembayaranbarang', function () {
    return view('teknisipembayaranbarang');
});

Route::get('/formbayar', function () {
    return view('formbayar');
});

// pelanggan
Route::get('/pelangganperbaikanbarang', function () {
    return view('pelangganperbaikanbarang');
});

