<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index() {
        $title = "Kelola Footer";
        $description = "Ini halaman untuk kelola footer";
        return view('admin.pengaturan.footer',compact('title','description'));
    }
}
