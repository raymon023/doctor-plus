<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterStore extends FormRequest
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
            // 'aprobacion' => ['required', 'numeric'],
            // 'codigo' => ['required'],
            // 'tipo_ncf' => ['required', 'string'],
            // 'quantity' => ['string', 'required'],
            // 'parte_fija' => ['required', 'string']
        ];
    }

}
