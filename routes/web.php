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

Route::get('/laravel', function () {
    return view('welcome');
});

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
    Route::get('blog/{id}','BlogController@detail')->name('blog.detail');
    
    Route::get('produk','ProdukController@index')->name('produk');
    Route::get('produk/detail','ProdukController@detail')->name('produk.detail');
    
    Route::get('kontak','KontakController@index')->name('kontak');

});

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {

    //Routing halaman dashboard
    
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //Routing halaman kategori produk
    Route::prefix('produk/kategori')->name('produk.')->group(function () {
        Route::get('/', 'KategoriProdukController@index')->name('kategori.index');
        Route::get('tambah', 'KategoriProdukController@create')->name('kategori.create');
        Route::post('tambah', 'KategoriProdukController@add')->name('kategori.add');
        Route::get('{id}/edit', 'KategoriProdukController@edit')->name('kategori.edit');
        Route::post('{id}/edit', 'KategoriProdukController@update')->name('kategori.update');
     });

    //Routing halaman produk
    Route::resource('produk', 'ProdukController')->except(['show', 'destroy']);

    //Routing halaman pelanggan
    Route::resource('pelanggan', 'PelangganController')->except(['show', 'destroy']);
    
    
    //Routing halaman komisi
    Route::resource('komisi', 'KomisiController')->except(['show', 'destroy']);

    //Routing halaman kategori blog
    
    Route::prefix('blog/kategori')->name('blog.')->group(function () {
        Route::get('/', 'KategoriBlogController@index')->name('kategori.index');
        Route::get('tambah', 'KategoriBlogController@create')->name('kategori.create');
        Route::post('tambah', 'KategoriBlogController@add')->name('kategori.add');
        Route::get('{id}/edit', 'KategoriBlogController@edit')->name('kategori.edit');
        Route::post('{id}/edit', 'KategoriBlogController@update')->name('kategori.update');
     });


    //Routing halaman blog
    
    Route::resource('blog', 'BlogController')->except(['show', 'destroy']);

        // Route::get('blog', 'BlogController@index')->name('blog.index');
        // Route::get('blog/tambah', 'BlogController@create')->name('blog.create');
        // Route::post('blog/tambah', 'BlogController@add')->name('blog.add');
        // Route::get('blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
        // Route::post('blog/{id}/edit', 'BlogController@update')->name('blog.update');

    
    //Routing halaman halaman

    Route::resource('halaman', 'HalamanController')->except(['show']);

    

        // Route::get('halaman', 'HalamanController@index')->name('halaman.index');
        // Route::get('halaman/tambah', 'HalamanController@create')->name('halaman.create');
        // Route::get('halaman/edit', 'HalamanController@edit')->name('halaman.edit');
    
    
    //Routing halaman spanduk
    
    Route::resource('spanduk', 'SpandukController')->except(['show','destroy']);

        // Route::get('spanduk', 'SpandukController@index')->name('spanduk.index');
        // Route::get('spanduk/tambah', 'SpandukController@create')->name('spanduk.create');
        // Route::get('spanduk/edit', 'SpandukController@edit')->name('spanduk.edit');


    //Routing halaman testimoni

    Route::resource('testimoni', 'TestimoniController')->except(['show', 'destroy']);

        // Route::get('testimoni', 'TestimoniController@index')->name('testimoni.index');
        // Route::get('testimoni/tambah', 'TestimoniController@create')->name('testimoni.create');
        // Route::post('testimoni/tambah', 'TestimoniController@store')->name('testimoni.store');
        // Route::get('testimoni/{id}/edit', 'TestimoniController@edit')->name('testimoni.edit');
        // Route::post('testimoni/{id}/edit', 'TestimoniController@update')->name('testimoni.update');
    
    //Routing halaman laporan

    Route::resource('laporan', 'LaporanController')->except(['show', 'destroy']);

    // Routing halaman pengaturan user

    Route::prefix('pengaturan')->name('pengaturan.')->namespace('Pengaturan')->group(function () {
        Route::get('/', 'MenuController@index')->name('menu');
        Route::get('menu/tambah', 'MenuController@create')->name('menu.create');
        Route::get('menu/edit', 'MenuController@edit')->name('menu.edit');

        Route::get('footer', 'FooterController@index')->name('footer');
        
        Route::get('user', 'UserController@index')->name('user.index');
        Route::get('user/tambah', 'UserController@create')->name('user.create');
        Route::post('user/tambah', 'UserController@store')->name('user.store');
        Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
        Route::post('user/{id}/edit', 'UserController@update')->name('user.update');

        Route::get('pembayaran', 'PembayaranController@index')->name('pembayaran.index');
        Route::get('pembayaran/tambah', 'PembayaranController@create')->name('pembayaran.create');
        Route::post('pembayaran/tambah', 'PembayaranController@store')->name('pembayaran.store');
        Route::get('pembayaran/{id}/edit', 'PembayaranController@edit')->name('pembayaran.edit');
        Route::post('pembayaran/{id}/edit', 'PembayaranController@update')->name('pembayaran.update');

        Route::get('pengiriman', 'PembayaranController@index')->name('pengiriman.index');
        Route::get('pengiriman/tambah', 'PengirimanController@create')->name('pengiriman.create');
        Route::post('pengiriman/tambah', 'PengirimanController@store')->name('pengiriman.store');
        Route::get('pengiriman/edit', 'PengirimanController@edit')->name('pengiriman.edit');
        Route::post('pengiriman/{id}/edit', 'PengirimanController@update')->name('pengiriman.update');
    });

});

