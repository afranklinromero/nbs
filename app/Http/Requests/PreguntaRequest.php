<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreguntaRequest extends FormRequest
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
    public function rules(){
        return [
            //
            'tema_id' => 'required|numeric',
            'pregunta' => 'required|min:1|max:512',
        ];
    }

    public function messages(){
        return [
            'tema_id.required' => 'El :attribute es obligatorio.',
            'tema_id.numeric' => 'El :attribute debe ser numérico.',
            'pregunta.required' => 'El :attribute es obligatorio.',
            'pregunta.min' => 'El :attribute debe ser mínimo 3',
            'pregunta.max' => 'El :attribute debe ser máximo 512',
        ];
    }
    public function attributes()
    {
        return [
            'pregunta' => 'pregunta',
        ];
    }
}
