<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Route;

class FormCrearUsuario extends Request
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
        if($this->route()->uri() === 'usuario/almacenar')
            $pass = 'required|min:6';
        else $pass = 'min:6';            
        return [
            'nombre' => 'required|alpha',
            'ape_pat' => 'required|alpha',
            'ape_mat' => 'required|alpha',
            'username' => 'required|alpha_num',
            'password' => $pass,
            'rpassword' => $pass,
            'tipo' => 'required',            
        ];
    }
    public function messages(){
        return[
            'nombre.required' => 'El campo nombres es obligatorio',
            'nombre.alpha' => 'El campo nombres solo puede contener letras',
            'ape_pat.required' => 'El campo apellido paterno es obligatorio',
            'ape_pat.alpha' => 'El campo apellido paterno solo puede contener letras',
            'ape_mat.required' => 'El campo apellido es obligatorio',
            'ape_mat.alpha' => 'El campo apellido paterno solo puede contener letras',
            'password.required' => 'El campo contraseña es obligatorio',
            'rpassword.required' => 'El campo repita su contraseña es obligatorio',
            'tipo.required' => 'El campo tipo de usuario es obligatorio',
            'username.required' => 'El campo nombre de usuario es obligatorio',
            'password.min' => 'El campo contraseña tiene que tener minimamente 6 caracteres',
            'rpassword.min' => 'El campo repita su contraseña tiene que tener minimamente 6 caracteres',
        ];
    }
}
