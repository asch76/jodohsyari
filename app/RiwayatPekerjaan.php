<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPekerjaan extends Model
{
    protected $fillable = ['perusahaan', 'jabatan', 'dari_tahun', 'sampai_tahun', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
