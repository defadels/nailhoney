<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = "home";
        $description = "Ini adalah halaman Web Madu Al-Hafizh";
        return view('website.home',compact('title','description'));
    }
}
