<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Validator;

class UserController extends Controller
{
    public function index() {
        $title = "Kelola User";
        $description = "Ini halaman untuk kelola user";

        $daftar_user = User::whereIn('hak_akses', ['admin','editor'])
                            ->paginate(10);
        return view('admin.pengaturan.user.index',compact(
            'title',
            'description',
            'daftar_user'));
    }
    
    public function create() {
        $title = "Kelola User";
        $description = "Ini halaman untuk kelola user";
        return view('admin.pengaturan.user.create',compact('title','description'));
    }
    
    public function edit() {
        $title = "Kelola User";
        $description = "Ini halaman untuk kelola user";
        return view('admin.pengaturan.user.edit',compact('title','description'));
    }

    public function store(Request $req) {
        $input = $req->all();
        
        $rules = [
            'nama' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'hak_akses' => 'required'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $user = User::create(
            [
                'nama'=> $req->nama,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'hak_akses' => $req->hak_akses
            ]
        );
        return redirect()->route('admin.pengaturan.user.index')
            ->with('sukses',$user->nama.' berhasil di tambah');
    }
}
