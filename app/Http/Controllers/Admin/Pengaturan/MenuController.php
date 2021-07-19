<?php

namespace App\Http\Controllers\Admin\Pengaturan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;
use Validator;

class MenuController extends Controller
{
    public function index() {
        $title = "Kelola Menu";
        $description = "Ini halaman untuk kelola menu";

        $daftar_menu = Menu::get();
        return view('admin.pengaturan.menu.index',compact('title','description', 'daftar_menu'));
    }

    public function create() {
        $title = "Tambah Menu";

        $description = "Ini halaman untuk tambah menu";

        $daftar_status = [
            'aktif' => 'Aktif',
            'nonaktif' => 'Nonaktif'
        ];

        return view('admin.pengaturan.menu.create', compact('title', 'description', 'daftar_status'));
    }

    public function store(Request $req) {
        $input = $req->all();

        $rules = [
            'nama' => 'required',
            'link' => 'required',
            'status' => 'required',
        ];

        $messages = [
            'required' => ' :atribute wajib diisi',
        ];

        $validator = Validator::make($input, $rules, $messages)->validate();
        
        $menu = Menu::create(
            [   'nama' => $req->nama,
                'link' => $req->link,
                'status' => $req->status
            ]
        );
        
        return redirect()->route('admin.pengaturan.menu.index')
        ->with('sukses', $menu->nama.' berhasil ditambah');
    }

    public function edit($id) {
        $title = "Edit Menu";

        $description = "Ini halaman untuk mengedit halaman menu";

        return view('admin.pengaturan.menu.edit', compact('title', 'description'));
        
    }

    public function update(Request $req, $id) {
        $input = $req->all();
    }

    public function destroy($id) {
        try {

        } catch(Exception $e) {

        }
    }
}
