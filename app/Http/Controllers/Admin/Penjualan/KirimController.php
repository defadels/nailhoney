<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KirimController extends Controller
{
    public function index() {
        $title = "Penjualan Terkirim";
 
        $description = "Penjualan yang terkirim";
 
        return view('admin.penjualan.kirim.index', compact('title', 'description'));
    }
}
