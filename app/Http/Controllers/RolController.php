<?php

namespace SistemaGestionSimple\Http\Controllers;

use SistemaGestionSimple\Events\NotificacionEvent;
use SistemaGestionSimple\Http\Requests\RolCreateRequest;
use SistemaGestionSimple\Rol;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;

class RolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin', ['only' => 'index']);
        $this->middleware('super_admin', ['only' => 'create','edit']);
        $this->beforeFilter('@find', ['only' => ['edit', 'show', 'update']]);
    }

    public function find(Route $route)
    {
        $this->rol = Rol::find($route->getParameter('roles'));
        $this->notFound($this->rol);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Rol::OrderBy('id_rol', 'ASC')->get();
        return view('rol.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolCreateRequest $request)
    {
        event(new NotificacionEvent('Nuevo rol creado!'));
        Rol::create($request->all());
        Session::flash('mensaje', 'Rol creado correctamente.');
        return redirect('roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('rol.editar', ['rol' => $this->rol]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolCreateRequest $request, $id)
    {
        $this->rol->fill($request->all());
        $this->rol->save();
        Session::flash('mensaje', 'Rol actualizado correctamente.');
        return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
