<?php

namespace SistemaGestionSimple\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use SistemaGestionSimple\Cliente;
use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;

class BuscadorClienteFactura extends Controller
{

    public function buscarClienteFactura(Request $request)
    {
        if (trim($busqueda = $request->input('clienteBuscar')) != "") {

            $busqueda = $request->input('clienteBuscar');
            $resultado = array();

            $datos = Cliente::select('id_cliente', 'nombre', 'apellido', 'documento', 'telefono')
                ->where(DB::raw('CONCAT(nombre, " ", apellido)'), 'LIKE', "%$busqueda%")->get();

            foreach ($datos as $key => $value) {
                $resultado[] = ['id' => $value->id_cliente, 'name' =>$value->nombre. ' ' .$value->apellido, 'telefono' => $value->telefono, 'documento' => $value->documento];
            }

            return response()->json($resultado);
        }

        return null;
    }
}
