<?php

namespace SistemaGestionSimple\Http\Requests;

use SistemaGestionSimple\Http\Requests\Request;

class RolCreateRequest extends Request
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
            'descripcion' => 'required'
        ];
    }
}
