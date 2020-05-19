@extends ('plantillas.dashboard')

@section('page_title')	Detalle de Cliente {{$cliente->nombre_completo}} @stop
@section('page_subtitle')
    Resumen de facturas de cliente
@stop
@section ('page_heading', 'Resumen del cliente')
@section('dashboard-content')

    @include('cliente.datos.clientes', ['cliente' => $cliente])

@stop
