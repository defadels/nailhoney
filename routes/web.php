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

Route::get('/', function () {
    return view('website.home');
});

Route::get('/produk', function () {
    return view('website.produk');
});

Route::get('/blog', function () {
    return view('website.blog');
});

Route::get('/kontak', function () {
    return view('website.kontak');
});

Route::get('/admin', function () {
    return view('admin.table');
});

Route::get('/admin-blog', function () {
    return view('admin.blog');
});

Route::get('/admin-spanduk', function () {
    return view('admin.spanduk');
});

Route::get('/admin-halaman', function () {
    return view('admin.halaman');
});

Route::get('/admin-produk', function () {
    return view('admin.produk');
});

Route::get('/admin-testimoni', function () {
    return view('admin.testimoni');
});

Route::get('/admin-pengaturan-menu', function () {
    return view('admin.menu');
});

Route::get('/admin-pengaturan-footer', function () {
    return view('admin.footer');
});

Route::get('/admin-pengaturan-user', function () {
    return view('admin.user');
});



