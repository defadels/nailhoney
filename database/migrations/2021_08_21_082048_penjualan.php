<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Penjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function(Blueprint $table) {
            $table->increments('id');   
            $table->date('tanggal')->nullable();
            $table->string('no_transaksi')->nullable();
            $table->enum('status',['aktif','nonaktif']);
            $table->string('dibuat_oleh')->nullable();
            $table->string('diproses_oleh')->nullable();
            $table->string('dikirim_oleh')->nullable();
            $table->integer('jumlah_pembelian')->nullable();
            $table->integer('diskon')->nullable();
            $table->integer('total_komisi')->nullable();
            $table->integer('ongkos_kirim')->nullable();
            $table->integer('total')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('penjualan');
    }
}
