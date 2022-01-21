<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('subdomain')->unique();
            $table->string('custom_domain')->unique()->nullable();
            $table->string('tema')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->enum('jenis',['seller','distributor'])->default('distributor');
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
        Schema::dropIfExist('pelanggan');
    }
}
