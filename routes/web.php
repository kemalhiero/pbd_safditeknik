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

Route::get('/daftarbarangpelanggan', function () {  //pelanggan juga bisa
    return view('daftarbarangpelanggan');
});

Route::get('/datapembayaran', function () {
    return view('datapembayaran');
});

Route::get('/dataperbaikanbarang', function () {
    return view('dataperbaikanbarang');
});

Route::get('/datatransaksi', function () {
    return view('datatransaksi');
});

Route::get('/laporanpembayaran', function () {
    return view('laporanpembayaran');
});

// teknisi
Route::get('/konfirmasideskripsibarang', function () {
    return view('konfirmasideskripsibarang');
});

Route::get('/teknisiperbaikanbarang', function () {
    return view('teknisiperbaikanbarang');
});

// pelanggan
Route::get('/pelangganperbaikanbarang', function () {
    return view('pelangganperbaikanbarang');
});

