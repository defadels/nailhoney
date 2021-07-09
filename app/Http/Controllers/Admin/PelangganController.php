<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index() {
        $title = 'Pelanggan';
        $description = 'Ini adalah halaman untuk mengelola data pelanggan';
        return view('admin.pelanggan.index',compact('title','description'));
    }
    
    public function create() {
        $title = 'Tambah Pelanggan';
        $description = 'Ini adalah halaman untuk menambah data pelanggan';
        return view('admin.pelanggan.create',compact('title','description'));
    }
    
    public function edit() {
        $title = 'Edit Pelanggan';
        $description = 'Ini adalah halaman untuk mengedit data pelanggan';
        return view('admin.pelanggan.edit',compact('title','description'));
    }
}
