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
        Schema::create('pengiriman', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->text('keterangan')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('nonaktif');
            $table->timestamps();
            $table->index(['status', 'created_at']);
        });

        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('keterangan')->nullable();
            $table->enum('status', ['aktif','nonaktif'])->default('nonaktif');
            $table->enum('jenis', ['online','manual']);
            $table->string('drive')->nullable();
            $table->timestamps();
        });

        Schema::create('penjualan', function(Blueprint $table) {
            $table->bigIncrements('id');  

            $table->unsignedBigInteger('pelanggan_id')->nullable();
            $table->foreign('pelanggan_id')->references('id')->on('users');
            
            $table->unsignedInteger('pengiriman_id')->nullable();
            $table->foreign('pengiriman_id')->references('id')->on('pengiriman')->onDelete('cascade');
            
            $table->unsignedInteger('pembayaran_id')->nullable();
            $table->foreign('pembayaran_id')->references('id')->on('pembayaran')->onDelete('cascade');
            
            $table->dateTime('tanggal')->nullable();
            $table->dateTime('diproses_pada')->nullable();
            $table->dateTime('diantar_pada')->nullable();
            $table->dateTime('dikirim_pada')->nullable();
            $table->dateTime('diselesaikan_pada')->nullable();
            $table->dateTime('dibatalkan_pada')->nullable();


            $table->string('no_transaksi')->nullable();
            $table->enum('status',['masuk','diproses', 'dikirim', 'diantar', 'selesai', 'batal'])->default('masuk');

            $table->unsignedBigInteger('dibuat_oleh_id')->nullable();
            $table->foreign('dibuat_oleh_id')->references('id')->on('users');

            $table->unsignedBigInteger('diproses_oleh_id')->nullable();
            $table->foreign('diproses_oleh_id')->references('id')->on('users');

            $table->unsignedBigInteger('dikirim_oleh_id')->nullable();
            $table->foreign('dikirim_oleh_id')->references('id')->on('users');

            $table->unsignedBigInteger('diantar_oleh_id')->nullable();
            $table->foreign('diantar_oleh_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('diselesaikan_oleh_id')->nullable();
            $table->foreign('diselesaikan_oleh_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('dibatalkan_oleh_id')->nullable();
            $table->foreign('dibatalkan_oleh_id')->references('id')->on('users');

            $table->integer('jumlah_pembelian')->nullable();
            $table->integer('diskon')->nullable();
            $table->integer('total_komisi')->nullable();
            $table->integer('ongkos_kirim')->nullable();
            $table->integer('total')->nullable();
            $table->string('no_resi')->nullable();
            $table->string('berat')->nullable();
            $table->string('jarak')->nullable();
            $table->dateTime('tanggal_resi')->nullable();
            $table->string('catatan_pembatalan')->nullable();
            $table->string('catatan_pengiriman')->nullable();
            $table->string('catatan_penyelesaian')->nullable();
            $table->string('dari_nama')->nullable();
            $table->string('dari_nomor_hp')->nullable();
            $table->string('dari_alamat')->nullable();
            $table->string('kepada_nama')->nullable();
            $table->string('kepada_nomor_hp')->nullable();
            $table->string('kepada_alamat')->nullable();
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
        Schema::dropIfExist('pengiriman');
        Schema::dropIfExist('pembayaran');
    }
}
