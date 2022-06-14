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
    return view('login');
});

// admin
Route::get('/admin', function () {
    return view('admin/indexadmin');
});

Route::get('/admin/daftarkanpelanggan', function () {
    return view('admin/daftarkanpelanggan');
});

Route::get('admin/pelanggan', function () {
    return view('admin/pelanggan');
});

Route::get('/admin/riwayat-transaksi', function () {
    return view('admin/riwayat-transaksi');
});

Route::get('/admin/daftarbarangpelanggan', function () {  //pelanggan juga bisa
    return view('/admin/daftarbarangpelanggan');
});

Route::get('/admin/pelangganbarang', function () {  //pelanggan juga bisa
    return view('admin/pelangganbarang');
});

Route::get('/admin/datapembayaran', function () {   //pelanggan juga bisa
    return view('admin/datapembayaran');
});

Route::get('/admin/datapengecekan', function () {
    return view('admin/datapengecekan');
});

Route::get('/admin/laporanpembayaran', function () {
    return view('admin/laporanpembayaran');
});

// teknisi
Route::get('/teknisi', function () {
    return view('teknisi/indexteknisi');
});

Route::get('/teknisi/konfirmasideskripsibarang', function () {
    return view('teknisi/konfirmasideskripsibarang');
});

Route::get('/teknisi/teknisipengecekanbarang', function () {
    return view('teknisi/teknisipengecekanbarang');
});

Route::get('/teknisi/teknisipembayaranbarang', function () {
    return view('teknisi/teknisipembayaranbarang');
});

Route::get('/teknisi/formbayar', function () {
    return view('teknisi/formbayar');
});

// pelanggan
Route::get('/pelanggan', function () {
    return view('pelanggan/indexpelanggan');
});

Route::get('/pelanggan/pelangganperbaikanbarang', function () {
    return view('pelanggan/pelangganperbaikanbarang');
});

Route::get('/pelanggan/daftarbarangpelanggan', function () {  //pelanggan juga bisa
    return view('/pelanggan/daftarbarangpelanggan');
});

Route::get('/pelanggan/pelangganbarang', function () {  //pelanggan juga bisa
    return view('pelanggan/pelangganbarang');
});

Route::get('/pelanggan/datapembayaran', function () {   //pelanggan juga bisa
    return view('pelanggan/datapembayaran');
});
