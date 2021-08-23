<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Validator;
use Hash;
use Image;
use Str;

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
            'nama' => ['required','max:80'],
            'email' => ['required','email','unique:users,email,'.$id],
            'password' => ['required'],
            'nomor_hp' => ['required', 'regex:/^(^\+628\s?|^08)(\d{3,4}?){2}\d{2,4}$/','max:13']
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
            'nomor_hp.regex' => 'Format nomor handphone salah. Contoh: 082273318016',
            'nomor_hp.max' => 'Nomor handphone maksimal 13 digit', 
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

        if($req->hasFile('foto')) {
            $nama_file = Str::uuid();
            $path = 'pelanggan/foto/';
            $file_extension = $req->foto->extension();
            $pelanggan->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(500, 500, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$pelanggan->foto);

            $pelanggan->save();
        }

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
            'nama' => ['required','max:255'],
            'email' => ['required','email','unique:users,email,'.$id],
            'nomor_hp' => ['required', 'regex:/^(^\+628\s?|^08)(\d{3,4}?){2}\d{2,4}$/','max:13']
        ];
        
        $messages = [
            'required' => ' :attribute wajib diisi.',
            'nomor_hp.regex' => 'Format nomor handphone salah. Contoh: 082273318016',
            'nomor_hp.max' => 'Nomor handphone maksimal 13 digit', 
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();

        $pelanggan = User::findOrFail($id);
        $pelanggan->nama = $req->nama;
        $pelanggan->email = $req->email;
        
        if ($req->has('password') && $req->password != ''){
            $user->password = Hash::make($req->password);
        }

        $pelanggan->nomor_hp = $req->nomor_hp;

        if($req->hasFile('foto')) {
            $foto_lama = $pelanggan->foto;

            $nama_file = Str::uuid();
            $path = 'pelanggan/foto/';
            $file_extension = $req->foto->extension();
            $pelanggan->foto = $path.$nama_file.".".$file_extension;

            $gambar = $req->file('foto');
            $destinationPath = storage_path('/app/public/');

            $img = Image::make($gambar->path());
            $img->fit(500, 500, function ($cons) {
                $cons->aspectRatio();
            })->save($destinationPath.$pelanggan->foto);

            Storage::disk('public')->delete($foto_lama);
        }

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
