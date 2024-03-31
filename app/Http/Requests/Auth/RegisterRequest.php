<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name' => ['required', 'max:16', 'string'],
            'email' => ['required', 'email'],
            'password'=> ['required', 'min:8'],
            'confirm_password' => ['required', 'min:8'],
        ];
    }
}
