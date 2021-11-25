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
    Route::get('blog/{id}/detail','BlogController@detail')->name('blog.detail');
    
    Route::get('produk','ProdukController@index')->name('produk');
    Route::get('produk/detail','ProdukController@detail')->name('produk.detail');
    
    Route::get('kontak','KontakController@index')->name('kontak');

    Route::get('tentang', 'TentangController@index')->name('tentang');

});

Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {

    //Routing halaman dashboard
    
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //Routing halaman kategori produk
    Route::prefix('produk/kategori')->name('produk.')->group(function () {
        Route::get('/', 'KategoriProdukController@index')->name('kategori.index');
        Route::get('tambah', 'KategoriProdukController@create')->name('kategori.create');
        Route::post('tambah', 'KategoriProdukController@store')->name('kategori.store');
        Route::get('{id}/edit', 'KategoriProdukController@edit')->name('kategori.edit');
        Route::post('{id}/edit', 'KategoriProdukController@update')->name('kategori.update');
        Route::delete('{id}/edit', 'KategoriProdukController@destroy')->name('kategori.destroy');
     });

     //Routing halaman foto produk
     Route::prefix('produk/foto')->name('produk.')->group(function () {
        Route::get('{produk_id}/foto-produk', 'FotoProdukController@index')->name('foto.index');
        Route::get('{produk_id}/foto-produk/tambah', 'FotoProdukController@create')->name('foto.tambah');
        Route::post('foto-produk/tambah', 'FotoProdukController@store')->name('foto.store');
        Route::get('foto-produk/{id}/edit', 'FotoProdukController@edit')->name('foto.edit');
        Route::post('{id}/edit', 'FotoProdukController@update')->name('foto.update');
        Route::delete('{id}/edit', 'FotoProdukController@destroy')->name('foto.destroy');
     });

    //Routing halaman produk
    Route::resource('produk', 'ProdukController')->except(['show']);

    //Routing halaman pelanggan
    Route::resource('pelanggan', 'PelangganController')->except(['show']);
    
    
    //Routing halaman komisi
    Route::resource('komisi', 'KomisiController')->except(['show']);

    //Routing halaman kategori blog
    
    Route::prefix('blog/kategori')->name('blog.')->group(function () {
        Route::get('/', 'KategoriBlogController@index')->name('kategori.index');
        Route::get('tambah', 'KategoriBlogController@create')->name('kategori.create');
        Route::post('tambah', 'KategoriBlogController@store')->name('kategori.store');
        Route::get('{id}/edit', 'KategoriBlogController@edit')->name('kategori.edit');
        Route::post('{id}/edit', 'KategoriBlogController@update')->name('kategori.update');
        Route::delete('{id}/edit', 'KategoriBlogController@destroy')->name('kategori.destroy');
     });


    //Routing halaman blog
    
    Route::resource('blog', 'BlogController')->except(['show']);

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
    
    Route::resource('spanduk', 'SpandukController')->except(['show']);

        // Route::get('spanduk', 'SpandukController@index')->name('spanduk.index');
        // Route::get('spanduk/tambah', 'SpandukController@create')->name('spanduk.create');
        // Route::get('spanduk/edit', 'SpandukController@edit')->name('spanduk.edit');


    //Routing halaman testimoni

    Route::resource('testimoni', 'TestimoniController')->except(['show']);

        // Route::get('testimoni', 'TestimoniController@index')->name('testimoni.index');
        // Route::get('testimoni/tambah', 'TestimoniController@create')->name('testimoni.create');
        // Route::post('testimoni/tambah', 'TestimoniController@store')->name('testimoni.store');
        // Route::get('testimoni/{id}/edit', 'TestimoniController@edit')->name('testimoni.edit');
        // Route::post('testimoni/{id}/edit', 'TestimoniController@update')->name('testimoni.update');
    
    //Routing halaman laporan

    Route::resource('laporan', 'LaporanController')->except(['show', 'destroy']);

    // Routing halaman pengaturan user

    Route::prefix('pengaturan')->name('pengaturan.')->namespace('Pengaturan')->group(function () {
        Route::get('menu', 'MenuController@index')->name('menu.index');
        Route::get('menu/tambah', 'MenuController@create')->name('menu.create');
        Route::post('menu/tambah', 'MenuController@store')->name('menu.store');
        Route::get('menu/{id}/edit', 'MenuController@edit')->name('menu.edit');
        Route::post('menu/{id}/edit', 'MenuController@update')->name('menu.update');
        Route::delete('menu/{id}/destroy', 'MenuController@destroy')->name('menu.destroy');

        Route::get('footer', 'FooterController@index')->name('footer');
        
        Route::get('user', 'UserController@index')->name('user.index');
        Route::get('user/tambah', 'UserController@create')->name('user.create');
        Route::post('user/tambah', 'UserController@store')->name('user.store');
        Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');
        Route::post('user/{id}/edit', 'UserController@update')->name('user.update');
        Route::delete('user/{id}/destroy', 'UserController@destroy')->name('user.destroy');

        Route::get('pembayaran', 'PembayaranController@index')->name('pembayaran.index');
        Route::get('pembayaran/tambah', 'PembayaranController@create')->name('pembayaran.create');
        Route::post('pembayaran/tambah', 'PembayaranController@store')->name('pembayaran.store');
        Route::get('pembayaran/{id}/edit', 'PembayaranController@edit')->name('pembayaran.edit');
        Route::post('pembayaran/{id}/edit', 'PembayaranController@update')->name('pembayaran.update');
        Route::delete('pembayaran/{id}/destroy', 'PembayaranController@destroy')->name('pembayaran.destroy');

        Route::get('pengiriman', 'PengirimanController@index')->name('pengiriman.index');
        Route::get('pengiriman/tambah', 'PengirimanController@create')->name('pengiriman.create');
        Route::post('pengiriman/tambah', 'PengirimanController@store')->name('pengiriman.store');
        Route::get('pengiriman/{id}/edit', 'PengirimanController@edit')->name('pengiriman.edit');
        Route::post('pengiriman/{id}/edit', 'PengirimanController@update')->name('pengiriman.update');
        Route::delete('pengiriman/{id}/destroy', 'PengirimanController@destroy')->name('pengiriman.destroy');
    });


    Route::prefix('penjualan')->name('penjualan.')->namespace('Penjualan')->group(function () {
        Route::get('masuk', 'MasukController@index')->name('masuk.index');
        Route::get('masuk/tambah', 'MasukController@create')->name('masuk.create');
        Route::post('masuk/tambah', 'MasukController@store')->name('masuk.store');
        Route::get('masuk/{id}/edit', 'MasukController@edit')->name('masuk.edit');
        Route::post('masuk/{id}/edit', 'MasukController@update')->name('masuk.update');
        Route::get('masuk/{id}/konfirmasi', 'MasukController@konfirmasi')->name('masuk.konfirmasi');
        Route::post('masuk/{id}/konfirmasi', 'MasukController@proses')->name('masuk.proses');
        Route::delete('masuk/{id}/destroy', 'MasukController@destroy')->name('masuk.destroy');
        Route::get('masuk/daftar_pelanggan', 'MasukController@json_daftar_pelanggan')->name('masuk.daftar_pelanggan');
        Route::get('masuk/daftar_alamat', 'MasukController@json_daftar_alamat')->name('masuk.daftar_alamat');

        Route::get('proses', 'ProsesController@index')->name('proses.index');

        Route::get('kirim', 'KirimController@index')->name('kirim.index');

        Route::get('selesai', 'SelesaiController@index')->name('selesai.index');

        Route::get('batal', 'BatalController@index')->name('batal.index');
    
    });

});

    

