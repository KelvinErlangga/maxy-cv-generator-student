<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddSkillRequest extends FormRequest
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
            'skill_name' => ['required', 'array'],
            'skill_name.*' => ['required', 'string', 'max:255'],
            'level' => ['required', 'array'],
            'level.*' => ['required', 'string', 'max:255']
        ];
    }
}
