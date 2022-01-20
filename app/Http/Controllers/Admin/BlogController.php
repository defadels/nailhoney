<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Blog;
use App\KategoriBlog;
use Validator;
use Image;
use Str;

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
            'foto' => 'file|mimes:jpeg,png|max:10240',

            'judul' => 'required|max:255',

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
            $blog->foto = $path.$nama_file.".".$file_extension;
            $blog->thumbnail = $path.$nama_file."-thumbnail.".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(1000, 500, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$blog->foto);

            $img->fit(600, 600, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$blog->thumbnail);

            $blog->save();
        }

        return redirect()->route('admin.blog.index')
        ->with('sukses',$blog->judul.' berhasil di tambah');
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
            'foto' => 'file|mimes:jpeg,jpg,png|max:10240',

            'judul' => 'required|max:255',

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

        if($req->hasFile('foto')) {

            $foto_lama = $blog->foto;
            $thumbnail_lama = $blog->thumbnail;

            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            
            $path = 'blog/foto/'; 
            $file_extension = $req->foto->extension();
            $blog->foto = $path.$nama_file.".".$file_extension;
            $blog->thumbnail = $path.$nama_file."-thumbnail.".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(1000, 500, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$blog->foto);

            $img->fit(600, 600, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$blog->thumbnail);

           Storage::disk('storage')->delete($foto_lama);
           Storage::disk('storage')->delete($thumbnail_lama);
        }


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
            ->with('gagal',$blog->judul.' gagal dihapus');
        }

        return redirect()->route('admin.blog.index')
            ->with('sukses',$blog->judul.' berhasil dihapus');
    }
}
