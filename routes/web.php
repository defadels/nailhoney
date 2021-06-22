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

