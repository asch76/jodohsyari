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
            'jenis_identitas' => 'required',
            'nomor_identitas' => 'required',
            'jenis_kelamin' => 'boolean',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'negara_asal' => 'required',
            'suku' => 'required',
            'pendidikan_terakhir' => 'required',
            'pekerjaan' => 'required',
            'status_pernikahan' => 'required|in:Lajang,Menikah,Duda,Janda',
            'jumlah_anak' => 'numeric',
            'jumlah_istri' => 'numeric',
        ];
    }
}
