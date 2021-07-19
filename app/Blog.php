<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $guarded = [];


    public function kategori()
    {
        return $this->belongsTo('App\KategoriBlog','kategori_id')->withDefault();
    }
}
