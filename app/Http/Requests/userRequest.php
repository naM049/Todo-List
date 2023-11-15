<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_name' => ['required'],
            'password' => ['required','confirmed','min_digits:8'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
