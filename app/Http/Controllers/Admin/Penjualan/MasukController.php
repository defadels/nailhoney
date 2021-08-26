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

class MasukController extends Controller
{
    public function index() {
        $title = "Penjualan Masuk";

        $daftar_penjualan = Penjualan::where('status', 'masuk')->orderBy('id','desc')->paginate(10);
 
        $description = "Penjualan yang masuk";
 
        return view('admin.penjualan.masuk.index', compact('title', 
        'description', 'daftar_penjualan'));
    }

    public function create() {
        $title = "Tambah Penjualan Masuk";
        
        $daftar_pembayaran = Pembayaran::pluck('nama', 'id');
        $daftar_pengiriman = Pengiriman::pluck('nama', 'id');
        $daftar_pelanggan = User::pluck('nama','id');

        $daftar_status = [
            'masuk' => 'Masuk',
            'diproses' => 'Proses',
            'dikirim' => 'Kirim',
            'diantar' => 'Antar',
            'selesai' => 'Selesai'
        ];

        $description = "Tambah penjualan yang masuk";

        return view('admin.penjualan.masuk.create', compact('title', 
        'description', 'daftar_pembayaran','daftar_pengiriman',
        'daftar_pelanggan','daftar_status'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'pelanggan_id' => 'required',
            'pembayaran_id' => 'required',
            'pengiriman_id' => 'required',
            'ongkos_kirim' => 'numeric|min:0',
            'total_belanja' => 'numeric|min:0',
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
            'ongkos_kirim.min' => 'Ongkos kirim tidak boleh minus',
            'total_belanja.min' => 'Total belanja tidak boleh minus',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $masuk = Penjualan::create(
           [
            'pelanggan_id' => $req->pelanggan_id,
            'pembayaran_id' => $req->pembayaran_id,
            'pengiriman_id' => $req->pengiriman_id,
            'ongkos_kirim' => $req->ongkos_kirim,
            'total_belanja' => $req->total_belanja,
            ]
        );

        return redirect()->route('admin.penjualan.masuk.index')
        ->with('sukses',$masuk->pelanggan->nama.' berhasil di tambah');
    }
    
    public function edit($id) {

    }

    public function update(Request $req, $id) {

        
    }

    public function destroy($id) {

    }

    public function proses($id) {
        $penjualan = Penjualan::findOrFail($id);

        $penjualan->status = 'diproses';

        $penjualan->diproses_oleh = 1;
        $penjualan->diproses_pada = Carbon::now();

        $penjualan->save();

        return redirect()->route('admin.penjualan.masuk.index')
        ->with('penjualan',$penjualan->no_transaksi.' berhasil diproses');
    }
}
