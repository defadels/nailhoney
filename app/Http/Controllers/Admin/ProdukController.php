<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produk;
use App\KategoriProduk;
use Validator;


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
            
            'nama' => 'required',
            'kategori_id' => 'nullable',
            'konten' => 'required',
            'slug' => 'nullable',
            'harga' => 'required',
            'komisi' => 'required',
            'satuan' => 'required',
            'keyword' => 'nullable',
            'deskripsi' => 'required'
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();

        $produk = Produk::create(
            [
                
                'nama' => $req->nama,
                'kategori_id' => $req->kategori_id,
                'konten' => $req->konten,
                'slug' => $req->slug,
                'harga' => $req->harga,
                'komisi' => $req->komisi,
                'satuan' => $req->satuan,
                'keyword' => $req->keyword,
                'deskripsi' => $req->deskripsi
            ]
        );

        
        if($req->hasFile('foto')) {
            $path = $req->file('foto')->store('foto');
            $produk->foto = $path;
            $produk->save();
            Storage::put($produk->foto, 'public');
        }

        
        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil ditambahkan');
    }

    public function edit(Request $req, $id) {
        $title = 'Kelola Produk';

        $daftar_kategori = KategoriProduk::pluck('nama', 'id');

        $produk = Produk::findOrFail($id);

        if($req->hasFile('foto')) {
            $path = $req->file('foto')->store('foto');
            $produk->foto = $path;
            $produk->save();
        }

        $description = 'Ini adalah halaman untuk mengelola produk';
        return view('admin.produk.edit',compact('title','description',
        'produk','daftar_kategori'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        

        $rules = [
            
            'nama' => 'required',
            'kategori_id' => 'required',
            'konten' => 'required',
            'slug' => 'nullable',
            'harga' => 'required',
            'komisi' => 'required',
            'satuan' => 'required',
            'keyword' => 'nullable',
            'deskripsi' => 'required'
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
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
            $nama_file = 'robot.'.$req->file('foto')->extension();
            $path = 'produk/foto/'; 
            $file = $req->file('foto');
            // Storage::put($path, $file, 'public');
            Storage::put($nama_file, $file);
            $produk->foto = $path.$nama_file;
            
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
        ->with('gagal', $produk->nama.' gagal diubah');

        }

        return redirect()->route('admin.produk.index')
        ->with('sukses', $produk->nama.' berhasil diubah');
    }
}
