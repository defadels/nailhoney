<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\KategoriProduk;
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

        $daftar_kategori = KategoriProduk::pluck('nama','id');

        return view('admin.produk.create',compact('title',
        'description',
        'daftar_kategori'));
    }
    
    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            // 'foto_produk' => 'required',
            'kategori_id' => 'required',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required'
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();

        $produk = Produk::create(
            [
                // 'foto_produk' => $req->foto_produk,
                'kategori_id' => $req->kategori_id,
                'nama_produk' => $req->nama_produk,
                'deskripsi_produk' => $req->deskripsi_produk
            ]
        );

        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil ditambahkan');
    }

    public function edit($id) {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.edit',compact('title','description'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            // 'foto_produk' => 'required',
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required'
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();
        $produk = Produk::findOrFail($id);
        // $produk->foto_produk = $req->foto_produk;
        $produk->nama_produk = $req->nama_produk;
        $produk->deskripsi_produk = $req->deskripsi_produk;

        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil diubah');
    }
}
