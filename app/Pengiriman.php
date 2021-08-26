<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';

    protected $guarded = [];

    protected $fillable = ['nama','keterangan', 'status'];

    public function daftar_penjualan() {
        return $this->hasMany('App\Penjualan','pengiriman_id');
    }

}
