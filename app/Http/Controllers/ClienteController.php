<?php

namespace SistemaGestionSimple\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use SistemaGestionSimple\Cliente;
use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use SistemaGestionSimple\Http\Requests\ClienteCreateRequest;
use SistemaGestionSimple\Http\Requests\ClienteUpdateRequest;
use SistemaGestionSimple\TipoCliente;
use Illuminate\Routing\Route;


class ClienteController extends Controller
{
    /**
     * UsuarioController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['update', 'show', 'resumenCliente']]);
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy', 'update', 'show']]);
    }

    /**
     * @param Route $route
     */
    public function find(Route $route)
    {
        $this->cliente = Cliente::find($route->getParameter('clientes'));
        $this->notFound($this->cliente);
    }


    public function resumenCliente(Request $request, $id)
    {
        $facturas = Cliente::find($id)->facturasCliente()->OrderBy('created_at', 'DESC')->paginate(5);

        if ($request->ajax()) {
            return response()->json(
                view('cliente.datos.ajax_facturas', ['facturas' => $facturas])->render()
            );
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = trim($request->input('busqueda') );

        $numClientes = Cliente::all()->count();
        $clientes = Cliente::orderBy('created_at', 'DESC')->paginate(5);

        if ($busqueda != null) {
            $clientes = Cliente::consultaMultipleClientes($request->input('busqueda'))->paginate(5);
            $numClientes = Cliente::consultaMultipleClientes($request->input('busqueda'))->count();
        }

        if ($request->ajax()) {
            return response()->json(
                view('cliente.ajax.listar',
                    ['clientes' => $clientes, 'numClientes' => $numClientes])->render()
            );
        }

        return view('cliente.index',  ['clientes' => $clientes, 'numClientes' => $numClientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = \DB::table('departamentos')->lists('descripcion', 'id_departamento');
        $municipios = \DB::table('municipios')->lists('descripcion', 'id_municipio');
        $tipo_cliente = \DB::table('tipo_clientes')->lists('descripcion', 'id_tipo');

        return view('cliente.crear', [
            'departamentos' => $departamentos,
            'municipios' => $municipios,
            'tipo_cliente' => $tipo_cliente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {

        Cliente::create($request->all());

        Session::flash('mensaje', 'Cliente registrado correctamente');
        return redirect('/clientes/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cliente.resumen', ['cliente' => $this->cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = \DB::table('departamentos')->lists('descripcion', 'id_departamento');
        $municipios = \DB::table('municipios')->lists('descripcion', 'id_municipio');
        $tipo_cliente = \DB::table('tipo_clientes')->lists('descripcion', 'id_tipo');

        return view('cliente.editar', [
            'cliente' => $this->cliente,
            'tipo_cliente' => $tipo_cliente,
            'departamentos' => $departamentos,
            'municipios' => $municipios
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteUpdateRequest $request, $id)
    {
        $this->cliente->fill($request->all());
        $this->cliente->save();
        Session::flash('mensaje', 'Cliente actualizado correctamente.');
        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($this->cliente->facturasCliente()->count() > 0) {
                return response()->json(
                    ['error' => 'No se puede eliminar un cliente con facturas asociadas.'], 422 //Mandar Cabecerra de error
                );
            }
            $this->cliente->delete();
            return response()->json(
                ['mensaje' => 'Se eliminó el cliente ' . $this->cliente->nombre]
            );
        }
    }
}
