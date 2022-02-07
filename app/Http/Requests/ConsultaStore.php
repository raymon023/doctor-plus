<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaStore extends FormRequest
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
            'motivo' => 'required|string',
            'antec_pers_quirugicos' => 'required|string',
            'antec_pers_patologicos' => 'required|string',
            'evaluacion' => 'required|string',
            'observacion' => 'required|string',
            'diagnostico' => 'required|string',
            'hab_toxico' => 'required|string',
            'hist_enf' => 'required|string',

        ];
    }
}
