<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Halaman;
use Validator;


class HalamanController extends Controller
{
    public function index() {
        $title = "Kelola Halaman";
        $description = "Ini adalah halaman untuk kelola Halaman";

        $daftar_halaman = Halaman::get();

        return view('admin.halaman.index',compact('title',
        'description',
        'daftar_halaman'));
    }
    
    public function create() {
        $title = "Tambah Halaman";
        $description = "Ini adalah halaman untuk menambah Halaman";

        $daftar_status = [
            'draft' => 'Draft',
            'published' => 'Published'
        ];

        return view('admin.halaman.create',compact('title',
        'description',
        'daftar_status'));
    }

    public function store(Request $req) {
        
        $input = $req->all();

        $rules = [
            'judul' => 'required|max:80',
            'konten' => 'required',
            'slug' => 'required',
            'foto' => 'required',
            'link' => 'required',
            'keyword' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();

        $halaman = Halaman::create(
            [
                'judul' => $req->judul,
                'konten' => $req->konten,
                'slug' => $req->slug,
                'foto' => $req->foto,
                'link' => $req->link,
                'keyword' => $req->keyword,
                'deskripsi' => $req->deskripsi,
                'status' => $req->status
            ]
        );

        return redirect()->route('admin.halaman.index')
        ->with('sukses', $halaman->judul.' berhasil ditambah');
    }

    public function edit($id) {
        $title = "Kelola Halaman";
        $description = "Ini adalah halaman untuk kelola Halaman";

        $halaman = Halaman::findOrFail($id);

        $daftar_status = [
            'draft' => 'Draft',
            'published' => 'Published'
        ];

        return view('admin.halaman.edit',compact('title',
        'description',
        'halaman',
        'daftar_status'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();

        $rules = [
            'judul' => 'required|max:80',
            'konten' => 'required',
            'slug' => 'required',
            'foto' => 'required',
            'link' => 'required',
            'keyword' => 'required',
            'deskripsi' => 'required',
            'status' => 'required'
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validate = Validator::make($input, $rules, $messages)->validate();

        $halaman = Halaman::findOrFail($id);
        $halaman->judul = $req->judul;
        $halaman->konten = $req->konten;
        $halaman->slug = $req->slug;
        $halaman->foto = $req->foto;
        $halaman->link = $req->link;
        $halaman->keyword = $req->keyword;
        $halaman->deskripsi = $req->deskripsi;
        $halaman->status = $req->status;

        $halaman->save();

        return redirect()->route('admin.halaman.index')
        ->with('sukses', $halaman->link.' berhasil diubah');
    }

    public function show() {
        $title = "Kelola Halaman";
        $description = "Ini adalah halaman untuk kelola Halaman";
        return view('admin.halaman.show',compact('title','description'));
    }

    public function destroy($id) {
        try {
            $halaman = Halaman::findOrFail($id);

            $halaman->delete();
        } catch (Exception $e) {
           
            return redirect()->route('admin.halaman.index')
            ->with('gagal', $halaman->judul.' gagal dihapus');
        }


        return redirect()->route('admin.halaman.index')
        ->with('sukses', $halaman->judul.' berhasil dihapus');
    }

}
