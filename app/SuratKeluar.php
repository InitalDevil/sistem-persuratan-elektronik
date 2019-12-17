<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = "surat_keluar";
    protected $primaryKey = "no_surat";
    public $incrementing = false;
    protected $keyType = "string";
    protected $fillable = [
        'no_surat',
        'no_agenda',
        'user_id',
        'jenis_surat',
        'pengirim',
        'tgl_kirim',
        'perihal'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
