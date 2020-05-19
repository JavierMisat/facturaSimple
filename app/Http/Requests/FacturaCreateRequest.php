<?php

namespace SistemaGestionSimple\Http\Requests;

use SistemaGestionSimple\Http\Requests\Request;

class FacturaCreateRequest extends Request
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
            'cod_factura' => 'digits_between:3,5',
            'id_usuario' => 'exists:usuarios',
            'cliente' => 'required',
            'estado' => 'boolean|required',
            'valor_pago' => 'required',
            'municipio' => 'exists:municipios,id_municipio',
        ];
    }
}
