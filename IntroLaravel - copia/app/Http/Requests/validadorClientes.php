<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorClientes extends FormRequest
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
            'txtnombre'=>'required|min:3|max:100',
            'txtapellido'=>'required|min:3|max:100',
            'txtcorreo'=>'required|email:rfc,dns|max:255',
            'txttelefono'=>'required|numeric'
            
        ];
    }
}
