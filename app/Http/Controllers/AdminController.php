<?php

namespace SistemaGestionSimple\Http\Controllers;

use SistemaGestionSimple\Events\NotificacionEvent;
use SistemaGestionSimple\Pago;
use SistemaGestionSimple\Rol;
use Illuminate\Http\Request;
use SistemaGestionSimple\Usuario;
use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $pagos = Pago::all();
        return view('index', ['usuarios' => $usuarios, 'pagos' => $pagos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perfil()
    {
        if(Auth::user()->rol == Usuario::SUPER_ADMIN){
            $roles = \DB::table('roles')->lists('descripcion', 'id_rol');
        }elseif(Auth::user()->rol == Usuario::ADMIN){
            $roles = \DB::table('roles')->where('id_rol', '!=', Usuario::SUPER_ADMIN)->lists('descripcion', 'id_rol');
        }else{
            $roles = \DB::table('roles')->where('id_rol', Usuario::RECAUDADOR, '3')->lists('descripcion', 'id_rol');
        }

        $departamentos = \DB::table('departamentos')->lists('descripcion', 'id_departamento');
        $municipios = \DB::table('municipios')->lists('descripcion', 'id_municipio');
        return view('usuario.perfil',
            ['roles' => $roles, 'departamentos' => $departamentos, 'municipios' => $municipios]);
    }


    public function calendario()
    {
        return view('calendario.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
