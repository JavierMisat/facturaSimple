<?php

namespace SistemaGestionSimple\Http\Controllers;

use SistemaGestionSimple\Municipio;
use Illuminate\Http\Request;

use SistemaGestionSimple\Http\Requests;
use SistemaGestionSimple\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class MunicipioController extends Controller
{


    public function __construct()
    {
        setlocale(LC_TIME, config('app.locale'));
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find', ['only' => ['edit', 'destroy', 'update', 'show']]);
    }

    /**
     * @param Route $route
     */
    public function find(Route $route)
    {
        $this->municipio = Municipio::find($route->getParameter('municipios'));
        $this->notFound($this->municipio);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(
                view('municipio.datos.ajax_pagos',
                    ['municipio' => $this->municipio])->render()
            );
        }
        return view('municipio.detalle', ['municipio' => $this->municipio]);
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
