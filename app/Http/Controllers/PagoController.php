<?php

namespace SistemaGestionSimple\Http\Controllers;

use Illuminate\Support\Facades\URL;
use SistemaGestionSimple\Pago;
use SistemaGestionSimple\Http\Requests\PagoCreateRequest;
use SistemaGestionSimple\Http\Requests\PagoUpdateRequest;
use SistemaGestionSimple\Municipio;
use SistemaGestionSimple\Usuario;
use Illuminate\Http\Request;

use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PagoController extends Controller
{

    public function __construct()
    {
        setlocale(LC_TIME, config('app.locale'));
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['create', 'store'] ]);
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy', 'update', 'show']]);
    }

    /**
     * @param Route $route
     */
    public function find(Route $route)
    {
        $this->pago = Pago::find($route->getParameter('pagos'));
        $this->notFound($this->pago);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagos = Pago::orderBy('created_at', 'DESC')->paginate(5);
        if ($request->ajax()) {
            return response()->json(
                view('pago.listar',
                    compact('pagos'))->render()
            );
        }
        return view('pago.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::where('id_departamento', Auth::user()->departamento)->get();
        return view('pago.crear', compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagoCreateRequest $request)
    {
        Pago::create($request->all());
        Session::flash('mensaje', 'Pago ' . $request->get('cod_factura') . ' Agregada exitosamente.');
        return redirect('/pagos/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pago.detalle', ['pago' => $this->pago]);
    }

    public function pagosUsuario(Request $request)
    {
        $usuarios = Usuario::has('pagosUsuario')->orderBy('nombre', 'ASC')->paginate(5);
        if ($request->ajax()) {
            return response()->json(
                view('pago.datos.ajax_usuario',
                    compact('usuarios'))->render()
            );
        }
        return view('pago.usuario', compact('usuarios'));
    }

    public function pagosMunicipio(Request $request)
    {
        $municipios = Municipio::has('pagosMunicipio')->paginate(5);
        if ($request->ajax()) {
            return response()->json(
                view('pago.datos.ajax_municipio',
                    compact('municipios'))->render()
            );
        }
        return view('pago.municipio', compact('municipios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pago.editar', ['pago' => $this->pago]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagoUpdateRequest $request, $id)
    {
        $this->pago->fill($request->all());
        $this->pago->save();
        Session::flash('mensaje', 'Pago actualizada correctamente.');
        return redirect('/pagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->pago->delete();
        return response()->json(
            ['mensaje' => 'Se eliminó el usuario ']
        );
    }
}
