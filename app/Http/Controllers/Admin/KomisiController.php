<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KomisiController extends Controller
{
    public function index() {
       $title = "Pencairan Komisi";
       $description = "Halaman pencairan komisi";

       return view('admin.komisi.index',compact('title','description'));
   }

   public function store() {

   }

   public function edit() {
       $title = "Pencairan Komisi";
       $description = "Halaman pencairan komisi";

       return view('admin.komisi.edit',compact('title','description'));
   }

   public function update() {
       
   }

   public function lihat() {
       $title = "Pencairan Komisi";
       $description = "Halaman pencairan komisi";

       return view('admin.komisi.lihat',compact('title','description'));
   }
}
