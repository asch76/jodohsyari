<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepribadian extends Model
{
    protected $fillabel = [
        'user_id', 'profil', 'karakter_positif',
        'karakter_negatif', 'hobby'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
