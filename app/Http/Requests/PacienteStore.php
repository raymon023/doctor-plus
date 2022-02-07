<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteStore extends FormRequest
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
         'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required|numeric',
            'fecha_nac' => 'required',
            'sexo' => 'required',
            'lugar_trabj' => 'required|string',
            'estado_civ' => 'required',
            'direccion' => 'required',
            'tel1' => 'required|numeric',
            'tel2' => 'required|numeric',
            'poliza' => 'required|numeric',
            'tificacion' => 'required|',
            'email' => 'required|email'
        ];
    }
}
