<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const STATUS_NONACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_SUSPENDED = 2;

    public $appends = ['umur'];

    public $dates = ['tanggal_lahir'];

    public function getUmurAttribute()
    {
        return $this->tanggal_lahir->diffInYears();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'jenis_kelamin',
        'nama_lengkap', 'nama_panggilan', 'nama_ayah', 'nama_ibu',
        'tempat_lahir', 'tanggal_lahir', 'golongan_darah', 'anak_ke',
        'berat_badan', 'tinggi_badan', 'suku', 'negara_asal',
        'alamat', 'telepon', 'hp', 'fb', 'twitter',
        'hobby', 'karakter_positif', 'karakter_negatif',
        'pekerjaan', 'pendidikan_terakhir', 'warna_kulit',
        'nomor_identitas', 'status', 'riwayat_penyakit', 'admin', 'foto',
        'jumlah_anak', 'status_pernikahan', 'profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    public function perjodohanIkhwan()
    {
        return $this->hasMany(Perjodohan::class, 'ikhwan_id', 'user_id');
    }

    public function perjodohanAkhawat()
    {
        return $this->hasMany(Perjodohan::class, 'akhawat_id', 'user_id');
    }

    public function pendidikans()
    {
        return $this->hasMany(RiwayatPendidikan::class);
    }

    public function pekerjaans()
    {
        return $this->hasMany(RiwayatPekerjaan::class);
    }

    public static function statusPernikahan($jenisKelamin = 99)
    {
        $list = [
            'Ikhwan' => [
                'Perjaka' => 'Perjaka',
                'Menikah' => 'Menikah',
                'Duda' => 'Duda'
            ],
            'Akhawat' => [
                'Gadis' => 'Gadis',
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

    public function scopeNonActive($query)
    {
        return $query->where('status', 0);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeSuspended($query)
    {
        return $query->where('status', 2);
    }

    public function scopeOfRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function scopeOfStatusPernikahan($query, $status)
    {
        return $query->where('status_pernikahan', $status);
    }

}
