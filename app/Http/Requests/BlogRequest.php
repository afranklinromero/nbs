<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            //'imagen' => 'required|min:5|max:128',
            //'ext' => 'required|min:1|max:6',
            'documentopdf' => 'max:128',
            'youtube' => 'max:128',
            'contenido' => 'required|min:8|max:3024',
            'autor' => 'required|min:3|max:64',
            'referencia' => 'required|min:6|max:64',
            //'estado' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'user_id.required' => 'El :attribute es obligatorio.',
            'titulo.required' => 'El :attribute es obligatorio',
            'imagen.required' => 'El :attribute es obligatorio',
            'ext.required' => 'El :attribute es obligatorio',
            'documentopdf.required' => 'El :attribute es obligatorio',
            'youtube.required' => 'El :attribute es obligatorio',
            'contenido.required' => 'El :attribute es obligatorio',
            'autor.required' => 'El :attribute es obligatorio',
            'referencia.required' => 'El :attribute es obligatorio',
            'estado.required' => 'El :attribute es obligatorio',

            //numericos
            'user_id.min' => 'El :attribute deber ser numérico',
            'estado.min' => 'El :attribute deber ser numérico',
            //logitud minima
            'titulo.min' => 'El :attribute como minimo 8 caracter(es)',
            'imagen.min' => 'El :attribute como minimo 5 caracter(es)',
            'ext.min' => 'El :attribute como minimo 1 caracter(es)',
            'documentopdf.min' => 'El :attribute como minimo 5 caracter(es)',
            'youtube.min' => 'El :attribute como minimo 5 caracter(es)',
            'contenido.min' => 'El :attribute como minimo 8 caracter(es)',
            'autor.min' => 'El :attribute como minimo 3 caracter(es)',
            'referencia.min' => 'El :attribute como minimo 6 caracter(es)',

            //logitud maxima
            'titulo.max' => 'El :attribute como maximo 64 caracter(es)',
            'imagen.max' => 'El :attribute como maximo 128 caracter(es)',
            'ext.max' => 'El :attribute como maximo 6 caracter(es)',
            'documentopdf.max' => 'El :attribute como maximo 128 caracter(es)',
            'youtube.max' => 'El :attribute como maximo 128 caracter(es)',
            'contenido.max' => 'El :attribute como maximo 3024 caracter(es)',
            'autor.max' => 'El :attribute como maximo 64 caracter(es)',
            'referencia.max' => 'El :attribute como maximo 64 caracter(es)',
        ];
    }
    public function attributes()
    {
        return [
            'user_id' => 'Id usuario',
            'titulo' => 'Titulo',
            'imagen' => 'Imagen',
            'ext' => 'Tipo imagen',
            'documentopdf' => 'Documento pdf',
            'youtube' => 'Enlace youtube',
            'contenido' => 'Contenido',
            'autor' => 'Autor',
            'referencia' => 'Referencia',
            'estado' => 'Estado',
        ];
    }
}
