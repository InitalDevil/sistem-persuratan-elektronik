<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewVSuratMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            CREATE VIEW `v_surat_masuk`  AS  select `surat_masuk`.`no_surat` AS `no_surat`,`users`.`nama` AS `nama`,`surat_masuk`.`jenis_surat` AS `jenis_surat`,`surat_masuk`.`no_agenda` AS `no_agenda`,`surat_masuk`.`pengirim` AS `pengirim`,`surat_masuk`.`perihal` AS `perihal`,`surat_masuk`.`tgl_kirim` AS `tgl_kirim`,`surat_masuk`.`tgl_terima` AS `tgl_terima`,`surat_masuk`.`created_at` AS `created_at`,`surat_masuk`.`updated_at` AS `updated_at` from (`surat_masuk` join `users` on(`surat_masuk`.`user_id` = `users`.`id`)) where cast(`surat_masuk`.`created_at` as date) = curdate() ;
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
            DROP VIEW IF EXISTS `v_surat_masuk`;
        ");
    }
}
