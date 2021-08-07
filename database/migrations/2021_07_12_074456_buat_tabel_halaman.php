<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelHalaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halaman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul');
            $table->text('konten');
            $table->string('slug');
            $table->string('foto');
            $table->string('keyword');
            $table->string('deskripsi');
            $table->enum('status', ['draft','published']);
            $table->timestamps();
            $table->index(['status','created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halaman');
    }
}
