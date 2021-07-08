<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {
        $title = 'Laporan';
        $description = 'Ini adalah halaman laporan';

        return view('admin.laporan', compact('title', 'description'));
    }
}
