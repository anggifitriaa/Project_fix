<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\laporanKasirController;
use App\Http\Controllers\KategoriController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes([
    'register' => false, // menghilangkan fitur regis
    'reset' => false, // menghilangkan fitur logout
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => [
//     'auth',
//     'role:admin',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });
//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

// Route::group(['prefix' => 'pengguna', 'middleware' => [
//     'auth',
//     'role:pengguna',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });
//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });

// Route::group(['prefix' => 'pembelian', 'middleware' => [
//     'auth',
//     'role:admin|kasir',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman pembelian';
//     });
//     Route::get('profile', function () {
//         return 'halaman laporan pembelian';
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

    Route::get('karyawan', function () {
        return view('karyawan.index');
    })->middleware(['role:admin']);

    Route::get('menu', function () {
        return view('menu.index');
    })->middleware(['role:admin']);

    Route::get('pembeli', function () {
        return view('pembeli.create');
    })->middleware(['role:admin']);

    Route::get('transaksi', function () {
        return view('transaksi.index');
    })->middleware(['role:admin']);

    Route::get('kategori', function () {
        return view('kategori.index');
    })->middleware(['role:admin']);

    Route::resource('karyawan', KaryawanController::class)->middleware(['role:admin']);
    Route::resource('menu', MenuController::class)->middleware(['role:admin']);
    Route::resource('pembeli', PembeliController::class)->middleware(['role:admin']);
    Route::resource('transaksi', TransaksiController::class)->middleware(['role:admin']);
    Route::resource('bank', BankController::class)->middleware(['role:admin']);
    Route::resource('kategori', KategoriController::class);

    Route::get('laporan', [TransaksiController::class, 'laporan']);




});
