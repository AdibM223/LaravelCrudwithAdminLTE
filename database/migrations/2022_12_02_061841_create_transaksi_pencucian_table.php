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
        Schema::create('transaksi_pencucian', function (Blueprint $table) {
            $table->bigIncrements('id_transaksibayar');
            $table->enum('statuspembayaran',array('belum bayar','lunas'));
            $table->bigInteger('nominalbayar');
            $table->date('tanggal_transaksi');
            $table->timestamps();
        });

        Schema::table('transaksi_pencucian', function (Blueprint $table) {
            $table->unsignedBigInteger('id_metode');
            $table->unsignedBigInteger('id_kendaraan');

            $table->foreign('id_metode')->references('id_metodebayar')->on('metode_pembayaran');
            $table->foreign('id_kendaraan')->references('idkendaraan')->on('kendaraan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pencucian');
    }
};
