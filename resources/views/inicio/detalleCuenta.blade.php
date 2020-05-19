@extends ('plantillas.front')

@section('page_title')	Estado de cuenta de {{$cliente->nombre_completo}} @stop

@section('dashboard-content')

    @include('inicio.datos.cliente', ['cliente' => $cliente])
@stop
