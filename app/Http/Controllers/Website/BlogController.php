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
    public function detail($id) {
        $blog = Blog::where('status','aktif')->where('id',$id)
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
