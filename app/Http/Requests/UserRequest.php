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
        //dd($this->tipo);

        if ($this->tipo == 'create'){
            return [
                'name' => 'required|min:5|max:128',
                'email' => 'required|email|unique:users|min:8|max:128|',
                'password' => 'required|min:6|max:32|confirmed',
                'ocupacion' => 'required|min:5|max:128',
                'direccion' => 'required|min:5|max:256',
                'telefono' => 'required|min:8|max:32|unique:users',
            ];
        } else { //edit
            //dd($this->id);
            return [
                'name' => 'required|min:5|max:128',
                'email' => 'required|email|min:8|max:128|unique:users,email,'.$this->id,
                'password' => 'required|min:6|max:32|confirmed',
                'ocupacion' => 'required|min:5|max:128',
                'direccion' => 'required|min:5|max:256',
                'telefono' => 'required|min:8|max:32|unique:users,telefono,'.$this->id,
            ];
        }
        
    }

    public function messages(){
        return [
            'name.required' => 'El :attribute es obligatorio.',
            'name.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'name.max' => 'El :attribute debe tener como maximo 128 caracteres',


            'email.required' => 'El :attribute es obligatorio',
            'email.unique' => 'El :attribute ya se encuentra registrado',
            'email.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'email.max' => 'El :attribute debe tener como maximo 128 caracteres',

            'telefono.required' => 'El :attribute es obligatorio',
            'telefono.unique' => 'El :attribute ya se encuentra registrado',
            'telefono.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'telefono.max' => 'El :attribute debe tener como maximo 32 caracteres',

            'direccion.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'direccion.max' => 'El :attribute debe tener como maximo 256 caracteres',

            'password.required' => 'La :attribute es obligatoria',
            'password.confirmed' => 'La :attribute no coincide',
            'password.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'password.max' => 'El :attribute debe tener como maximo 16 caracteres',

            'ocupacion.required' => 'El :attribute es obligatorio',
            'ocupacion.min' => 'El :attribute debe tener como minimo 5 caracteres',
            'ocupacion.max' => 'El :attribute debe tener como maximo 128 caracteres',

            'direccion.required' => 'El :attribute es obligatorio',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'nombre',
            'email' => 'correo',
            'password' => 'contraseña',
            'password_confirmation' => 'confirmacion contraseña',
            'ocupacion' => 'ocupación',
            'direccion' => 'dirección',
            'telefono' => 'teléfono',
        ];
    }
}
