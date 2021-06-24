<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Route;

class MenuController extends Controller
{
    public function index() {
        $title = "Kelola Menu";
        $description = "Ini halaman untuk kelola menu";
        return view('admin.pengaturan.menu',compact('title','description'));
    }
}
