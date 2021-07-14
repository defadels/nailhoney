<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $guarded = [];

    protected $fillable = ['nama','keterangan', 'jenis', 'drive'];
}
