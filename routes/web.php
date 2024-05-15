<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('index');

Route::get('/home', function () {
    return view('appearance.index');
});

Route::get('/transaksi', function () {
    return view('admin.transaksi');
})->name('transaksi');

Route::get('/settings', function () {
    return view('admin.settings');
})->name('settings');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::get('/data-pelanggan', function () {
    return view('admin.datapelanggan');
})->name('datapelanggan');

Route::get('/keranjang', function () {
    return view('appearance.keranjang');
})->name('keranjang');


Route::get('/buku', 'App\Http\Controllers\Admin\BukuController@index')->name('index.buku');
Route::get('/buku/create', 'App\Http\Controllers\Admin\BukuController@create')->name('create.buku');
Route::post('/buku/create/store', 'App\Http\Controllers\Admin\BukuController@store')->name('store.buku');
Route::get('/buku/edit/{id}', 'App\Http\Controllers\Admin\bukuController@edit')->name('edit.buku');
