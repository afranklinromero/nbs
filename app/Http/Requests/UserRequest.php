<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required|min:5|max:128',
            'email' => 'required|email|unique:users|min:8|max:128|',
            'password' => 'required|min:6|max:512',
            'ocupacion' => 'required|min:5|max:128',
            'direccion' => 'required|min:5|max:256',
            'telefono' => 'required|min:8|max:32',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'email.required' => 'El :attribute es obligatorio',
            'email.unique' => 'El :attribute ya se encuentra registrado',
            'password.required' => 'El :attribute obligatorio',
            'ocupacion.required' => 'El :attribute es obligatorio',
            'direccion.required' => 'El :attribute es obligatorio',
            'telefono.required' => 'El :attribute es obligatorio',



            'name.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'email.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'password.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'ocupacion.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'direccion.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'telefono.min' => 'El :attribute debe tener como minimo 5 caracteres',

            'name.max' => 'El :attribute debe tener como maximo 128 caracteres',
            'email.max' => 'El :attribute debe tener como maximo 128 caracteres',
            'password.max' => 'El :attribute debe tener como maximo 16 caracteres',
            'ocupacion.max' => 'El :attribute debe tener como maximo 128 caracteres',
            'direccion.max' => 'El :attribute debe tener como maximo 256 caracteres',
            'telefono.max' => 'El :attribute debe tener como maximo 32 caracteres',


        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre',
            'email' => 'correo',
            'password' => 'contraseña',
            'ocupacion' => 'ocupación',
            'direccion' => 'dirección',
            'telefono' => 'teléfono',
        ];
    }
}
