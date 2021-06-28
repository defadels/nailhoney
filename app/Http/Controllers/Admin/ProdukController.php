<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.index',compact('title','description'));
    }
    
    public function create() {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.create',compact('title','description'));
    }
    
    public function edit() {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.edit',compact('title','description'));
    }
}
