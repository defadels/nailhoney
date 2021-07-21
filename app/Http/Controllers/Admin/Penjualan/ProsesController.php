<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProsesController extends Controller
{
    public function index() {
        $title = "Penjualan Berproses";
 
        $description = "Penjualan yang diproses";
 
        return view('admin.penjualan.proses.index', compact('title', 'description'));
    }
}
