<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationTest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
                'maquina' => ['required', 'string', 'min:3'],
                'marca' => ['required', 'string', 'min:2'],
                'modelo' => ['required', 'string', 'min:2'],
                'ano' => ['required', 'integer', 'min:1900', 'max:' . date('Y')],
                'chasis' => ['required', 'string'],
                'titular' => ['required', 'string', 'min:5'],               

        ];
    }
}
