<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiBarangCostumerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_barang_costumer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barang')->index('fk_transaksi_barang_costumer_to_barang_costumer');
            $table->foreignId('no_pengecekan')->index('fk_transaksi_barang_costumer_to_pengecekan');
            $table->integer('jumlah');
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
        Schema::dropIfExists('transaksi_barang_costumer');
    }
}
