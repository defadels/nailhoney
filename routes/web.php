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

// Route::get('/laravel', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('website.home');
// });

// Route::get('/produk', function () {
//     return view('website.produk');
// });

// Route::get('/blog', function () {
//     return view('website.blog');
// });

// Route::get('/kontak', function () {
//     return view('website.kontak');
// });



Route::name('website.')->namespace('Website')->group(function () {

    Route::get('/','HomeController@index')->name('home');
    Route::get('blog','BlogController@index')->name('blog');
    Route::get('produk','ProdukController@index')->name('produk');
    Route::get('kontak','KontakController@index')->name('kontak');

});

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('produk', 'ProdukController@index')->name('produk');
    Route::get('spanduk', 'SpandukController@index')->name('spanduk');
    Route::get('testimoni', 'TestimoniController@index')->name('testimoni');
    Route::get('blog', 'BlogController@index')->name('blog');
    Route::get('halaman', 'HalamanController@index')->name('halaman');

    Route::prefix('pengaturan')->name('pengaturan.')->namespace('Pengaturan')->group(function () {
        Route::get('/', 'MenuController@index')->name('menu');
        Route::get('footer/edit', 'MenuController@index')->name('footer.edit');
        Route::get('footer', 'FooterController@index')->name('footer');
        Route::get('user', 'UserController@index')->name('user');
    });

});

