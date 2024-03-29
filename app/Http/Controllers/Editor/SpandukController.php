<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Spanduk;
use Validator;
use Str;
use Image;

class SpandukController extends Controller
{
    public function index() {
        $title = 'Kelola Spanduk';
        $description = 'Ini adalah halaman untuk mengelola spanduk';

        $daftar_spanduk = Spanduk::get();

        return view('editor.spanduk.index',compact('title','description','daftar_spanduk'));
    }

    public function create() {
        $title = 'Tambah Spanduk';
        $description = 'Ini adalah halaman untuk menambah spanduk';

        $daftar_status = [
            'nonaktif' => 'Nonaktif',
            'aktif' => 'Aktif'
        ];

        return view('editor.spanduk.create',compact('title','description','daftar_status')); 
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'judul' => 'required|max:255',
            'link' =>'max:255',
            'label_tombol' => 'max:255',
            'warna_tulisan' => 'max:255',
            'foto' => 'file|mimes:jpeg,png|max:10240',
        ];

        $messages = [
            'required' => ':attribute wajib diisi.',
            'judul.max' => 'Judul maksimal 255 karakter',
            'foto.max' => 'Ukuran foto minimal 1MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $spanduk = Spanduk::create(
            [
                'judul' => $req->judul,
                'deskripsi' => $req->deskripsi,
                'link' => $req->link,
                'label_tombol' => $req->label_tombol,
                'warna_tulisan' => $req->warna_tulisan,
                'status' => $req->status
            ]
        );

        if($req->hasFile('foto')) {
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            $path = 'spanduk/foto/'; 
            $file_extension = $req->foto->extension();
            $spanduk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(1280, 600, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$spanduk->foto);

            $spanduk->save();
        }

        return redirect()->route('editor.spanduk.index')
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


        return view('editor.spanduk.edit',compact('title','description',
        'spanduk',
        'daftar_status'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'judul' => 'required|max:255',
            'link' =>'max:255',
            'label_tombol' => 'max:255',
            'warna_tulisan' => 'max:255',
            'foto' => 'file|mimes:jpeg,png|max:10240'
        ];

        $messages = [
            'required' => ':attribute wajib diisi.',
            'judul.max' => 'Judul maksimal 255 karakter',
            'foto.max' => 'Ukuran foto minimal 1MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $spanduk = Spanduk::findOrFail($id);
        $spanduk->judul = $req->judul;
        $spanduk->deskripsi = $req->deskripsi;
        $spanduk->link = $req->link;
        $spanduk->label_tombol = $req->label_tombol;
        $spanduk->warna_tulisan = $req->warna_tulisan;
        $spanduk->status = $req->status;

        if($req->hasFile('foto')) {

            $foto_lama = $spanduk->foto;
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            $path = 'spanduk/foto/'; 
            $file_extension = $req->foto->extension();
            $spanduk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(1280, 600, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$spanduk->foto);

            Storage::disk('public')->delete($foto_lama);

            // Storage::put($path, $file, 'public');
            
            
            // Storage::setVisibility($produk->foto, 'public');
        }

        $spanduk->save();

        return redirect()->route('editor.spanduk.index')
        ->with('sukses', $spanduk->judul.' berhasil diubah');
    }

    public function destroy($id) {
        try {
            $spanduk = Spanduk::findOrFail($id);

            $spanduk->delete();
        } catch(Exception $e) {

            return redirect()->route('editor.spanduk.index')
        ->with('gagal', $spanduk->judul.' gagal dihapus');
        }

        return redirect()->route('editor.spanduk.index')
        ->with('sukses', $spanduk->judul.' berhasil dihapus');
    }
}
