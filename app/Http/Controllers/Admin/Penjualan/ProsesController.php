<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penjualan;
use App\User;
use App\Pengiriman;
use App\Pembayaran;
use Validator;
use Carbon\Carbon;
use Str;

class ProsesController extends Controller
{
    public function index() {
        $title = "Penjualan Berproses";
 
        $description = "Penjualan yang diproses";
        
        $daftar_penjualan = Penjualan::where('status', 'diproses')->orderBy('id','desc')->paginate(10);

        return view('admin.penjualan.proses.index', compact('title', 'description','daftar_penjualan'));
    }
}
