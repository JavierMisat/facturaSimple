@extends ('plantillas.dashboard')

@section('page_title')	Detalle de Factura @stop
@section('page_subtitle')
    Información Completa de la factura
@stop
@section ('page_heading', 'Información de Factura')
@section('dashboard-content')

    @include('cliente.forms.detalles', ['factura' => $factura])

@stop



