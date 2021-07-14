<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pembayaran;
use Validator;

class PembayaranController extends Controller
{
    public function index() {

        $title = "Pembayaran";

        $description = "Halaman untuk kelola pembayaran";

        $daftar_pembayaran = Pembayaran::get();

        return view('admin.pengaturan.pembayaran.index',compact('title', 
        'description',
        'daftar_pembayaran'));
        
    }
    
    public function create() {

        $title = "Tambah Pembayaran";

        $description = "Halaman untuk menambah pembayaran";

        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];

        $daftar_jenis = [
            'online' => 'Online',
            'manual' => 'Manual'
        ];

        return view('admin.pengaturan.pembayaran.create',compact('title', 
        'description',
        'daftar_status',
        'daftar_jenis'));

    }

    public function store(Request $req) {
            $input = $req->all();

            $rules = [
                'nama' => 'required',
                'keterangan' => 'required',
                'status' => 'required',
                'jenis' => 'required',
                'drive' => 'required'
            ];

            $messages = [
                'required' => ' :atribute wajib diisi',
            ];

            $validate = Validator::make($input, $rules, $messages)->validate();

            $pembayaran = Pembayaran::create(
                [
                    'nama' => $req->nama,
                    'keterangan' => $req->keterangan,
                    'status' => $req->status,
                    'jenis' => $req->jenis,
                    'drive' => $req->drive
                ]    
            );

            return redirect()->route('admin.pengaturan.pembayaran.index')
            ->with('sukses', $pembayaran->nama.' berhasil di tambah');
    }

    public function edit($id){
        $pembayaran = Pembayaran::findOrFail($id);

        $title = "Edit Pembayaran";

        $description = "Halaman untuk edit pembayaran";
        
        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];

        $daftar_jenis = [
            'online' => 'Online',
            'manual' => 'Manual'
        ];

        return view('admin.pengaturan.pembayaran.edit', compact('title', 
        'description','daftar_status','daftar_jenis','pembayaran'));
    
        }

        public function update(Request $req, $id) {
            $input = $req->all();

            $rules = [
                'nama' => 'required',
                'keterangan' => 'required',
                'status' => 'required',
                'jenis' => 'required',
                'drive' => 'required'
            ];

            $messages = [
                'required' => ' :atribute wajib diisi',
            ];

            $validate = Validator::make($input, $rules, $messages)->validate();
            $pembayaran = Pembayaran::findOrFail($id);

            $pembayaran->nama = $req->nama;
            $pembayaran->keterangan = $req->keterangan;
            $pembayaran->status = $req->status;
            $pembayaran->jenis = $req->jenis;
            $pembayaran->drive = $req->drive;

            $pembayaran->save();

            return redirect()->route('admin.pengaturan.pembayaran.index')
            ->with('sukses', $pembayaran->nama.' berhasil diubah');
        }

}
