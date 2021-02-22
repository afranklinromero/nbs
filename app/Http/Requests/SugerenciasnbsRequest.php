<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SugerenciasnbsRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|min:0',
            'subject' => 'required',
            'content' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'email.required' => 'Añade un :attribute al producto',
            'subject.required' => 'El :attribute debe ser mínimo 0',
            'content.required' => 'El :attribute debe ser mínimo 0',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre usuario',
            'email' => 'correo usuario',
            'subject' => 'asunto',
            'contente' => 'contenido correo',
        ];
    }
}
