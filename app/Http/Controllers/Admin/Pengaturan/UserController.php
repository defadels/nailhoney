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

        $daftar_user = User::whereIn('hak_akses', ['admin','editor','user'])
                            ->latest()->paginate(10);
        return view('admin.pengaturan.user.index',compact(
            'title',
            'description',
            'daftar_user'));
    }
    
    public function create() {
        $title = "Kelola User";
        $description = "Ini halaman untuk kelola user";

        $daftar_hak_akses = [
            'editor' => 'Editor',
            'admin' => 'Admin',
            'user' => 'User'
        ];

        return view('admin.pengaturan.user.create',compact('title',
        'description','daftar_hak_akses'));
    }
    
    public function edit($id) {
        $title = "Kelola User";
        $description = "Ini halaman untuk kelola user";

        $user = User::findOrFail($id);
        $daftar_hak_akses = [
            'editor' => 'Editor',
            'admin' => 'Admin',
            'user' => 'User'
        ];

        return view('admin.pengaturan.user.edit',compact('title',
        'description','user','daftar_hak_akses'));
    }

    public function store(Request $req) {
        $input = $req->all();
        
        $rules = [
            'nama' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
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
                'hak_akses' => $req->hak_akses,
            ]
        );
        return redirect()->route('admin.pengaturan.user.index')
            ->with('sukses',$user->nama.' berhasil di tambah');
    }

    public function update(Request $req, $id) {
        $input = $req->all();
        
        $rules = [
            'nama' => 'required|max:100',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8'
        ];

        $messages = [
            'required' => ' :attribute wajib diisi.',
        ];
        
        $validator = Validator::make($input, $rules, $messages)->validate();
        $user = User::findOrFail($id);
        $user->nama = $req->nama;
        $user->email = $req->email;
        
        if ($req->has('password') && $req->password != ''){
            $user->password = Hash::make($req->password);
        }
        
        $user->hak_akses = $req->hak_akses;

        $user->save();

        return redirect()->route('admin.pengaturan.user.index')
            ->with('sukses',$user->nama.' berhasil di ubah');
    }

    public function destroy($id) {
        try{

            $user = User::findOrFail($id);

            $user->delete();

        } catch(Exception $e) {

            return redirect()->route('admin.pengaturan.user.index')
            ->with('gagal',$user->nama.' gagal dihapus');

        }

        return redirect()->route('admin.pengaturan.user.index')
        ->with('sukses',$user->nama.' berhasil dihapus');
    }
}
