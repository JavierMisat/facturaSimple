<?php

namespace SistemaGestionSimple\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SistemaGestionSimple\Cliente;
use SistemaGestionSimple\Factura;
use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;

class FrontController extends Controller
{

    public function index()
    {
        return view('inicio.index');
    }


    public function buscarCliente(Request $request)
    {
        $clientes = Cliente::consultarCliente($request->documento);

        if ($request->ajax()) {
            return response()->json(
                view('inicio.resultadoCliente', ['clientes' => $clientes])->render()
            );
        }
    }

    public function detalleCuenta(Request $request, $id)
    {
        $facturas = Cliente::find($id)->facturasCliente()->OrderBy('created_at', 'DESC')->paginate(5);
        if ($request->ajax()) {
            return response()->json(
                view('inicio.datos.ajax_facturas', ['facturas' => $facturas])->render()
            );
        }

        if ($request->header('referer') != null) {
            $cliente = Cliente::find($id);
            return view('inicio.detalleCuenta', compact('cliente'));
        }

        return redirect('/');
    }

    public function showFacturaCliente($id)
    {
        $factura = Factura::find($id);

        return view('inicio.facturas.detalle', ['factura' => $factura]);
    }

    public function oficinas()
    {
        return view('inicio.oficinas');
    }

    public function cobertura()
    {
        return view('inicio.cobertura');
    }

}
