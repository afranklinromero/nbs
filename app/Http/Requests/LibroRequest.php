<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
            'titulo' => 'required|min:8|max:256',
            'fecha' => 'required|date',
            //'tapa' => 'required',
            //'documentopdf' => 'required',
            //'imagen' => 'required|min:5|max:128',
            //'ext' => 'required|min:1|max:6',
            //'documentopdf' => 'max:128',
            'nropublicacion' => 'required|numeric',
            'autor' => 'required|min:8|max:128',
            'edicion' => 'required|min:1|max:64',
            'serie' => 'max:64',
            'lugarpublicacion' => 'required|min:4|max:64',
            //'estado' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'user_id.required' => 'El :attribute es obligatorio.',
            'user_id.numeric' => 'El :attribute deber ser numérico',

            'titulo.required' => 'El :attribute es obligatorio',
            'titulo.min' => 'El :attribute como mínimo 8 caracter(es)',
            'titulo.max' => 'El :attribute como máximo 256 caracter(es)',

            'fecha.required' => 'El :attribute es obligatorio',
            'fecha.date' => 'El :attribute debe ser una fecha válida',

            'tapa.required' => 'El :attribute es obligatorio',

            'documentopdf.required' => 'El :attribute es obligatorio',

            'nropublicacion.required' => 'El :attribute es obligatorio',
            'nropublicacion.numeric' => 'El :attribute debe ser numérico',

            'autor.required' => 'El :attribute es obligatorio',
            'autor.min' => 'El :attribute como mínimo 8 caracter(es)',
            'autor.max' => 'El :attribute como máximo 128 caracter(es)',

            'edicion.required' => 'El :attribute es obligatorio',
            'edicion.min' => 'El :attribute como mínimo 4 caracter(es)',
            'edicion.max' => 'El :attribute como máximo 64 caracter(es)',

            'serie.min' => 'El :attribute como mínimo 2 caracter(es)',
            'serie.max' => 'El :attribute como máximo 64 caracter(es)',

            'lugarpublicacion.required' => 'El :attribute es obligatorio',
            'lugarpublicacion.min' => 'El :attribute como mínimo 4 caracter(es)',
        ];
    }
    public function attributes()
    {
        return [
            'user_id' => 'Id usuario',
            'titulo' => 'Titulo',
            'fecha' => 'Fecha publicación',
            'tapa' => 'Vista previa documento',
            'documentopdf' => 'Documento pdf',
            'autor' => 'Autor',
            'edicion' => 'Edición',
            'serie' => 'Serie',
            'lugarpublicacion' => 'Lugar de publicación',
        ];
    }
}
