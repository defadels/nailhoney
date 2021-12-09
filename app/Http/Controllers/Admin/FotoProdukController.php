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
    public function index($id)
    {
        $title = 'Kelola Foto Produk';

        $description = 'Halaman untuk mengelola foto produk';

        $foto_produk = FotoProduk::paginate(10);

        $produk = Produk::findOrFail($id);
       
        return view('admin.produk.foto.index',compact('title','description','foto_produk','produk'));
    }

    public function create($id) {
        $title = 'Tambah Foto Produk';

        $description = 'Halaman untuk tambah foto produk';

        $produk = Produk::findOrFail($id);

        return view('admin.produk.foto.create', compact('title', 'description','produk'));
    }

    public function store(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'foto' => 'file|mimes:jpeg,png|nullable',
            'keterangan' => 'max:100'
        ];

        $messages = [
            'foto.file' => 'Foto harus berupa file',
            'foto.mimes' => 'File foto harus JPEG atau PNG',
            'keterangan.max' => 'Keterangan maksimal 100 karakter'
        ];
        $produk_id = $req->produk_id;

        $foto_produk = FotoProduk::create(
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
            $destinationPath = storage_path('app/public/');

            $img = Image::make($gambar->path());
            $img->fit(500, 500, function ($cons) {
                $cons->aspectRation();
            })->save($destinationPath.$foto_produk->foto);

            $foto_produk->save();
        }

        $pilihan_produk = Produk::findOrFail($id);

        return redirect()->route('admin.produk.foto.index',$pilihan_produk->id)
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
            'foto' => 'file|mimes:jpeg,png|nullable',
            'keterangan' => 'max:100'
        ];

        $messages = [
            'foto.file' => 'Foto harus berupa file',
            'foto.mimes' => 'File foto harus JPEG atau PNG',
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
            $destinationPath = storage_path('app/public/');

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

    public function destroy($id, $produk_id){
        try {
            $foto = FotoProduk::findOrFail($id);
            $produk_id = Produk::findOrFail($id);
            $foto->delete();
        } catch(Exception $e) {
            return redirect()->route('admin.produk.foto.index', $produk_id)
            ->with('gagal', 'Foto gagal ditambahkan');
        }

            return redirect()->route('admin.produk.foto.index', $produk_id)
            ->with('sukses', 'Foto berhasil ditambahkan');
    }
}
