<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusSurat extends Model
{
    protected $table = "status_surat";
    protected $fillable = [
        'nama'
    ];
    public function disposisi()
    {
        return $this->hasMany('App\Disposisi');
    }
}
