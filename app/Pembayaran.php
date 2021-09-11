<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $guarded = [];

    public function daftar_penjualan() {
        return $this->hasMany('App\Penjualan','pembayaran_id')->withDefault();
    }
}
