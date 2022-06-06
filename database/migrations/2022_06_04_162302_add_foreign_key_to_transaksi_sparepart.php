<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTransaksiSparepart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_sparepart', function (Blueprint $table) {
            //
            $table->foreign('no_pengecekan', 'fk_transaksi_sparepart_to_pengecekan')->references('id')->on('pengecekan')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_sparepart', 'fk_transaksi_sparepart_to_sparepart')->references('id')->on('sparepart')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_sparepart', function (Blueprint $table) {
            $table->dropForeign('fk_transaksi_sparepart_to_pengecekan');
            $table->dropForeign('fk_transaksi_sparepart_to_sparepart');
        });
    }
}
