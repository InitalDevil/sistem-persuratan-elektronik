<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = "disposisi";
    protected $fillable = [
        'no_disposisi',
        'no_agenda',
        'kepada',
        'keterangan',
        'status',
        'tanggapan'
    ];
    public function surat_masuk()
    {
        return $this->belongsTo('App\SuratMasuk', 'no_agenda');
    }
}
