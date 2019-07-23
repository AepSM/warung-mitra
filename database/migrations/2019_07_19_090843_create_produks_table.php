<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100)->nullable();
            $table->tinyInteger('kondisi_id');
            $table->tinyInteger('kategori_id');
            $table->integer('berat')->unsigned()->nullable();
            $table->string('merek', 50)->nullable();
            $table->text('deskripsi')->nullable();
            $table->smallInteger('stok')->nullable();
            $table->integer('harga')->unsigned()->nullable();
            $table->string('gambar1', 50)->nullable();
            $table->string('gambar2', 50)->nullable();
            $table->string('gambar3', 50)->nullable();
            $table->integer('terjual')->unsigned()->nullable();
            $table->integer('dilihat')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
