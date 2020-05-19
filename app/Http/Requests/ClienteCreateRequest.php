<?php

namespace SistemaGestionSimple\Http\Requests;

use SistemaGestionSimple\Http\Requests\Request;

class ClienteCreateRequest extends Request
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
            'documento' => 'required|unique:clientes,documento',
            'telefono' => 'digits_between:7,11',
            'tipo_cliente' => 'required',
            'departamento' => 'required',
            'municipio' => 'required',
            'direccion' => 'required'
        ];
    }
}
