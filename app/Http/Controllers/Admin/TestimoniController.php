<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimoni;
use Validator;

class TestimoniController extends Controller
{
    public function index() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";

        $daftar_testimoni = Testimoni::get();
        return view('admin.testimoni.index',compact(
            'title',
            'description',
            'daftar_testimoni'));
    }
    

    // input and create data
    public function create() {
        $title = "Kelola Testimoni";
        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('admin.testimoni.create',compact(
            'title',
            'description'));
    }

    public function store(Request $req) {
        $input = $req->all();
        
        $rules = [
            'nama_konsumen' => 'required|max:100',
            'isi_testimoni' => 'required',
            'foto' => 'nullable'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $testimoni = Testimoni::create(
            [
                'nama_konsumen'=> $req->nama_konsumen,
                'isi_testimoni' => $req->isi_testimoni,
                'foto' => $req->foto
            ]
        );
        return redirect()->route('admin.testimoni.index')
            ->with('sukses',$testimoni->nama_konsumen.' berhasil di tambah');
    }
    
    // Edit and update
    public function edit($id) {
        $title = "Kelola Testimoni";

        $testimoni = Testimoni::findOrFail($id);

        $description = "Ini adalah halaman untuk kelola testimoni";
        return view('admin.testimoni.edit',compact(
            'title',
            'description',
            'testimoni'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();
        
        $rules = [
            'nama_konsumen' => 'required|max:100',
            'isi_testimoni' => 'required',
            'foto' => 'nullable'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->foto = $req->foto;
        $testimoni->nama_konsumen = $req->nama_konsumen;
        $testimoni->isi_testimoni = $req->isi_testimoni;        
        

        $testimoni->save();

        return redirect()->route('admin.testimoni.index')
            ->with('sukses',$testimoni->nama_konsumen.' berhasil di ubah');
    }

    public function destroy($id) {
        try {
            $testimoni = Testimoni::findOrFail($id);

            $testimoni->delete();
        } catch(Exception $e) {

            return redirect()->route('admin.testimoni.index')
            ->with('gagal',$testimoni->nama_konsumen.' gagal di hapus');
        }

        return redirect()->route('admin.testimoni.index')
            ->with('sukses',$testimoni->nama_konsumen.' berhasil di hapus');
    }
}
