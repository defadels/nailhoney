<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk',compact('title','description'));
    }
}
