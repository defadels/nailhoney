<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        return view('website.tentang');
    }
}
