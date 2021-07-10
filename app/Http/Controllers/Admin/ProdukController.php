<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use Validator;

class ProdukController extends Controller
{
    public function index() {
        $title = 'Kelola Produk';

        $daftar_produk = Produk::orderBy('id', 'desc')->paginate(10);

        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.index',compact('title',
        'description',
        'daftar_produk'));
    }
    
    public function create() {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.create',compact('title','description'));
    }
    
    public function store(Request $req) {
        
    }

    public function edit($id) {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.edit',compact('title','description'));
    }
}
