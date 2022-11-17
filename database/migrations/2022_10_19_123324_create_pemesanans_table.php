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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pemesanan')->unsigned();
            $table->bigInteger('id_customer')->unsigned();
            $table->bigInteger('id_ongkir')->unsigned();
            $table->string('kode_sublayanan');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->double('total_pemesanan');
            $table->double('tarif_penjemputan');
            $table->double('diskon');
            $table->double('total');
            $table->string('alamat_penjemputan');
            $table->enum('payment',['cod','transfer']);
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
        Schema::dropIfExists('pemesanans');
    }
};
