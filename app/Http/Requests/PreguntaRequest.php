<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        //($this);
        $respuesta1 = $this->respuestas[0];
        $respuesta2 = $this->respuestas[1];
        $respuesta3 = $this->respuestas[2];
        $respuesta4 = $this->respuestas[3];
        return [
            //
            'tema_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'pregunta' => 'required',
            'respuestas.0' => 'required|'.Rule::notIn([$respuesta2,  $respuesta3, $respuesta4]),
            'respuestas.1' => 'required|'.Rule::notIn([$respuesta1,  $respuesta3, $respuesta4]),
            'respuestas.2' => 'required|'.Rule::notIn([$respuesta2,  $respuesta1, $respuesta4]),
            'respuestas.3' => 'required|'.Rule::notIn([$respuesta2,  $respuesta3, $respuesta1]),
        ];
    }

    public function messages(){
        return [
            'tema_id.required' => 'El :attribute es obligatorio.',
            'tema_id.numeric' => 'El :attribute debe ser numérico.',
            'user_id.required' => 'El :attribute es obligatorio.',
            'user_id.numeric' => 'El :attribute debe ser numérico.',
            'pregunta.required' => 'El :attribute es obligatorio.',
            'pregunta.size' => 'La :attribute debe tener maximo 512 caracteres',
            'respuestas.*.required' => 'La :attribute es obligatorio',
            'respuestas.*.not_in' => 'La :attribute debe ser diferente a las demas',

        ];
    }
    public function attributes()
    {
        return [
            'user_id' => 'id usuario',
            'tema_id' => 'id tema',
            'pregunta' => 'pregunta',
            'respuestas.0' => 'respuesta 1',
            'respuestas.1' => 'respuesta 2',
            'respuestas.2' => 'respuesta 3',
            'respuestas.3' => 'respuesta 4',
        ];
    }
}
