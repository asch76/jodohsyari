<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'nomor_identitas' => 'required',
            'jenis_kelamin' => 'boolean',
            'status' => 'in:0,1,2',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'golongan_darah' => 'required|in:A,B,O,AB',
            'berat_badan' => 'required|decimal',
            'tinggi_badan' => 'required|decimal',
            'warna_kulit' => 'required',
            'hobby' => 'required',
            'karakter_positif' => 'required',
            'karakter_negatif' => 'required',
            'email' => 'required|email',
            // 'telepon' => '',
            'hp' => 'required',
            // 'twitter' => '',
            // 'fb' => '',
            'suku' => 'required',
            'negara_asal' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'anak_ke' => 'numeric',
            'pekerjaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'riwayat_penyakit' => 'required',
            'status_pernikahan' => 'required|in:Perjaka,Menikah,Duda,Gadis,Janda',
            'jumlah_anak' => 'numeric',
            'profile' => 'required'
        ];
    }
}
