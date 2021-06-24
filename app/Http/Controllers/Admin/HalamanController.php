<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index() {
        $title = "Kelola Halaman";
        $description = "Ini adalah halaman untuk kelola Halaman";
        return view('admin.halaman',compact('title','description'));
    }
}
