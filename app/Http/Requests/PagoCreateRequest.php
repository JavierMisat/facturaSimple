<?php

namespace SistemaGestionSimple\Http\Requests;

use SistemaGestionSimple\Http\Requests\Request;

class PagoCreateRequest extends Request
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
            'cod_factura' => 'digits_between:3,5|required',
            'id_usuario' => 'exists:usuarios',
            'municipio' => 'exists:municipios,id_municipio',
        ];
    }
}
