<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SelesaiController extends Controller
{
    public function index() {
        $title = "Penjualan Selesai";
 
        $description = "Penjualan yang selesai";
 
        return view('admin.penjualan.selesai.index', compact('title', 'description'));
    }
}
