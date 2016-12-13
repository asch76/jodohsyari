<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'foto', 'active', 'verified', 'api_token', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    protected $dates = ['last_login'];

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

    public function biodata()
    {
        return $this->hasOne(Biodata::class);
    }

    public function fisik()
    {
        return $this->hasOne(Fisik::class);
    }

    public function keluarga()
    {
        return $this->hasOne(Keluarga::class);
    }

    public function kepribadian()
    {
        return $this->hasOne(Kepribadian::class);
    }

    public function kontak()
    {
        return $this->hasOne(Kontak::class);
    }

    public function scopeNonActive($query)
    {
        return $query->where('active', 0);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeMember($query)
    {
        return $query->where('role', 'member');
    }

    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    public function scopeOfRole($query, $role)
    {
        return $query->where('role', $role);
    }

    public function hasRole($role)
	{
		return $this->role == $role;
	}

}
