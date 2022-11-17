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
        Schema::create('pemesanan_layanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pemesanan_layanan')->unsigned();
            $table->bigInteger('id_pemesanan')->unsigned();
            $table->string('kode_sublayanan');
            $table->string('quantity');
            $table->string('nama_sublayanan');
            $table->double('harga');
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
        Schema::dropIfExists('pemesanan_layanans');
    }
};
