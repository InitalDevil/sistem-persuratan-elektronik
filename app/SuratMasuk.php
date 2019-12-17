<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = "surat_masuk";
    protected $primaryKey = "no_surat";
    public $incrementing = false;
    protected $keyType = "string";
    protected $fillable = [
        'no_surat',
        'no_agenda',
        'user_id',
        'jenis_surat',
        'pengirim',
        'perihal',
        'tgl_terima',
        'tgl_kirim',
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function disposisi()
    {
        return $this->hasMany('App\Disposisi');
    }
}
