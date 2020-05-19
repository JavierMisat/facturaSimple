<?php

namespace SistemaGestionSimple\Http\Requests;

use SistemaGestionSimple\Http\Requests\Request;

class UsuarioUpdateRequest extends Request
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
            'email' => 'required|email',
            'telefono' => 'digits_between:7,11',
            'rol' => 'required',
            'departamento' => 'required',
            'municipio' => 'required',
            'password' => 'min:5'
        ];
    }
}
