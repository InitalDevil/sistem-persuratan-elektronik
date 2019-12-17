<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->string('no_surat')->primary();
            $table->unsignedBigInteger('user_id');
            $table->string('jenis_surat');
            $table->string('no_agenda');
            $table->string('pengirim');
            $table->string('perihal');
            $table->date('tgl_kirim');
            $table->date('tgl_terima');
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
        Schema::dropIfExists('surat_masuk');
    }
}
