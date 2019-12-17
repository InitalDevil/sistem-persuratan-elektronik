<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTriggerDeleteDisposisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE TRIGGER deleteDisposisi BEFORE DELETE ON `surat_masuk` FOR EACH ROW 
            BEGIN
                DELETE FROM `disposisi` where `no_surat` = OLD.no_surat;
            END
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER deleteDisposisi');
    }
}
