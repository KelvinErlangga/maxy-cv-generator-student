<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'language_name' => ['required', 'array'],
            'language_name.*' => ['required', 'string', 'max:255'],
            'level' => ['required', 'array'],
            'level.*' => ['required', 'string', 'max:255']
        ];
    }
}
