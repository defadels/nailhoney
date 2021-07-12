<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pelanggan;
use Hash;
use Validator;

class PelangganController extends Controller
{
    public function index() {
        $title = 'Pelanggan';
        $description = 'Ini adalah halaman untuk mengelola data pelanggan';

        $daftar_pelanggan = Pelanggan::get();

        return view('admin.pelanggan.index',compact('title',
        'description',
        'daftar_pelanggan'));
    }
    
    public function create() {
        $title = 'Tambah Pelanggan';
        $description = 'Ini adalah halaman untuk menambah data pelanggan';
        return view('admin.pelanggan.create',compact('title','description'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'nama' => 'required|max:80',
            'email' => 'required|email|unique:pelanggan,email',
            'password' => 'required',
            'nohp' => 'required|max:13'
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $pelanggan = Pelanggan::create(
            [
                'nama' => $req->nama,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'nohp' => $req->nohp
            ]
        );

        return redirect()->route('admin.pelanggan.index')
        ->with('sukses', 'Pelanggan bernama '.$pelanggan->nama.' berhasil ditambah');
    }
    
    public function edit($id) {
        $title = 'Edit Pelanggan';
        $description = 'Ini adalah halaman untuk mengedit data pelanggan';

        $pelanggan = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.edit',compact('title','description','pelanggan'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();
 
        $rules = [
            'nama' => 'required|max:80',
            'email' => 'required|email|unique:pelanggan,email,'.$id,
            'password' => 'nullable',
            'nohp' => 'required|max:13'
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama = $req->nama;
        $pelanggan->email = $req->email;
        
        if ($req->has('password') && $req->password != ''){
            $user->password = Hash::make($req->password);
        }

        $pelanggan->nohp = $req->nohp;

        $pelanggan->save();

        return redirect()->route('admin.pelanggan.index')
        ->with('sukses', 'Pelanggan '.$pelanggan->nama.' berhasil diubah');
    }
}
