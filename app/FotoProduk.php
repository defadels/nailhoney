<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoProduk extends Model
{
    protected $table = 'foto_produk';

    protected $guarded = [];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id')->withDefault();
    }

}
