<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $title = "Kelola Blog";
        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog',compact('title','description'));
    }
}
