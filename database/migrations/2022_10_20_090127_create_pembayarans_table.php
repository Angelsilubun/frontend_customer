<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pembayaran')->unsigned();
            $table->bigInteger('id_pemesanan')->unsigned();
            $table->string('nama_customer');
            $table->enum('payment',['cod','transfer']);
            $table->double('total');
            $table->dateTime('waktu_pembayaran');
            $table->dateTime('tanggal_pembayaran');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pembayarans');
    }
};
