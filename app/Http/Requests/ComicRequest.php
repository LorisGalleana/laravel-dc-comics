<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4'
        ];
    }


    public function messages()
    {
       return [
            'title.required' => "Il titolo è un campo obbligatorio",
            'title.min' => "Il titolo deve contenere almeno :min caratteri",
        ];
    }
}
