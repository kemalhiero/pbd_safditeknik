<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTransaksiBarangCostumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi_barang_costumer', function (Blueprint $table) {
            //
            $table->foreign('id_barang', 'fk_transaksi_barang_costumer_to_barang_costumer')->references('id_barang')->on('barang_costumer')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('no_pengecekan', 'fk_transaksi_barang_costumer_to_pengecekan')->references('no_pengecekan')->on('pengecekan')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi_barang_costumer', function (Blueprint $table) {
            //
        });
    }
}
