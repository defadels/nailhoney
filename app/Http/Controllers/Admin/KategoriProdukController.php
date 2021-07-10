<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KategoriProduk;
use Validator;

class KategoriProdukController extends Controller
{
    public function index() {
        $title = "Kategori Produk";

        $kategori_produk = KategoriProduk::get();

        $description = "Halaman Kategori Produk";

        return view('admin.produk.kategori.index', compact('title', 
        'description',
        'kategori_produk'));
    }

    public function create() {
        $title = "Kategori Produk";

        $description = "Halaman Kategori Produk";

        return view('admin.produk.kategori.create', compact('title', 'description'));       
    }

    public function store() {
         $title = "Tambah Kategori Produk";

        $description = "Halaman Tambah Kategori Produk";

        return view('', compact('title', 'description'));
    }

    public function edit($id) {
        $title = "Edit ategori Produk";

        $description = "Halaman Edit Kategori Produk";

        return view('admin.produk.kategori.edit', compact('title', 'description'));
    }

    public function update(Request $req, $id) {

    }
}
