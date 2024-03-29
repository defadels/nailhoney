<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('link')->nullable();
            $table->enum('status',['aktif','nonaktif']);
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
        Schema::dropIfExists('menu');
    }
}
