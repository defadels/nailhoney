<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index() {
        $title = "kontak";
        $description = "Ini adalah halaman Blog Madu Al-Hafizh";
        return view('website.kontak',compact('title','description'));
    }
}
