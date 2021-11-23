<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo('App\KategoriProduk','kategori_id')->withDefault();
    }

    public function daftar_foto()
    {
        return $this->hasMany('App\FotoProduk', 'produk_id')->withDefault();
    }
}
