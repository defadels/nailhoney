<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function index() {
        $title = "Penjualan Masuk";
 
        $description = "Penjualan yang masuk";
 
        return view('admin.penjualan.masuk.index', compact('title', 'description'));
    }
}
