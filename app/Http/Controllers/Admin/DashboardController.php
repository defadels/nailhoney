<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\KategoriProduk;
use Storage;
use Image;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $description = 'Ini adalah halaman dashboard';
        $daftar_produk = Produk::get();

        return view('admin.table',compact('title','description','daftar_produk')); 
    }
}
