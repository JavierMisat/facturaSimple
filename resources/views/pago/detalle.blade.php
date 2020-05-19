@extends ('plantillas.dashboard')

@section('page_title')	Detalle de pago @stop
@section('page_subtitle')
    Información Completa de pago
@stop
@section ('page_heading', 'Detalles del pago')
@section('dashboard-content')

    @include('pago.forms.detalles', ['pago' => $pago])

@stop



