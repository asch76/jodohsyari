<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RiwayatPekerjaanRequest extends FormRequest
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
            // 'user_id' => 'required',
            'perusahaan' => 'required',
            'jabatan' => 'required',
            'dari_tahun' => 'required|numeric',
            'sampai_tahun' => 'required|numeric',
        ];
    }
}
