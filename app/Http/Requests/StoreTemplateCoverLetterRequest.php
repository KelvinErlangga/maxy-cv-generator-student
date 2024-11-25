<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTemplateCoverLetterRequest extends FormRequest
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
            'template_cover_letter_name' => ['required', 'string', 'max:255'],
            'thumbnail_cover_letter' => ['required', 'image', 'mimes:png,jpg,jpeg']
        ];
    }
}