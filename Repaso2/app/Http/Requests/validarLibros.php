<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarLibros extends FormRequest
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
            "ISBN" => "required|digits:13|numeric",
            "titulo" => "required|string|max:150|min:3",
            "autor" => "required|string|max:100|min:3",
            "paginas" => "required|integer|min:1",
            "año" => "required|integer|digits:4|min:1000|max:" . date('Y'),
            "mail" => "required|email"
        ];
    }
}
