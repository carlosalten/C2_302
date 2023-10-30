<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TarjetasRequest extends FormRequest
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
            'numero' => 'bail|required|size:8|unique:tarjetas,numero',
            'cliente' => 'bail|required|min:5',
            'cupo' => 'bail|required|numeric|gte:0',
            'utilizado' => 'bail|required|numeric|gte:0',
        ];
    }

    public function messages(): array
    {
        return [
            'numero.required' => 'Indique el número de tarjeta',
            'numero.size' => 'El número de tarjeta debe tener 8 dígitos',
            'numero.unique' => 'El número ingresado ya está asignado a otra tarjeta',
            'cliente.required' => 'Indique el nombre del dueño de la tarjeta',
            'cliente.min' => 'El nombre del cliente debe tener mínimo 5 letras',
            'cupo.required' => 'Indique el cupo de la tarjeta',
            'cupo.numeric' => 'El cupo de la tarjeta debe ser un número',
            'cupo.gte' => 'El cupo de la tarjeta debe ser mínimo 0',
            'utilizado.required' => 'Indique el monto utilizado',
            'utilizado.numeric' => 'El monto utilizado debe ser un número',
            'utilizado.gte' => 'El monto utilizado debe ser mínimo 0',
        ];
    }
}
