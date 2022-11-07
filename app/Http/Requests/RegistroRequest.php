<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegistroRequest extends FormRequest
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
        $matricula = $this->matricula;
        return [
			'matricula' => 'required|exists:alunos,matricula',

        ];
    }

    public function messages() {
        return [
            'matricula.required' => 'Obrigatório',
			'matricula.exists' => 'Inexistente',
        ];
    }
}
