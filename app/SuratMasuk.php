<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = "surat_masuk";
    protected $fillable = [
        'no_agenda',
        'user_id',
        'jenis_surat',
        'no_surat',
        'pengirim',
        'perihal',
        'tgl_terima'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function disposisi()
    {
        return $this->hasMany('App\Disposisi');
    }
    public function jenis_surat()
    {
        return $this->belongsTo('App\JenisSurat', 'jenis_surat');
    }
}
