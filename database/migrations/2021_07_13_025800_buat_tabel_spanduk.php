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
            $table->string('link')->nullable();
            $table->enum('status', ['draft','published']);
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
