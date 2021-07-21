<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Hash;

class PelangganController extends Controller
{
    public function index(Request $req) {
        $title = 'Pelanggan';
        $description = 'Ini adalah halaman untuk mengelola data pelanggan';

        $keyword = $req->keyword;

        $daftar_pelanggan = User::whereIn('hak_akses', ['user']);

        if($req->has('keyword') && $req->keyword != "") {
            $daftar_pelanggan= $daftar_pelanggan->where(function($query) 
            use($keyword)
            {
                $query->where('nama', 'like', '%'.$keyword.'%')
                      ->orWhere('nomor_hp', 'like', '%'.$keyword.'%');
            });
        }
        
        $daftar_pelanggan = $daftar_pelanggan->paginate(10);
        

        return view('admin.pelanggan.index',compact('title',
        'description','daftar_pelanggan', 'keyword'));
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'nohp' => 'required|max:13'
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $pelanggan = User::create(
            [
                'nama' => $req->nama,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'hak_akses' => "user",
                'nomor_hp' => $req->nomor_hp
            ]
        );

        return redirect()->route('admin.pelanggan.index')
        ->with('sukses', 'Pelanggan bernama '.$pelanggan->nama.' berhasil ditambah');
    }
    
    public function edit($id) {
        $title = 'Edit Pelanggan';
        $description = 'Ini adalah halaman untuk mengedit data pelanggan';

        $pelanggan = User::findOrFail($id);

        return view('admin.pelanggan.edit',compact('title','description','pelanggan'));
    }

    public function update(Request $req, $id) {
        $input = $req->all();
 
        $rules = [
            'nama' => 'required|max:80',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable',
            'nomor_hp' => 'required|max:13'
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $pelanggan = User::findOrFail($id);
        $pelanggan->nama = $req->nama;
        $pelanggan->email = $req->email;
        
        if ($req->has('password') && $req->password != ''){
            $user->password = Hash::make($req->password);
        }

        $pelanggan->nomor_hp = $req->nomor_hp;

        $pelanggan->save();

        return redirect()->route('admin.pelanggan.index')
        ->with('sukses', 'Pelanggan '.$pelanggan->nama.' berhasil diubah');
    }

    public function destroy($id) {
        try {

            $pelanggan = User::findOrFail($id);

            $pelanggan->delete();

        } catch(Exception $e) {
            return redirect()->route('admin.pelanggan.index')
        ->with('gagal', 'Pelanggan '.$pelanggan->nama.' gagal dihapus');
        }
        return redirect()->route('admin.pelanggan.index')
        ->with('sukses', 'Pelanggan '.$pelanggan->nama.' berhasil dihapus');
    }
}
