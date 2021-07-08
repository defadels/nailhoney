<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use App\KategoriBlog;
use Validator;


class BlogController extends Controller
{
    public function index() {
        $title = "Kelola Blog";

        $daftar_blog = Blog::orderBy('id','desc')->paginate(10);

        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.index',compact('title',
        'description',
        'daftar_blog'));
    }

    public function create() {
        $title = "Kelola Blog";
        $description = "Ini halaman untuk kelola blog";
        return view('admin.blog.create',compact('title','description'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'judul' => 'required',

            'abstrak' => 'required|max:250',

            'konten' => 'required',

            'penulis' => 'required',

            'kategori_id' => 'required',

            'status' => 'required'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
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
            'judul' => 'required',

            'abstrak' => 'required',

            'konten' => 'required',

            'penulis' => 'required',

            'kategori_id' => 'required',

            'status' => 'required'
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
            ->with('sukses',$blog->nama.' berhasil di ubah');
    }
}
