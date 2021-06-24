<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index() {
        $title = "Produk";
        $description = "Ini adalah halaman Produk Madu Al-Hafizh";
        return view('website.produk',compact('title','description'));
    }
}
