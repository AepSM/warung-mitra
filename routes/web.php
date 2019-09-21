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
Route::get('/tampilProduk', 'ClientController@tampilProduk');
Route::get('/tampilSlider', 'ClientController@tampilSlider');
Route::get('/tampilSliderSide', 'ClientController@tampilSliderSide');
Route::get('/detail/{id}', 'ClientController@detail')->name('detail');
Route::get('/countCart', 'ClientController@countCart')->name('count_cart');
Route::post('/simpanCart', 'ClientController@insertCart')->name('simpan_cart');
Route::get('/order', 'ClientController@order')->name('order');
Route::get('/orderData', 'ClientController@orderData')->name('order_data');
Route::get('/pembayaran', 'ClientController@pembayaran')->name('pembayaran');
Route::get('/metodePembayaran', 'ClientController@metodePembayaran')->name('metode_pembayaran');

Route::get('/customer/login', 'CustomerLoginController@showLoginForm')->name('customer.loginform');
Route::get('/customer/register', 'CustomerLoginController@showRegisterForm')->name('customer.registerform');
Route::post('/customer/login', 'CustomerLoginController@login')->name('customer.login');
Route::post('/customer/register', 'CustomerLoginController@register')->name('customer.register');
Route::get('/customer/home', 'CustomerLoginController@index')->middleware('auth:customer');
Route::get('/customer/logout', 'CustomerLoginController@logout')->name('customer.logout');

Route::get('/session/tampil','SessionController@tampilkanSession');
Route::get('/session/buat','SessionController@buatSession');
Route::get('/session/hapus','SessionController@hapusSession');

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
