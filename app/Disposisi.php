<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = "disposisi";
    protected $fillable = [
        'no_surat',
        'kepada',
        'keterangan',
        'status',
        'tanggapan'
    ];
    public function suratMasuk()
    {
        return $this->belongsTo('App\SuratMasuk', 'no_surat');
    }
}
