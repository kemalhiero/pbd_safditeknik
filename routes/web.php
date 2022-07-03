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
    return view('auth.login');
})->name('login.create');

// admin
Route::get('/admin', function () {
    return view('admin.adm-indexadmin');
});

Route::get('/admin-daftarkanpelanggan', function () {
    return view('admin.adm-daftarkanpelanggan');
});

Route::get('/admin-pelanggan', function () {
    return view('admin.adm-pelanggan');
});

Route::get('/admin-riwayat-transaksi', function () {
    return view('admin.adm-riwayat-transaksi');
});

Route::get('/admin-daftarbarangpelanggan', function () {  //pelanggan juga bisa
    return view('/admin.adm-daftarbarangpelanggan');
});

Route::get('/admin-pelangganbarang', function () {  //pelanggan juga bisa
    return view('admin.adm-pelangganbarang');
});

Route::get('/admin-datapembayaran', function () {   //pelanggan juga bisa
    return view('admin.adm-datapembayaran');
});

Route::get('/admin-datapengecekan', function () {
    return view('admin.adm-datapengecekan');
});

Route::get('/admin-laporanpembayaran', function () {
    return view('admin.adm-laporanpembayaran');
});

// teknisi
Route::get('/teknisi', function () {
    return view('teknisi.tkns-indexteknisi');
});

Route::get('/teknisi-konfirmasideskripsibarang', function () {
    return view('teknisi.tkns-konfirmasideskripsibarang');
});

Route::get('/teknisi-teknisipengecekanbarang', function () {
    return view('teknisi.tkns-teknisipengecekanbarang');
});

Route::get('/teknisi-teknisipembayaranbarang', function () {
    return view('teknisi.tkns-teknisipembayaranbarang');
});

Route::get('/teknisi-formbayar', function () {
    return view('teknisi.tkns-formbayar');
});

// pelanggan
Route::get('/pelanggan', function () {
    return view('pelanggan.plggn-indexpelanggan');
});

Route::get('/pelanggan-pelangganperbaikanbarang', function () {
    return view('pelanggan.plggn-pelangganperbaikanbarang');
});

Route::get('/pelanggan-daftarbarangpelanggan', function () {  //pelanggan juga bisa
    return view('pelanggan.plggn-daftarbarangpelanggan');
});

Route::get('/pelanggan-pelangganbarang', function () {  //pelanggan juga bisa
    return view('pelanggan.plggn-pelangganbarang');
});

Route::get('/pelanggan-datapembayaran', function () {   //pelanggan juga bisa
    return view('pelanggan.plggn-datapembayaran');
});
