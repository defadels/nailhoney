<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $title = 'Dashboard';
        $description = 'Ini adalah halaman dashboard';

        return view('editor.table',compact('title','description'));
    }
}
