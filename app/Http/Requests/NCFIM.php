<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NCFIM extends FormRequest
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
    public function rules(): array
    {
        return [
            'codigo_ncf' => ['unique:n_c_f_maestros,codigo_ncf'],
            'nombre_ncf' => ['required'],
            'parte_fija' => ['required'],
            'cantidad' => ['required']

        ];
    }
}
