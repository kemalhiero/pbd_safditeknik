<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengecekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengecekan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_teknisi')->index('fk_pengecekan_to_teknisi');
            $table->foreignId('no_struk')->index('fk_pengecekan_to_pembayaran');
            $table->text('deskripsi_pengecekan');
            $table->boolean('konfirmasi_pengecekan');
            $table->date('tanggal');
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
        Schema::dropIfExists('pengecekan');
    }
}
