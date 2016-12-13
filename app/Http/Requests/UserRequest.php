<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->role == 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = $this->route('user');

        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users,id,'.$user->id.',id',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|in:member,admin',
        ];
    }
}
