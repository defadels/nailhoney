<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimoni;
use App\Produk;
use App\KategoriProduk;
use App\Blog;
use App\KategoriBlog;
use App\FotoProduk;
use Storage;
use Image;


class HomeController extends Controller
{
    public function index() {
        $title = "home";
        $description = "Ini adalah halaman Web Madu Al-Hafizh";

        $daftar_testimoni = Testimoni::get();
        
        $daftar_produk = Produk::get();

        $daftar_blog = Blog::get();

        $foto_produk_premium = FotoProduk::orderBy('id', 'asc')->get();
        
        $foto_produk_akasia = FotoProduk::orderBy('id', 'desc')->get();

        return view('website.home',compact(
            'title',
            'description',
            'daftar_testimoni',
            'daftar_produk',
            'daftar_blog',
            'foto_produk_premium',
            'foto_produk_akasia'));
    }
}
