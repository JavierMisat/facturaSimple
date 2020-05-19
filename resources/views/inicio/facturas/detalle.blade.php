@extends ('plantillas.front')

@section('page_title')	Detalle de Factura @stop

@section ('page_heading', 'Detalles de la factura')
@section('dashboard-content')

    @include('inicio.forms.detalles', ['factura' => $factura])

@stop



