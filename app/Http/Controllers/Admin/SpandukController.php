<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Spanduk;
use Validator;

class SpandukController extends Controller
{
    public function index() {
        $title = 'Kelola Spanduk';
        $description = 'Ini adalah halaman untuk mengelola spanduk';

        $daftar_spanduk = Spanduk::get();

        return view('admin.spanduk.index',compact('title','description','daftar_spanduk'));
    }

    public function create() {
        $title = 'Tambah Spanduk';
        $description = 'Ini adalah halaman untuk menambah spanduk';

        $daftar_status = [
            'nonaktif' => 'Nonaktif',
            'aktif' => 'Aktif'
        ];

        return view('admin.spanduk.create',compact('title','description','daftar_status')); 
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'foto' => 'nullable',
            'judul' => 'required|max:80',
            'link' =>'required',
            'status' => 'required',
        ];

        $messages = [
            'required' => ':attribute wajib diisi.',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $spanduk = Spanduk::create(
            [
                'foto' => $req->foto,
                'judul' => $req->judul,
                'deskripsi' => $req->deskripsi,
                'link' => $req->link,
                'label_tombol' => $req->label_tombol,
                'warna_tulisan' => $req->warna_tulisan,
                'status' => $req->status
            ]
        );

        return redirect()->route('admin.spanduk.index')
        ->with('sukses', $spanduk->judul.' berhasil ditambahkan');

    }

    public function edit($id) {
        $title = 'Edit Spanduk';
        $description = 'Ini adalah halaman untuk edit spanduk';

        $spanduk = Spanduk::findOrFail($id);

        $daftar_status = [
            'nonaktif' => 'Nonaktif',
            'aktif' => 'Aktif'
        ];


        return view('admin.spanduk.edit',compact('title','description',
        'spanduk',
        'daftar_status'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'foto' => 'nullable',
            'judul' => 'required|max:80',
            'link' =>'required',
            'status' => 'required',
        ];

        $messages = [
            'required' => ':attribute wajib diisi.',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $spanduk = Spanduk::findOrFail($id);
        $spanduk->foto = $req->foto;
        $spanduk->judul = $req->judul;
        $spanduk->deskripsi = $req->deskripsi;
        $spanduk->link = $req->link;
        $spanduk->label_tombol = $req->label_tombol;
        $spanduk->warna_tulisan = $req->warna_tulisan;
        $spanduk->status = $req->status;

        $spanduk->save();

        return redirect()->route('admin.spanduk.index')
        ->with('sukses', $spanduk->judul.' berhasil diubah');
    }

    public function destroy($id) {
        try {
            $spanduk = Spanduk::findOrFail($id);

            $spanduk->delete();
        } catch(Exception $e) {

            return redirect()->route('admin.spanduk.index')
        ->with('gagal', $spanduk->judul.' gagal dihapus');
        }

        return redirect()->route('admin.spanduk.index')
        ->with('sukses', $spanduk->judul.' berhasil dihapus');
    }
}
