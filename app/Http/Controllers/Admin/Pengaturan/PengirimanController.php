<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengirimanController extends Controller
{
    public function index() {

        $title = "Pengiriman";
    
        $description = "Halaman untuk kelola pengiriman";
    
        return view('admin.pengaturan.pengiriman.index',compact('title', 'description'));
    
    }
    
    public function edit() {
    
        $title = "Edit Pengiriman";
    
        $description = "Halaman untuk edit pengiriman";
    
        return view('admin.pengaturan.pengiriman.edit', compact('title', 'description'));
    }
}
