@extends ('plantillas.dashboard')

@section('page_title')  Registrar Pago @stop

@section('page_subtitle')
    Ingreso de nueva pago
@stop

@section ('page_heading','Registrar un nuevo pago')

@section('dashboard-content')
    @include('alertas.request')
    {!! Form::open(['route' => 'pagos.store', 'method' => 'POST']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Ingresa los datos de la factura')
            @section ('test_panel_body')

                {!! Form::hidden('id_usuario', Auth::user()->id_usuario) !!}
                {!! Form::hidden('municipio', Auth::user()->municipio) !!}
                @include('pago.forms.pago')

                {!! Form::submit('Registrar Pago', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('js_personalizado')
    {!! Html::script('js/selector-ciudad.js') !!}
@endsection