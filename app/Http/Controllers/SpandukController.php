<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpandukController extends Controller
{
    public function index() {
        $title = 'Kelola Spanduk';
        $description = 'Ini adalah halaman untuk mengelola spanduk';
        return view('admin.spanduk',compact('title','description'));
    }
}
