<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\KategoriBlog;
use Validator;


class BlogController extends Controller
{
    public function index(Request $req) {
        $title = "Kelola Blog";

        $keyword = $req->keyword;
        $kategori_id = $req->kategori_id;

        $daftar_blog = Blog::orderBy('id','desc');

        if($req->has('keyword') && $req->keyword != "") {
            $daftar_blog = $daftar_blog->where('nama', 'like', '%'.$keyword.'%');
        }

        if($req->has('kategori_id') && $req->kategori_id != "") {
            $daftar_blog = $daftar_blog->where('kategori_id', '=', $kategori_id);
        }

        $daftar_blog = $daftar_blog->paginate(10);

        $daftar_kategori = KategoriBlog::pluck('nama', 'id');

        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.index',compact('title','description','daftar_blog',
        'keyword', 'daftar_kategori','kategori_id'));
    }

    public function create() {
        $title = "Kelola Blog";
        $description = "Ini halaman untuk kelola blog";

        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];
        $daftar_kategori = KategoriBlog::pluck('nama', 'id');
        return view('admin.blog.create',compact('title','description',
        'daftar_kategori','daftar_status'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'foto' => 'file|mimes:jpeg,png|size:10000',
            
            'thumbnail' => 'file|mimes:jpeg,png|size:10000',

            'judul' => 'required|max:255',

            'abstrak' => 'max:255',

            'penulis' => 'max:255'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
            'foto.size' => 'Ukuran foto minimal 1MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $blog = Blog::create(
        [
        'judul' => $req->judul,
        'abstrak' => $req->abstrak,
        'konten' => $req->konten,
        'penulis' => $req->penulis,
        'kategori_id' => $req->kategori_id,
        'status' => $req->status
        ]
        );

        if($req->hasFile('foto')) {
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            $path = 'blog/foto/'; 
            $file_extension = $req->foto->extension();
            $produk->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(500, 500, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$produk->foto);

            $produk->save();
        }

        return redirect()->route('admin.blog.index')
        ->with('sukses',$blog->kategori.' berhasil di tambah');
    }

    public function edit($id) {
        $title = "Kelola Blog";

        $blog = Blog::findorFail($id);
        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];

        $daftar_kategori = KategoriBlog::pluck('nama','id');
        

        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.edit',compact('title',
        'description',
        'blog',
        'daftar_kategori',
        'daftar_status'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();
        
        
        $rules = [
            'foto' => 'mimes:jpeg,png',
            
            'thumbnail' => 'mimes:jpeg,png',

            'judul' => 'required|max:255',

            'abstrak' => 'max:255',

            'penulis' => 'max:255'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $blog = Blog::findOrFail($id);
        $blog->judul = $req->judul;
        $blog->abstrak = $req->abstrak;
        $blog->penulis = $req->penulis;
        $blog->konten = $req->konten;
        $blog->kategori_id = $req->kategori_id;
        $blog->status = $req->status;

        $blog->save();

        return redirect()->route('admin.blog.index')
            ->with('sukses',$blog->judul.' berhasil di ubah');
    }

    public function destroy($id) {
        try {
            $blog = Blog::findOrFail($id);

            $blog->delete();
        } catch(Exception $e) {
        
            return redirect()->route('admin.blog.index')
            ->with('gagal',$blog->judul.' gagal di ubah');
        }

        return redirect()->route('admin.blog.index')
            ->with('sukses',$blog->judul.' berhasil di ubah');
    }
}
