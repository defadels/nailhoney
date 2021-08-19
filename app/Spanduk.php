<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spanduk extends Model
{
   protected $table = 'spanduk';

   protected $fillable = ['judul','deskripsi', 'link', 
   'label_tombol', 'warna_tulisan', 'status'];

}
