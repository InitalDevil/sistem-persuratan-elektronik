<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnDisposisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disposisi', function (Blueprint $table) {
            $table->foreign('no_agenda')->references('no_agenda')->on('surat_masuk')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('status_surat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disposisi', function (Blueprint $table) {
            $table->dropForeign('disposisi_no_agenda_foreign');
            $table->dropForeign('disposisi_status_foreign');
        });
    }
}
