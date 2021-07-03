<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBlog extends Model
{
    protected $table = 'kategori_blog';

    protected $guarded = [];

    public function daftar_blog()
    {
        return $this->hasMany('App\Blog', 'kategori_id');
    }
}
