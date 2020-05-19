@extends ('plantillas.dashboard')

@section('page_title')	Detalle de usuario {{$usuario->nombre_completo}} @stop
@section('page_subtitle')
    Resumen de rendimiento de usuario
@stop
@section ('page_heading', 'Resumen del recaudador')
@section('dashboard-content')

    @include('usuario.datos.usuarios', ['usuario' => $usuario])

@stop
