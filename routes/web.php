<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DaftarBarangController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\TeknisiController;

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

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login.create');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/register', [RegisterationController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisterationController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', LogoutController::class)->name('logout.invoke');

    // Pelanggan
    Route::prefix('/pelanggan')->group(function () {
        Route::get('/', [DaftarBarangController::class, 'index'])->name('pelanggan.index');
        Route::get('/create', [DaftarBarangController::class, 'create'])->name('pelanggan.create');
        Route::get('/check', [DaftarBarangController::class, 'check'])->name('pelanggan.check');
    });



    // Admin
});

// Teknisi
Route::prefix('/teknisi')->group(function () {
    Route::get('/', [TeknisiController::class, 'index'])->name('teknisi.index');
    Route::get('/check', [TeknisiController::class, 'check'])->name('teknisi.check');
    Route::get('/konfirmasi', [TeknisiController::class, 'konfirmasi'])->name('teknisi.konfirmasi');
    Route::get('/pembayaran', [TeknisiController::class, 'pembayaran'])->name('teknisi.pembayaran');
    Route::get('/checkout', [TeknisiController::class, 'checkOut'])->name('teknisi.checkout');
});


Route::get('/teknisi-formbayar', function () {

});

// pelanggan

// Route::get('/pelanggan-pelangganbarang', function () {  //pelanggan juga bisa
//     return view('pelanggan.plggn-pelangganbarang');
// });

// Route::get('/pelanggan-datapembayaran', function () {   //pelanggan juga bisa
//     return view('pelanggan.plggn-datapembayaran');
// });








// // admin
// Route::get('/admin', function () {
//     return view('admin.adm-indexadmin');
// });

// Route::get('/admin-daftarkanpelanggan', function () {
//     return view('admin.adm-daftarkanpelanggan');
// });

// Route::get('/admin-pelanggan', function () {
//     return view('admin.adm-pelanggan');
// });

// Route::get('/admin-riwayat-transaksi', function () {
//     return view('admin.adm-riwayat-transaksi');
// });

// Route::get('/admin-daftarbarangpelanggan', function () {  //pelanggan juga bisa
//     return view('/admin.adm-daftarbarangpelanggan');
// });

// Route::get('/admin-pelangganbarang', function () {  //pelanggan juga bisa
//     return view('admin.adm-pelangganbarang');
// });

// Route::get('/admin-datapembayaran', function () {   //pelanggan juga bisa
//     return view('admin.adm-datapembayaran');
// });

// Route::get('/admin-datapengecekan', function () {
//     return view('admin.adm-datapengecekan');
// });

// Route::get('/admin-laporanpembayaran', function () {
//     return view('admin.adm-laporanpembayaran');
// });

// teknisi
