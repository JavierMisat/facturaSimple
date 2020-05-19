<?php

namespace SistemaGestionSimple\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use SistemaGestionSimple\Cliente;
use SistemaGestionSimple\Factura;
use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use SistemaGestionSimple\Http\Requests\FacturaCreateRequest;
use SistemaGestionSimple\Http\Requests\FacturaUpdateRequest;

class FacturaController extends Controller
{

    public function __construct()
    {
        setlocale(LC_TIME, config('app.locale'));
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['create', 'store']]);
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy', 'update', 'show']]);
    }

    /**
     * @param Route $route
     */
    public function find(Route $route)
    {
        $this->factura = Factura::find($route->getParameter('facturas'));
        $this->notFound($this->factura);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $busqueda = trim($request->input('busqueda') );

        $numFacturas = Factura::all()->count();
        $facturas = Factura::orderBy('created_at', 'DESC')->paginate(5);

        if ($busqueda != null) {
            $facturas = Factura::consultaMultipleFacturas($request->input('busqueda'))->paginate(5);
            $numFacturas = Factura::consultaMultipleFacturas($request->input('busqueda'))->count();
        }

        if ($request->ajax()) {
            return response()->json(
                view('factura.listar',
                    ['facturas' => $facturas, 'numFacturas' => $numFacturas])->render()
            );
        }
        return view('factura.index', ['facturas' => $facturas, 'numFacturas' => $numFacturas]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id = null)
    {
        $cliente = Cliente::find($id) ? Cliente::find($id) : null;

        return view('factura.crear', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacturaCreateRequest $request)
    {
        Factura::create($request->all());
        Session::flash('mensaje', 'Factura registrada exitosamente.');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('factura.detalle', ['factura' => $this->factura]);
    }


    public function showFacturaCliente($id)
    {
        $factura = Factura::find($id) ?? abort(404);

        return view('cliente.facturas.detalle', ['factura' => $factura]);
    }


    public function editFacturaCliente($id)
    {
        $factura = Factura::find($id) ?? abort(404);
        return view('factura.editar', ['factura' => $factura]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        return view('factura.editar', ['factura' => $this->factura]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacturaUpdateRequest $request, $id)
    {
        $this->factura->fill($request->all());
        $this->factura->save();
        Session::flash('mensaje', 'Factura actualizada correctamente.');
        return redirect('facturas');
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
            $this->factura->delete();
            return response()->json(
                ['mensaje' => 'Se eliminó la factura del cliente ']
            );

        }

    }
}
