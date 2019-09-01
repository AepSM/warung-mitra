<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderSementarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sementaras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('produk_id')->unsigned()->nullable();
            $table->smallInteger('qty')->nullable();
            $table->integer('harga')->unsigned()->nullable();
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
        Schema::dropIfExists('order_sementaras');
    }
}
