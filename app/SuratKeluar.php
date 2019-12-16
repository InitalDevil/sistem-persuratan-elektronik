<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    protected $table = "surat_keluar";
    protected $fillable = [
        'no_agenda',
        'user_id',
        'jenis_surat',
        'no_surat',
        'pengirim',
        'perihal'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
