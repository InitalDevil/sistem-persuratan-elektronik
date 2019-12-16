<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisSurat extends Model
{
    protected $table = "jenis_surat";
    protected $fillable = [
        'nama'
    ];
    public function surat_masuk()
    {
        return $this->hasMany('App\SuratMasuk');
    }
    public function surat_keluar()
    {
        return $this->hasMany('App\SuratKeluar');
    }
}
