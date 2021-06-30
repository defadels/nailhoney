<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimoni;

class HomeController extends Controller
{
    public function index() {
        $title = "home";
        $description = "Ini adalah halaman Web Madu Al-Hafizh";

        $daftar_testimoni = Testimoni::get();

        return view('website.home',compact(
            'title',
            'description',
            'daftar_testimoni'));
    }
}
