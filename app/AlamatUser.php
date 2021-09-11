<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlamatUser extends Model
{
    protected $table = 'alamat_user';

    protected $guarded = [];

    public function pelanggan() {
        return $this->belongsTo('App\User','pelanggan_id')->withDefault();
    }

    
}
