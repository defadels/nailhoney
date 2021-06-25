<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $title = "Kelola Blog";
        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.index',compact('title','description'));
    }

    public function create() {
        $title = "Kelola Blog";
        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.create',compact('title','description'));
    }

    public function edit() {
        $title = "Kelola Blog";
        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.edit',compact('title','description'));
    }
}
