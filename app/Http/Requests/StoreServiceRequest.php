<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'tipo_servico' => 'required|max:128|string',
            'tempo_inicial' => 'required|before:tempo_final',
        ];
    }

    public function messages() {
        return [
            'tipo_servico.max' => 'Título deve conter até 128 caracteres',
            'tipo_servico.string' => 'Título precisa ser texto',
            'tempo_inicial.before' => 'A data final não pode anteceder a data inicial',
        ];
    }
}
