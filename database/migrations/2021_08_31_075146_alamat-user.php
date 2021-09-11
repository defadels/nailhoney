<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlamatUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('alamat_user', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->unsignedBigInteger('pelanggan_id')->nullable();
        $table->foreign('pelanggan_id')->references('id')->on('users');
        $table->string('label')->nullable();
        $table->enum('is_default',['ya','tidak'])->default('tidak');
        $table->string('nama_penerima')->nullable();
        $table->string('nomor_hp_penerima')->nullable();
        $table->string('alamat_penerima')->nullable();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('alamat_user');
    }
}
