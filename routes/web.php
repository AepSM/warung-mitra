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

Auth::routes();

Route::get('/', 'HomeController@index');
// Route::get('/', 'ClientController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('customer/{id}/delete', 'CustomerController@hapus')->name('customer.hapus');
    Route::resource('customer', 'CustomerController');

    Route::get('kategori/{id}/delete', 'KategoriController@hapus')->name('kategori.hapus');
    Route::resource('kategori', 'KategoriController');

    Route::get('kontak/{id}/delete', 'KontakController@hapus')->name('kontak.hapus');
    Route::resource('kontak', 'KontakController');

    Route::get('order/{id}/selesai', 'OrderController@selesai')->name('order.selesai');
    Route::get('order/history', 'OrderController@history')->name('order.history');
    Route::get('order/{id}/history/detail', 'OrderController@historyDetail')->name('order.history.detail');
    Route::get('order/{id}/history/hapus', 'OrderController@historyHapus')->name('order.history.hapus');
    Route::get('order/{id}/delete', 'OrderController@hapus')->name('order.hapus');
    Route::resource('order', 'OrderController');

    Route::get('produk/{id}/delete', 'ProdukController@hapus')->name('produk.hapus');
    Route::resource('produk', 'ProdukController');

    Route::get('slider/{id}/delete', 'SliderController@hapus')->name('slider.hapus');
    Route::resource('slider', 'SliderController');

    Route::get('tracking/{id}/delete', 'TrackingController@hapus')->name('tracking.hapus');
    Route::resource('tracking', 'TrackingController');
});
