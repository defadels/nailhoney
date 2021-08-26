<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';

    protected $guarded = [];

    protected $dates = [
        'tanggal',
        'diproses_pada',
        'diantar_pada',
        'dikirim_pada',
        'diselesaikan_pada',
        'dibatalkan_pada',
    ];

    public function pelanggan() {
        return $this->belongsTo('App\User','pelanggan_id')->withDefault();
    }

    public function pengiriman() {
        return $this->belongsTo('App\Pengiriman', 'pengiriman_id')->withDefault();
    }

    public function pembayaran() {
        return $this->belongsTo('App\Pembayaran', 'pembayaran_id')->withDefault();
    }

    public function dibuat_oleh() {
        return $this->belongsTo('App\User','dibuat_oleh_id')->withDefault();
    }
    
    public function diproses_oleh() {
        return $this->belongsTo('App\User','diproses_oleh_id')->withDefault();
    }
    
    public function dikirim_oleh() {
        return $this->belongsTo('App\User','dikirim_oleh_id')->withDefault();
    }
    
    public function diantar_oleh() {
        return $this->belongsTo('App\User','diantar_oleh_id')->withDefault();
    }

    public function diselesaikan_oleh() {
        return $this->belongsTo('App\User','diselesaikan_oleh_id')->withDefault();
    }
    
    public function dibatalkan_oleh() {
        return $this->belongsTo('App\User','dibatalkan_oleh_id')->withDefault();
    }

}
