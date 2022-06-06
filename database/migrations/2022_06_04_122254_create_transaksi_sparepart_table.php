<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiSparepartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_sparepart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_sparepart')->index('fk_transaksi_sparepart_to_sparepart');
            $table->foreignId('no_pengecekan')->index('fk_transaksi_sparepart_to_pengecekan');
            $table->integer('jumlah_sparepart');
            $table->softDeletes();
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
        Schema::dropIfExists('transaksi_sparepart');
    }
}
