<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $description = 'Ini adalah halaman dashboard';
        return view('admin.table',compact('title','description'));
    }
}
