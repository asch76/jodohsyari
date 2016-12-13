<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisik extends Model
{
    protected $fillable = [
        'golongan_darah', 'berat_badan', 'tinggi_badan',
        'riwayat_penyakit', 'warna_kulit', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function golonganDarahList()
    {
        return [
            'A' => 'A',
            'B' => 'B',
            'AB' => 'AB',
            'O' => 'O',
        ];
    }

    public static function warnaKulitList()
    {
        return [
            'Putih' => 'Putih',
            'Kuning Langsat' => 'Kuning Langsat',
            'Sawo Matang' => 'Sawo Matang',
            'Coklat' => 'Coklat',
            'Hitam' => 'Hitam',
        ];
    }
}
