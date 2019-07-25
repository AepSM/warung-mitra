<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('produk/{id}/delete', 'ProdukController@hapus')->name('produk.hapus');
    Route::resource('produk', 'ProdukController');

    Route::get('kategori/{id}/delete', 'KategoriController@hapus')->name('kategori.hapus');
    Route::resource('kategori', 'KategoriController');

    Route::get('kontak/{id}/delete', 'KontakController@hapus')->name('kontak.hapus');
    Route::resource('kontak', 'KontakController');
});
