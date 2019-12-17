<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateStoredProcedureAddDisposisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            DELIMITER $$
            CREATE DEFINER=`root`@`localhost` PROCEDURE `add_disposisi`(IN `no_surat` VARCHAR(255))
                NO SQL
            BEGIN
                INSERT INTO `disposisi` (`no_surat`, `status`, `created_at`, `updated_at`) VALUES (no_surat, 0, now(), now());
            END$$
            DELIMITER ;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("
        DROP PROCEDURE IF EXISTS `add_disposisi`;
        ");
    }
}
