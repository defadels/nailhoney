<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelBlog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('count')->default(0);
            $table->timestamps();
        });
        
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul')->nullable();
            $table->string('abstrak')->nullable();
            $table->text('konten')->nullable();
            $table->string('penulis')->nullable();
            $table->unsignedInteger('kategori_id')->nullable();
            $table->string('foto')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('keyword')->nullable();
            $table->string('slug')->nullable();
            $table->enum('status',['aktif','nonaktif'])
            ->default('nonaktif');
            $table->timestamps();
            $table->index(['status', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
        Schema::dropIfExists('kategori');
    }
}
