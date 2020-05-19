<?php

namespace SistemaGestionSimple\Http\Controllers;

use Illuminate\Http\Request;

use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use SistemaGestionSimple\Http\Requests\TipoClienteCreateRequest;
use SistemaGestionSimple\Http\Requests\TipoClienteUpdateRequest;
use SistemaGestionSimple\TipoCliente;

class TipoClienteController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'index']);
        $this->middleware('super_admin', ['only' => 'create','edit']);
        $this->beforeFilter('@find', ['only' => ['edit', 'show', 'update', 'destroy']]);
    }

    public function find(Route $route)
    {
        $this->tipoCliente = TipoCliente::find($route->getParameter('tipos'));
        $this->notFound($this->tipoCliente);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipos = TipoCliente::OrderBy('created_at', 'DESC')->paginate(5);
        if ($request->ajax()) {
            return response()->json(
                view('tipos.listarAjax',
                    compact('tipos'))->render()
            );
        }
        return view('tipos.index',compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoClienteCreateRequest $request)
    {
        TipoCliente::create($request->all());
        Session::flash('mensaje', '"Tipo de Cliente" creado correctamente.');
        return redirect('clientes/tipos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tipos.editar', ['tipoCliente' => $this->tipoCliente]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoClienteUpdateRequest $request, $id)
    {
        $this->tipoCliente->fill($request->all());
        $this->tipoCliente->save();
        Session::flash('mensaje', '"Tipo de Cliente" actualizado correctamente.');
        return redirect('clientes/tipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($this->tipoCliente->clientesTipoCliente()->count() > 0) {
                return response()->json(
                    ['error' => 'No se puede eliminar un Tipo de Cliente, con clientes asociados.'], 422 //Mandar Cabecerra de error
                );
            }

            $this->tipoCliente->delete();
            return response()->json(
                ['mensaje' => 'Se eliminó el "Tipo de Cliente"' . $this->tipoCliente->descripcion]
            );
        }
    }
}
