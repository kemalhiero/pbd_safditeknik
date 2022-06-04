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
            $table->id('no_pengecekan');
            $table->text('deskripsi_pengecekan');
            $table->boolean('konfirmasi_pengecekan');
            $table->date('tanggal');
            $table->foreignId('id_teknisi');
            $table->foreignId('no_struk');
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
