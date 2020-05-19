<?php

namespace SistemaGestionSimple\Http\Requests;

use SistemaGestionSimple\Http\Requests\Request;

class UsuarioCreateRequest extends Request
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
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'email|unique:usuarios|required',
            'telefono' => 'digits_between:7,11',
            'foto' => 'image',
            'rol' => 'required',
            'departamento' => 'required',
            'municipio' => 'required',
            'password' => 'required|between:5,40'
        ];
    }
}
