<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 30)->nullable();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->date('tanggal');
            $table->string('nama', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('status_bayar', 100)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
