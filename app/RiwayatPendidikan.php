<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikan extends Model
{
    protected $fillable = ['nama_sekolah', 'jurusan', 'tahun_lulus', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
