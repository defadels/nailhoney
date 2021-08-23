<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengiriman;
use Validator;

class PengirimanController extends Controller
{
    public function index() {

        $title = "Pengiriman";

        $daftar_pengiriman = Pengiriman::get();
    
        $description = "Halaman untuk kelola pengiriman";
    
        return view('admin.pengaturan.pengiriman.index',compact('title', 
        'description', 'daftar_pengiriman'));
    
    }
    
    public function create() {
        $title = "Tambah Pengiriman";

        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];

        $description = "Halaman untuk tambah pengiriman";

        return view('admin.pengaturan.pengiriman.create', compact('title',
        'description','daftar_status'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'nama' => 'max:255',
            'keterangan' => 'max:255'
        ];

        $messages = [
            'required' => ' :attribute ini wajib diisi',
            'nama' => 'Nama maksimal di isi 255 karakter',
            'keterangan' => 'Keterangan maksimal di isi 255 karakter',
        ];
        
        $validate = Validator::make($input, $rules, $messages)->validate();

        $pengiriman = Pengiriman::create(
            [
                'nama' => $req->nama,
                'keterangan' => $req->keterangan,
                'status' => $req->status
            ]
        );

        return redirect()->route('admin.pengaturan.pengiriman.index')
        ->with('sukses', $pengiriman->nama.' berhasil ditambah');

    }

    public function edit($id) {
    
        $title = "Edit Pengiriman";

        $pengiriman = Pengiriman::findOrFail($id);
        
        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];

        $description = "Halaman untuk edit pengiriman";
    
        return view('admin.pengaturan.pengiriman.edit', compact('title', 'description', 
        'pengiriman', 'daftar_status'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'nama' => 'max:255',
            'keterangan' => 'max:255'
        ];

        $messages = [
            'required' => ' :attribute ini wajib diisi',
            'nama' => 'Nama maksimal di isi 255 karakter',
            'keterangan' => 'Keterangan maksimal di isi 255 karakter',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();

        $pengiriman = Pengiriman::findOrFail($id);

        $pengiriman->nama = $req->nama;
        $pengiriman->keterangan = $req->keterangan;
        $pengiriman->status = $req->status;

        $pengiriman->save();


        return redirect()->route('admin.pengaturan.pengiriman.index')
        ->with('sukses', $pengiriman->nama.' berhasil diubah');
    }

    public function destroy($id) {
        try {
            $pengiriman = Pengiriman::findOrFail($id);

            $pengiriman->delete();
        } catch(Exception $e) {
            return redirect()->route('admin.pengaturan.pengiriman.index')
            ->with('gagal', $pengiriman->nama.' gagal dihapus');
        }
            return redirect()->route('admin.pengaturan.pengiriman.index')
            ->with('sukses', $pengiriman->nama.' sukses dihapus');
    }
}
