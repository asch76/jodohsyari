<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = [
        'user_id', 'alamat', 'telepon', 'hp',
        'email', 'fb', 'twitter'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
