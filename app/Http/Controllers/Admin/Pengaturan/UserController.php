<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $title = "Kelola User";
        $description = "Ini halaman untuk kelola user";
        return view('admin.pengaturan.user',compact('title','description'));
    }
}
