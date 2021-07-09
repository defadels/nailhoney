<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
   public function index() {

    $title = "Pembayaran";

    $description = "Halaman untuk kelola pembayaran";

    return view('admin.pengaturan.pembayaran.index',compact('title', 'description'));

   }
   
   public function create() {

    $title = "Tambah Pembayaran";

    $description = "Halaman untuk menambah pembayaran";

    return view('admin.pengaturan.pembayaran.index',compact('title', 'description'));

   }

   public function edit() {

    $title = "Edit Pembayaran";

    $description = "Halaman untuk edit pembayaran";

    return view('admin.pengaturan.pembayaran.edit', compact('title', 'description'));
   
    }

   
}
