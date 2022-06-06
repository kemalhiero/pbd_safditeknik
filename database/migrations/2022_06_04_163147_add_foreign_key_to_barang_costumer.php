<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToBarangCostumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barang_costumer', function (Blueprint $table) {
            //
            $table->foreign('id_pelanggan', 'fk_barang_costumer_to_costumer')->references('id')->on('costumer')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barang_costumer', function (Blueprint $table) {
            $table->dropForeign('fk_barang_costumer_to_costumer');
        });
    }
}
