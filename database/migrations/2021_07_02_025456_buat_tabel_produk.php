<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::create('kategori_produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('count')->default(0);
            $table->timestamps();
        });
        

        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto')->nullable();
            $table->string('nama')->nullable();
            $table->unsignedInteger('kategori_id')->nullable();
            $table->foreign('kategori_id')->references('id')->on('kategori_produk');
            $table->text('konten')->nullable();
            $table->string('slug')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('komisi')->nullable();
            $table->string('satuan')->nullable();
            $table->string('keyword')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });

        Schema::create('foto_produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('produk_id')->nullable();
            $table->string('foto');
            $table->string('keterangan');
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
        Schema::dropIfExists('produk');
        Schema::dropIfExists('kategori_produk');
        Schema::dropIfExists('foto_produk');
    }
}
