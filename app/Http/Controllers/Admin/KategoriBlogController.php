<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\KategoriBlog;

class KategoriBlogController extends Controller
{
    public function index() {
        $title = "Kategori Pada Halaman Blog";
        $description = "Menampilkan semua data kategori pada halaman blog";
        $daftar_kategori = KategoriBlog::paginate(10);

        return view('admin.blog.kategori.index', compact('title',
        'description',
        'daftar_kategori'));
    }
}
