<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
    public function rules()/* : array */
    {
        return [
            'cPerApellidos' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'dPerFecNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'cPerEstado' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'cPerApellidos.required' => 'se necesita apellido',
            'cPerNombre.required' => 'se necesita nombre',
            'cPerDireccion.required' => 'se necesita direccion',
            'dPerFecNac.required' => 'se necesita fecha de nacimiento',
            'nPerEdad.required' => 'se necesita edad',
            'nPerSueldo.required' => 'se necesita suerdo',
            'cPerEstado.required' => 'se necesita estado civil'
        ];

    }
}
