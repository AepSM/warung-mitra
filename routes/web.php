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

Route::get('/', 'ClientController@index');
Route::get('/tampilProduk', 'ClientController@tampilProduk');
Route::get('/tampilSlider', 'ClientController@tampilSlider');
Route::get('/tampilSliderSide', 'ClientController@tampilSliderSide');
Route::get('/detail/{id}', 'ClientController@detail');
Route::get('/order/{code}', 'ClientController@order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('kategori/{id}/delete', 'KategoriController@hapus')->name('kategori.hapus');
    Route::resource('kategori', 'KategoriController');

    Route::get('kontak/{id}/delete', 'KontakController@hapus')->name('kontak.hapus');
    Route::resource('kontak', 'KontakController');

    Route::get('produk/{id}/delete', 'ProdukController@hapus')->name('produk.hapus');
    Route::resource('produk', 'ProdukController');

    Route::get('slider/{id}/delete', 'SliderController@hapus')->name('slider.hapus');
    Route::resource('slider', 'SliderController');
});
