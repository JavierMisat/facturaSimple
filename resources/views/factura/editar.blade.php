@extends ('plantillas.dashboard')

@section('page_title')Editar Factura @stop

@section('page_subtitle')
    Editar datos de la factura.
@stop

@section ('page_heading','Editar Factura')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::model($factura, ['route' => ['facturas.update', $factura->id_factura], 'method' => 'PUT']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">
            @include('alertas.exito')

            @section ('test_panel_title', 'Datos de Factura')
            @section ('test_panel_body')


                @include('factura.forms.factura', array('cliente' => \SistemaGestionSimple\Cliente::find($factura->cliente)))
                <button class="btn btn-gray btn-lg col-md-3 col-sm-offset-2" onclick="location.href='{{ url('facturas')  }}'" type="button">Cancelar</button>
                {!! Form::submit('Actualizar Factura', ['class' => 'btn btn-primary btn-lg col-md-3 col-sm-offset-1']) !!}

            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('js_personalizado')
    {!! Html::script('js/accounting.min.js') !!}
    {!! Html::script('js/selector-ciudad.js') !!}
    {!! Html::script('js/formato-numeros.js') !!}
@endsection