<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorBuscarVuelo extends FormRequest
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
            'fecha' => 'required|date|after:today|before_or_equal:' . now()->addYears(2)->format('Y-m-d'),
            'origen' => 'required|string',
            'destino' => 'required|string',
        ];
    }
}