<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelSpanduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spanduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable();
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('link')->nullable();
            $table->string('label_tombol')->nullable();
            $table->string('warna_tulisan')->nullable();
            $table->enum('status', ['nonaktif','aktif']);
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
       Schema::dropIfExists('spanduk');
    }
}
