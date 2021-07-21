<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BatalController extends Controller
{
   public function index() {
       $title = "Penjualan Batal";

       $description = "Penjualan yang batal";

       return view('admin.penjualan.batal.index', compact('title', 'description'));
   }
}
