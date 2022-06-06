<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPengecekan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengecekan', function (Blueprint $table) {
            //
            $table->foreign('id_teknisi', 'fk_pengecekan_to_teknisi')->references('id')->on('teknisi')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('no_struk', 'fk_pengecekan_to_pembayaran')->references('id')->on('pembayaran')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengecekan', function (Blueprint $table) {
            $table->dropForeign('fk_pengecekan_to_teknisi');
            $table->dropForeign('fk_pengecekan_to_pembayaran');
        });
    }
}
