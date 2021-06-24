<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('admin.testimoni',compact(
            'title',
            'description'));
    }
}
