<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationVehiculos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            'placa' => ['required', 'string', 'max:10'], 
            'marca' => ['required', 'string', 'min:2'],
            'modelo' => ['required', 'string', 'min:2'],
            'ano' => ['required', 'integer', 'min:1900', 'max:' . date('Y')],
            'chasis' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/'],
            'aseguradora' => ['required', 'string', 'min:2'],
            'num_seguro' => ['required', 'string', 'min:2'],
            'seguro_vencimiento' => ['required', 'date', 'after_or_equal:today'], 
            'rev_tecnica' => ['nullable', 'string'], 
            'rev_vencimiento' => ['nullable', 'date', 'after_or_equal:today'],        

        ];
    }
}
