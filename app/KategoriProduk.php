<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    protected $table = 'kategori_produk';

    protected $guarded = [];

    public function daftar_produk()
    {
        return $this->hasMany('App\Produk', 'kategori_id');
    }
}
