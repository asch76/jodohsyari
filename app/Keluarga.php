<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $fillable = [
        'user_id', 'nama_ayah', 'nama_ibu',
        'anak_ke', 'jumlah_saudara'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
