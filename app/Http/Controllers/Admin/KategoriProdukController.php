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

        $kategori_produk = KategoriProduk::orderBy('id','desc')->paginate(10);

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

    public function store(Request $req) {
       $input = $req->all();

       $rules = [
           'nama' => 'required',
           'keterangan' => 'required'
       ];

       $messages = [
        'required' => ' :attribute wajib diisi.',
       ];

       $validate = Validator::make($input, $rules, $messages)->validate();

       $kategori = KategoriProduk::create(
           [
            'nama' => $req->nama,
            'keterangan' => $req->keterangan
           ]
        );


        return redirect()->route('admin.produk.kategori.index')
        ->with('sukses',$kategori->nama.' berhasil ditambahkan');
    }

    public function edit($id) {
        $title = "Edit ategori Produk";

        $description = "Halaman Edit Kategori Produk";

        $kategori = KategoriProduk::findorFail($id);

        return view('admin.produk.kategori.edit', compact('title', 
        'description',
        'kategori'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'nama' => 'required',
            'keterangan' => 'required'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();
        $kategori = KategoriProduk::findOrFail($id);
        $kategori->nama = $req->nama;
        $kategori->keterangan = $req->keterangan;

        $kategori->save();

        return redirect()->route('admin.produk.kategori.index')
        ->with('sukses',$kategori->nama.' berhasil di update');
    }
}
