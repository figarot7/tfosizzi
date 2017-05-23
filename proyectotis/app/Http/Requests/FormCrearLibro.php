<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Route;

class FormCrearLibro extends Request
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
        if($this->route()->uri() === 'libro/almacenar')
            $pdf = 'required|mimes:pdf';
        else $pdf = 'mimes:pdf';
        return [
            'titulo' => 'required',
            'autor' => 'required|alpha',
            'precio' => 'required|numeric|min:1',
            //'archivo' => $pdf,
            'archivo' => $pdf,
        ];
    }

     public function messages(){
        return [
            'titulo.required' => 'El campo titulo es obligatorio',
            'autor.required' => 'El campo autor es obligatorio',
            'autor.alpha' => 'El campo autor solo puede contener letras',
            'precio.required' => 'El campo precio es obligatorio',
            'precio.numeric' => 'El campo precio debe ser un numero',
            'precio.min' => 'El valor del campo precio debe ser mayor a 1',
            'archivo.required' => 'El campo archivo es obligatorio',
            'archivo' => 'El archivo debe tener extension: pdf',
        ];
    }
}
