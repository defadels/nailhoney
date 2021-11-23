<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\FotoProduk;
use App\Produk;
use Str;
use Image;

class FotoProdukController extends Controller
{
    public function index($produk_id)
    {
        $title = 'Kelola Foto Produk';

        $description = 'Halaman untuk mengelola foto produk';

        $foto_produk = FotoProduk::paginate(10);

        $pilihan_produk = Produk::findOrFail($produk_id);
       
        
        return view('admin.produk.foto.index',compact('title','description','foto_produk',
        'pilihan_produk'));
    }

    public function create($produk_id) {
        $title = 'Tambah Foto Produk';

        $description = 'Halaman untuk tambah foto produk';

        $produk = FotoProduk::findOrFail($produk_id);

        return view('admin.produk.foto.create', compact('title', 'description','produk'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'foto' => 'required|max:100',
            'keterangan' => 'max:100'
        ];

        $messages = [
            'foto' => 'file|mimes:jpeg,png',
            'keterangan.max' => 'Keterangan maksimal 100 karakter'
        ];
        $produk_id = $req->produk_id;

        $foto_produk = Produk::create(
            [
                'produk_id' => $req->produk_id,
                'keterangan' => $req->keterangan
            ]
            
        );

        if($req->hasFile('foto')) {
            $nama_file = Str::uuid();
            $path = 'produk/foto/'.$produk_id."/";
            $file_extension = $req->foto->extension();
            $foto_produk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(500, 500, function ($cons) {
                $cons->aspectRation();
            })->save($destinationPath.$foto_produk->foto);

            $foto_produk->save();
        }

        return redirect()->route('admin.produk.foto.index')
        ->with('sukses','Foto produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Foto Produk';

        $description = 'Halaman untuk mengelola foto produk';

        $foto_produk = FotoProduk::findOrFail($id);

        return view('admin.produk.foto.edit', compact('title','description', 'foto_produk'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'foto' => 'file|mimes:jpeg,png',
            'keterangan' => 'max:100'
        ];

        $messages = [
            'foto.file' => 'Foto harus berupa file',
            'foto.mimes' => 'File foto harus jpeg atau png',
            'keterangan.max' => 'Keterangan maksimal 100 karakter'
        ];

        $validates = Validator::make($input,$rules,$messages)->validate();

        $foto_produk = FotoProduk::findOrFail($id);

        $foto_produk->produk_id = $req->produk_id; 
        $foto_produk->keterangan = $req->keterangan;

        $produk_id = $foto_produk->produk_id;

        if($req->hasFile('foto')) {
            $foto_lama = $foto_produk->foto;

            $nama_file = Str::uuid();
            $path = 'produk/foto/'.$produk_id.'/';
            $file_extension = $req->foto->extension();
            $foto_produk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(500, 500, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$foto_produk->foto);

            Storage::disk('public')->delete($foto_lama);
        }

        $foto_produk->save();

        return redirect()->route('admin.produk.foto.index')
        ->with('sukses', 'Foto produk berhasil diubah');
    }
}
