<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\KategoriBlog;


class BlogController extends Controller
{
    public function index() {
        $title = "Blog";
       
        $daftar_blog = Blog::where('status','aktif')
        ->orderBy('id','desc')->simplePaginate(3);

        $daftar_kategori = KategoriBlog::get();

        $description = "Ini adalah halaman Blog Madu Al-Hafizh";
        
        return view('website.blog.index',compact('title',
        'description',
        'daftar_blog','daftar_kategori'));
    }

    public function manfaat_madu() {
    $title = "Blog Manfaat Madu";

    $description = "Blog seputar khasiat dan manfaat madu";
    
    $daftar_blog = Blog::where('kategori_id', '=', 1)->get();

    $daftar_kategori = KategoriBlog::get();

    return view('website.blog.manfaat-madu', compact('title', 'description',
        'daftar_blog', 'daftar_kategori'));
    }

    public function tentang_madu() {
        $title = "Blog Tentang Madu";

        $description = "Blog seputar tentang madu";

        $daftar_blog = Blog::where('kategori_id', '=', 2)->get();

        $daftar_kategori = KategoriBlog::get();

        return view('website.blog.tentang-madu',compact('title','description','daftar_blog',
        'daftar_kategori'));
    }

    public function bisnis_madu() {
        $title = "Blog Bisnis Madu";

        $description = "Blog seputar berbisnis madu";

        $daftar_blog = Blog::where('kategori_id', '=', 3)->get();

        $daftar_kategori = KategoriBlog::get();

        return view('website.blog.bisnis-madu',compact('title','description',
        'daftar_blog','daftar_kategori'));
    }

    public function detail($slug) {
        $blog = Blog::where('status','aktif')
        ->firstOrFail();
        
        $title = $blog->judul;
        
        $keyword = $blog->keyword;
        
        $description = $blog->abstrak;

        $daftar_kategori = KategoriBlog::get();

        $daftar_blog = Blog::get();
        
        return view('website.blog.detail',compact('title',
        'keyword',
        'description',
        'blog',
        'daftar_kategori','daftar_blog'));
    }
}
