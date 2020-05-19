<?php

namespace SistemaGestionSimple\Http\Controllers;

use SistemaGestionSimple\Http\Requests\UsuarioCreateRequest;
use SistemaGestionSimple\Http\Requests\UsuarioDeleteRequest;
use SistemaGestionSimple\Http\Requests\UsuarioUpdateRequest;
use SistemaGestionSimple\Rol;
use SistemaGestionSimple\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;

class UsuarioController extends Controller
{
    /**
     * UsuarioController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['except' => ['update', 'show', 'resumenUsuario'] ]);
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy', 'update', 'show']]);
    }

    /**
     * @param Route $route
     */
    public function find(Route $route)
    {
        $this->usuario = Usuario::find($route->getParameter('usuarios'));
        $this->notFound($this->usuario);
    }


    public function resumenUsuario(Request $request, $id)
    {
        $pagos = Usuario::find($id)->pagosUsuario()->OrderBy('created_at', 'DESC')->paginate(5);
        if($request->ajax()){
            return response()->json(
                view('usuario.datos.ajax_pagos', ['pagos'=> $pagos])->render()
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
        $usuarios = Usuario::orderBy('created_at', 'DESC')->paginate(5);
        if ($request->ajax()) {
            return response()->json(
                view('usuario.listarAjax',
                    compact('usuarios'))->render()
            );
        }
        return view('usuario.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = null;

        if(Auth::user()->rol == Usuario::SUPER_ADMIN){
            $roles = \DB::table('roles')->lists('descripcion', 'id_rol');
        }elseif(Auth::user()->rol == Usuario::ADMIN){
            $roles = \DB::table('roles')->where('id_rol', '!=', Usuario::SUPER_ADMIN)->lists('descripcion', 'id_rol');
        }else{
            $roles = \DB::table('roles')->where('id_rol', Usuario::RECAUDADOR, '3')->lists('descripcion', 'id_rol');
        }

        $departamentos = \DB::table('departamentos')->lists('descripcion', 'id_departamento');
        $municipios = \DB::table('municipios')->lists('descripcion', 'id_municipio');
        return view('usuario.crear', [
            'roles' => $roles,
            'departamentos' => $departamentos,
            'municipios' => $municipios
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        Usuario::create($request->all());
        $usuario = $request;

        Mail::send('emails.nuevo_usuario', $request->all(), function ($msj) use ($usuario) {
            $msj->from('soporte@simplecomunicaciones.com', 'Facturas Simple Comunicaciones');
            $msj->replyTo('soporte@simplecomunicaciones.com', 'Soporte Simple Comunicaciones');
            $msj->subject('Datos de acceso a Facturas Simple Comunicaciones');
            $msj->to($usuario->input('email'), $usuario->input('nombre'));
        });

        Session::flash('mensaje', 'Usuario registrado correctamente');
        return redirect('/usuarios/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('usuario.resumen', ['usuario' => $this->usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($this->usuario->rol == Usuario::SUPER_ADMIN){
            Session::flash('mensaje', 'No se puede editar este usuario.');
            return redirect('/usuarios');
        }

        if(Auth::user()->rol == Usuario::SUPER_ADMIN){
            $roles = \DB::table('roles')->lists('descripcion', 'id_rol');
        }elseif(Auth::user()->rol == Usuario::ADMIN){
            $roles = \DB::table('roles')->where('id_rol', '!=', Usuario::SUPER_ADMIN)->lists('descripcion', 'id_rol');
        }else{
            $roles = \DB::table('roles')->where('id_rol', Usuario::RECAUDADOR, '3')->lists('descripcion', 'id_rol');
        }
        $departamentos = \DB::table('departamentos')->lists('descripcion', 'id_departamento');
        $municipios = \DB::table('municipios')->lists('descripcion', 'id_municipio');

        return view('usuario.editar', [
            'usuario' => $this->usuario,
            'roles' => $roles,
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
    public function update(UsuarioUpdateRequest $request, $id)
    {
        $this->usuario->fill($request->all());
        $this->usuario->save();
        Session::flash('mensaje', 'Usuario actualizado correctamente.');
        return redirect('/usuarios');
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
            if ($this->usuario->pagosUsuario()->count() > 0 || $this->usuario->rol == Usuario::SUPER_ADMIN) {
                return response()->json(
                    ['error' => 'No se puede eliminar un usuario con facturas asociadas.'], 422 //Mandar Cabecerra de error
                );
            }
            $this->usuario->delete();
            return response()->json(
                ['mensaje' => 'Se eliminó el usuario ' . $this->usuario->nombre]
            );
        }

    }
}
