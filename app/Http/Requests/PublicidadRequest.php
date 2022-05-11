<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicidadRequest extends FormRequest
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
            'user_id' => 'required|numeric',
            'titulo' => 'required|min:8|max:64',
            'imagenfile' => (isset($this->id)? '' : 'required') ,
            'contenido' => 'max:3024',
            'link' => 'max:128',
        ];
    }

    public function messages(){
        return [
            '*.required' => 'El dato :attribute es obligatorio.',
            //numericos
            '*.numeric' => 'El :attribute deber ser numérico',
            '*.min' => 'El :attribute debe dener :min caracteres como mínimo',
            '*.max' => 'El :attribute debe tener :max caracteres como máximo',
        ];
    }
    public function attributes()
    {
        return [
            'user_id' => 'Id usuario',
            'titulo' => 'Titulo',
            'imagen' => 'Imagen',
            'link' => 'Enlace pagina externa',
            'Lugar' => 'Contenido',
            'imagenfile' => 'Archivo de imagen',
        ];
    }
}
