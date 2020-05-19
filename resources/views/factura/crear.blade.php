@extends ('plantillas.dashboard')

@section('page_title')   Crear Factura @stop

@section('page_subtitle')
    Registrar nueva factura
@stop

@section ('page_heading','Registro de factura')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::open(['route' => 'facturas.store', 'method' => 'POST', 'files' => true ]) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Diligencia los datos de la factura')
            @section ('test_panel_body')

                {!! Form::hidden('usuario', Auth::user()->id_usuario) !!}
                    @include('factura.forms.factura')
                <button class="btn btn-gray btn-lg col-md-3 col-sm-offset-2" onclick="history.go(-2);" type="button"><i class="fa fa fa-angle-double-left fa-1x"></i> Regresar</button>

                {!! Form::submit('Registrar Factura', ['class' => 'btn btn-primary btn-lg col-md-3 col-sm-offset-1']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}

@stop

@section('js_personalizado')
    {!! Html::script("js/bootstrap3-typeahead.min.js") !!}
    {!! Html::script('js/buscador-clientes.js') !!}
    {!! Html::script('js/selector-ciudad.js') !!}
    {!! Html::script('js/formato-numeros.js') !!}

@endsection