<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\KategoriProduk;
use Image;
use Storage;

class ProdukController extends Controller
{
    public function index() {
        $title = "Produk";
        $description = "Ini adalah halaman Produk Madu Al-Hafizh";

        $daftar_produk = Produk::latest()->paginate(10);

        $produk = Produk::get();

        // $daftar_kategori = KategoriProduk::pluck('nama','id');

        // $links = "https://api.whatsapp.com/send?phone=6281370721854<&text=Assalamu'alaikum, saya mengirim pesan melalui website nailhoney.id.%0A"."%0ASaya ingin memesan produk berikut %0A"."%0ANama produk :".$produk->nama."%0AHarga :".$produk->harga."%0AApakah bisa diproses?";

        // return dd($daftar_produk);

        return view('website.produk.index',compact('title','description','daftar_produk'));
    }
    
    public function detail($id) {
        $title = "Produk Detail";
        $description = "Ini adalah halaman Produk Madu Al-Hafizh";

        $produk = Produk::findOrFail($id);

        $daftar_produk = Produk::get();

        return view('website.produk.detail',compact('title','description','produk','daftar_produk'));
    }
}
