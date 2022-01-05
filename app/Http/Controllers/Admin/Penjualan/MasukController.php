<?php

namespace App\Http\Controllers\Admin\Penjualan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Penjualan;
use App\User;
use App\Pengiriman;
use App\Pembayaran;
use App\Produk;
use Validator;
use Carbon\Carbon;
use Str;
use App\AlamatUser;

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
        $alamat = AlamatUser::pluck('label', 'id');
        $daftar_produk = Produk::pluck('nama','id');

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
        'daftar_pelanggan','daftar_status','alamat','daftar_produk'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'pelanggan_id' => 'required',
            'pembayaran_id' => 'required',
            'pengiriman_id' => 'required',
            'ongkos_kirim' => 'numeric|min:0',
            'total' => 'numeric|min:0',
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
            'ongkos_kirim.min' => 'Ongkos kirim tidak boleh minus',
            'total.min' => 'Total belanja tidak boleh minus',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();
        
        $sekarang = Carbon::now();

        $invoice =  'INV/'.$sekarang->format('ymd').
                    '/'.$sekarang->format('his').
                    '/'.Str::upper(Str::random(6));

        $masuk = Penjualan::create(
           [
            'pelanggan_id' => $req->pelanggan_id,
            'no_transaksi' => $req->no_transaksi = $invoice,
            'pembayaran_id' => $req->pembayaran_id,
            'pengiriman_id' => $req->pengiriman_id,
            'ongkos_kirim' => $req->ongkos_kirim,
            'total' => $req->total,
            ]
        );
        
        return redirect()->route('admin.penjualan.masuk.index')
        ->with('sukses',$masuk->pelanggan->nama.' berhasil di tambah');
    }
    
    public function edit(Request $req, $id) {
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

        $penjualan = Penjualan::findOrFail($id);

        $description = "Tambah penjualan yang masuk";

        return view('admin.penjualan.masuk.edit', compact('title', 
        'description', 
        'daftar_pembayaran',
        'daftar_pengiriman',
        'daftar_pelanggan',
        'daftar_status',
        'penjualan'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'pelanggan_id' => 'required',
            'pembayaran_id' => 'required',
            'pengiriman_id' => 'required',
            'ongkos_kirim' => 'numeric|min:0',
            'total' => 'numeric|min:0',
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
            'ongkos_kirim.min' => 'Ongkos kirim tidak boleh minus',
            'total.min' => 'Total belanja tidak boleh minus',

            
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();
        
        $penjualan = findOrFail($id);
        $penjualan->pelanggan_id = $req->pelanggan_id;
        $penjualan->pembayaran_id = $req->pembayaran_id;
        $penjualan->pengiriman_id = $req->pengiriman_id;
        $penjualan->ongkos_kirim = $req->ongkos_kirim;
        $penjualan->total = $req->total;

        $penjualan->save();

        return redirect()->route('admin.penjualan.masuk.index')
        ->with('sukses',$masuk->pelanggan->nama.' berhasil di ubah');
    }

    public function destroy($id) {
        try{
            $penjualan = Penjualan::findOrFail($id);

            $penjualan->delete();
        }catch(Exception $e){
            return redirect()->route('admin.penjualan.masuk.index')
            ->with('gagal',$penjualan->no_transaksi.' gagal ditolak');
        }
            return redirect()->route('admin.penjualan.masuk.index')
            ->with('sukses',$penjualan->no_transaksi.' ditolak');
    }

    public function konfirmasi($id) {
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

        $penjualan = Penjualan::findOrFail($id);

        $description = "Tambah penjualan yang masuk";

        return view('admin.penjualan.masuk.konfirmasi', compact(
        'title', 
        'description', 
        'daftar_pembayaran',
        'daftar_pengiriman',
        'daftar_pelanggan',
        'daftar_status',
        'penjualan'));
    }

    public function proses($id) {
        $penjualan = Penjualan::findOrFail($id);

        $penjualan->status = 'diproses';

        $penjualan->diproses_oleh_id = 1;
        $penjualan->diproses_pada = Carbon::now();

        $penjualan->save();

        return redirect()->route('admin.penjualan.masuk.index')
        ->with('penjualan',$penjualan->no_transaksi.' berhasil diproses');

    }

    public function json_daftar_pelanggan(Request $req) {

        $kata_kunci = $req->cari;

        // $daftar_pelanggan = User::whereIn('hak_akses', ['user']);

        if ($req->has('cari') && $req->cari != "") {

            // $daftar_pelanggan = $daftar_pelanggan->where(function($query)
            // use($kata_kunci) {
            //     $query->where('nama', 'like', '%'.$kata_kunci.'%')
            //          ->orWhere('nomor_hp', '=', $kata_kunci)
            //         ->orWhere('email', '=', $kata_kunci)
            //         ->paginate(5);
            // });

            $daftar_pelanggan = User::where('nama', 'like', '%'.$kata_kunci.'%')
            ->orWhere('nomor_hp', '=', $kata_kunci)
            ->orWhere('email', '=', $kata_kunci)
            ->orWhere('hak_akses', ['user'])
            ->paginate(5);

        } else {
            $daftar_pelanggan = User::paginate(5);
        }
            
        $hasil = array(
            'results' => $daftar_pelanggan->toArray()['data'],
            'pagination' => array(
                'more' => $daftar_pelanggan->hasMorePages()
            )
        );

       return response()->json($hasil);
    }

    public function json_daftar_alamat(Request $req) {

        $id_pelanggan = $req->pelanggan_id;
        $alamat = User::findOrFail($id_pelanggan)->daftar_alamat()->get(); 
        
        $hasil = array(
            'result' => $alamat
        );
      
       return response()->json($hasil);
    }

    public function json_daftar_produk(Request $req) {
        $kata_kunci = $req->cari;

        if ($req->has('cari') && $req->cari != "") {
            $daftar_produk = Produk::where('nama', 'like', '%'.$kata_kunci.'%')
            ->orWhere('satuan', '=', $kata_kunci)
            ->paginate(5);

        } else {
            $daftar_produk = Produk::paginate(5);
        }
            
        $hasil = array(
            'results' => $daftar_produk->toArray()['data'],
            'pagination' => array(
                'more' => $daftar_produk->hasMorePages()
            )
        );

       return response()->json($hasil);
    }
}
