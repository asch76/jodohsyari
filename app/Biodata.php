<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'user_id', 'nama_lengkap', 'nama_panggilan', 'tempat_lahir', 'tanggal_lahir',
        'negara_asal', 'suku', 'jenis_kelamin', 'jenis_identitas', 'nomor_identitas',
        'pendidikan_terakhir', 'pekerjaan', 'status_pernikahan', 'jumlah_anak', 'jumlah_istri'
    ];

    public function getUsiaAttribute()
    {
        return $this->tanggal_lahir ? $this->tanggal_lahir->diffInYears() : 0;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function statusPernikahan($jenisKelamin = 99)
    {
        $list = [
            'Ikhwan' => [
                'Lajang' => 'Lajang',
                'Menikah' => 'Menikah',
                'Duda' => 'Duda'
            ],
            'Akhawat' => [
                'Lajang' => 'Lajang',
                'Janda' => 'Janda'
            ]
        ];

        return $jenisKelamin == 99 ? $list : $list[$jenisKelamin];
    }

    public static function pendidikanList()
    {
        return [
            'SD/Sederajat' => 'SD/Sederajat',
            'SMP/Sederajat' => 'SMP/Sederajat',
            'SMA/Sederajat' => 'SMA/Sederajat',
            'D1' => 'D1',
            'D2' => 'D2',
            'D3' => 'D3',
            'S1' => 'S1',
            'S2' => 'S2',
            'S3' => 'S3',
        ];
    }
}
