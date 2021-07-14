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
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto')->nullable();
            $table->string('nama')->nullable();
            $table->unsignedInteger('kategori_id')->nullable();
            $table->text('konten')->nullable();
            $table->string('slug')->nullable();
            $table->integer('harga')->nullable();
            $table->integer('komisi')->nullable();
            $table->string('satuan')->nullable();
            $table->string('keyword')->nullable();
            $table->string('deskripsi')->nullable();
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
    }
}
