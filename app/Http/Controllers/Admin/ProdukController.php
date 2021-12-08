<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produk;
use App\KategoriProduk;
use Validator;
use Str;
use Image;

class ProdukController extends Controller
{
 

    public function index(Request $req) {
        $title = 'Kelola Produk';
        
        $keyword = $req->keyword;
        $kategori_id = $req->kategori_id;

        $daftar_produk = Produk::orderBy('id', 'desc');

        if($req->has('keyword') && $req->keyword != "") {
            $daftar_produk = $daftar_produk->where('nama', 'like', '%'.$keyword.'%');
        }

        if($req->has('kategori_id') && $req->kategori_id != "") {
            $daftar_produk = $daftar_produk->where('kategori_id', '=', $kategori_id);
        }

        $daftar_produk = $daftar_produk->paginate(10);

        $daftar_kategori = KategoriProduk::pluck('nama', 'id');

        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.index',compact('title','description',
        'daftar_produk','daftar_kategori','keyword','kategori_id'));
    }
    
    public function create() {
        $title = 'Kelola Produk';
        $description = 'Ini adalah halaman untuk mengelola produk';

        $daftar_kategori = KategoriProduk::pluck('nama','id');

        return view('admin.produk.create',compact('title',
        'description',
        'daftar_kategori'));
    }
    
    public function store(Request $req) {
        $input = $req->all();

        // return $input;

        $rules = [     
            'foto' => 'file|mimes:jpeg,png|max:10240',
            'nama' => 'max:255',
            'kategori_id' => 'required',
            'harga' => 'required|numeric|min:0',
            'komisi' => 'required|numeric|min:0',
            'satuan' => 'required|max:255',
            'keyword' => 'max:255',
            'konten' => 'max:65535',
            'deskripsi' => 'max:255'
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
            'konten.max' => 'Isi konten maksimal 65535 karakter',
            'foto.max' => 'Ukuran foto maksimal 10MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
            'harga.min' => 'Jumlah harga tidak boleh minus',
            'harga.numeric' => 'Harga harus di input dengan angka',
            'komisi.min' => 'Komisi tidak boleh  minus',
            'komisi.numeric' => 'Komisi harus di input dengan angka'
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();

        $slug = Str::slug($req->nama.' '.Str::random(5));

        $produk = Produk::create(
            [
                
                'nama' => $req->nama,
                'kategori_id' => $req->kategori_id,
                'konten' => $req->konten,
                'slug' => $slug,
                'harga' => $req->harga,
                'komisi' => $req->komisi,
                'satuan' => $req->satuan,
                'keyword' => $req->keyword,
                'deskripsi' => $req->deskripsi
            ]
        );

        
        if($req->hasFile('foto')) {
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            $path = 'produk/foto/'; 
            $file_extension = $req->foto->extension();
            $produk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('app/public/');

            $img = Image::make($gambar->path());
            $img->fit(250, 250, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$produk->foto);

            $produk->save();
        }

        
        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil ditambahkan');
    }

    public function edit(Request $req, $id) {
        $title = 'Kelola Produk';

        $daftar_kategori = KategoriProduk::pluck('nama', 'id');

        $produk = Produk::findOrFail($id);

        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.edit',compact('title','description',
        'produk','daftar_kategori'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'foto' => 'file|mimes:jpeg,png|max:10240',
            'nama' => 'max:255',
            'kategori_id' => 'required',
            'harga' => 'required|numeric|min:0',
            'komisi' => 'required|numeric|min:0',
            'satuan' => 'required|max:255',
            'keyword' => 'max:255',
            'slug' => 'max:255|unique:produk,slug,'.$id,
            'konten' => 'max:65535',
            'deskripsi' => 'max:255'
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
            'konten.max' => 'Isi konten maksimal 65535 karakter',
            'foto.size' => 'Ukuran foto minimal 1MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
            'harga.min' => 'Jumlah harga tidak boleh minus',
            'harga.numeric' => 'Harga harus di input dengan angka',
            'komisi.min' => 'Komisi tidak boleh  minus',
            'komisi.numeric' => 'Komisi harus di input dengan angka'
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();
        $produk = Produk::findOrFail($id);
        // $produk->foto_produk = $req->foto_produk;
       
        $produk->nama = $req->nama;
        $produk->kategori_id = $req->kategori_id;
        $produk->konten = $req->konten;
        $produk->slug = $req->slug;
        $produk->harga = $req->harga;
        $produk->komisi = $req->komisi;
        $produk->satuan = $req->satuan;
        $produk->keyword = $req->keyword;
        $produk->deskripsi = $req->deskripsi;

        if($req->hasFile('foto')) {

            $foto_lama = $produk->foto;
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            $path = 'produk/foto/'; 
            $file_extension = $req->foto->extension();
            $produk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('app/public/');

            $img = Image::make($gambar->path());
            $img->fit(250, 250, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$produk->foto);

            Storage::disk('public')->delete($foto_lama);

            // Storage::put($path, $file, 'public');
            
            
            // Storage::setVisibility($produk->foto, 'public');
        }

        $produk->save();
        // Storage::setVisibility($produk->foto, 'public');
        // return Storage::getVisibility($produk->foto);
        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil diubah');
    }

    public function destroy($id) {
        try {
            $produk = Produk::findOrFail($id);

            $produk->delete();
        } catch(Exception $e) {

            return redirect()->route('admin.produk.index')
        ->with('gagal', $produk->nama.' gagal dihapus');

        }

        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil dihapus');
    }
}
