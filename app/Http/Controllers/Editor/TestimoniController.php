<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Testimoni;
use Validator;
use Str;
use Image;


class TestimoniController extends Controller
{
    public function index() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";

        $daftar_testimoni = Testimoni::get();
        return view('editor.testimoni.index',compact(
            'title',
            'description',
            'daftar_testimoni'));
    }
    

    // input and create data
    public function create() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('editor.testimoni.create',compact(
            'title',
            'description'));
    }

    public function store(Request $req) {
        $input = $req->all();
        
        $rules = [
            'nama_konsumen' => 'required|max:255',
            'isi_testimoni' => 'max:255',
            'foto' => 'file|mimes:jpeg,png|max:10240'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
            'foto.max' => 'Ukuran foto minimal 1MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $testimoni = Testimoni::create(
            [
                'nama_konsumen'=> $req->nama_konsumen,
                'isi_testimoni' => $req->isi_testimoni,
            ]
        );

        if($req->hasFile('foto')) {
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $nama_file = Str::uuid();
            $path = 'testimoni/foto/'; 
            $file_extension = $req->foto->extension();
            $testimoni->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(150, 150, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$testimoni->foto);

            $testimoni->save();
        }

        return redirect()->route('editor.testimoni.index')
            ->with('sukses',$testimoni->nama_konsumen.' berhasil di tambah');
    }
    
    // Edit and update
    public function edit($id) {
        $title = "Kelola Testimoni";

        $testimoni = Testimoni::findOrFail($id);

        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('editor.testimoni.edit',compact(
            'title',
            'description',
            'testimoni'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();
        
        $rules = [
            'nama_konsumen' => 'required|max:255',
            'isi_testimoni' => 'max:255',
            'foto' => 'file|mimes:jpeg,png|max:10240'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
            'foto.max' => 'Ukuran foto minimal 1MB',
            'foto.mimes' => 'Jenis file foto berupa JPG dan PNG',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->nama_konsumen = $req->nama_konsumen;
        $testimoni->isi_testimoni = $req->isi_testimoni;        
        
        if($req->hasFile('foto')) {
            // $nama_file = 'robot.'.$req->file('foto')->extension();
            $foto_lama = $testimoni->foto;
            
            $nama_file = Str::uuid();
            $path = 'testimoni/foto/'; 
            $file_extension = $req->foto->extension();
            $testimoni->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(150, 150, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$testimoni->foto);

            Storage::disk('public')->delete($foto_lama);
        }   

        $testimoni->save();

        return redirect()->route('editor.testimoni.index')
            ->with('sukses',$testimoni->nama_konsumen.' berhasil di ubah');
    }

    public function destroy($id) {
        try {
            $testimoni = Testimoni::findOrFail($id);

            $testimoni->delete();
        } catch(Exception $e) {

            return redirect()->route('editor.testimoni.index')
            ->with('gagal',$testimoni->nama_konsumen.' gagal di hapus');
        }

        return redirect()->route('editor.testimoni.index')
            ->with('sukses',$testimoni->nama_konsumen.' berhasil di hapus');
    }
}
