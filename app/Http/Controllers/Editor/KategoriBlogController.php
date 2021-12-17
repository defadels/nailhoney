<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class KategoriBlogController extends Controller
{
    public function index(Request $req) {
        $title = "Kategori Pada Halaman Blog";

        $keyword = $req->keyword;

        $daftar_kategori = KategoriBlog::orderBy('id','desc');

        if($req->has('keyword') && $req->keyword != "" )
        {
            $daftar_kategori = $daftar_kategori->where('nama', 'like', '%'.$keyword.'%');
        }

        $description = "Menampilkan semua data kategori pada halaman blog";

        $daftar_kategori = $daftar_kategori->paginate(10);

        return view('editor.blog.kategori.index', compact('title',
        'description', 'daftar_kategori', 'keyword'));
    }
    
    public function create() {
        $title = "Kategori Pada Halaman Blog";
        $description = "Menambahkan kategori blog";

        return view('editor.blog.kategori.create', compact('title',
        'description'));
    }

    public function store(Request $req) {
       $input = $req->all();

       $rules = [
           'nama' => 'required',
           'keterangan' => 'required'
       ];

       $messages = [
        'required' => ' :attribute wajib diisi.',
       ];

       $validate = Validator::make($input, $rules, $messages)->validate();

       $kategori = KategoriBlog::create(
           [
            'nama' => $req->nama,
            'keterangan' => $req->keterangan
           ]
        );

        return redirect()->route('editor.blog.kategori.index')
        ->with('sukses',$kategori->nama.' berhasil ditambahkan');

    }
    
    public function edit($id) {
        $title = "Kategori Pada Halaman Blog";
        $description = "Edit kategori blog";
        $kategori = KategoriBlog::findorFail($id);

        return view('editor.blog.kategori.edit', compact('title',
        'description',
        'kategori'));
    }

    public function update(Request $req, $id){
        $input = $req->all();

        $rules = [
            'nama' => 'required',
            'keterangan' => 'required'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();
        $kategori = KategoriBlog::findOrFail($id);
        $kategori->nama = $req->nama;
        $kategori->keterangan = $req->keterangan;

        $kategori->save();

        return redirect()->route('editor.blog.kategori.index')
        ->with('sukses',$kategori->nama.' berhasil di update');
    }

    public function destroy($id) {
        try {
            $kategori = KategoriBlog::findOrFail($id);

            $kategori->delete();
        } catch(Exception $id) {

            return redirect()->route('editor.blog.kategori.index')
        ->with('gagal',$kategori->nama.' gagal di update');
        
        }

        return redirect()->route('editor.blog.kategori.index')
        ->with('sukses',$kategori->nama.' berhasil di update');
    }
}
