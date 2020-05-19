@extends ('plantillas.dashboard')

@section('page_title')  Editar Pago @stop

@section('page_subtitle')
    Editar pago.
@stop

@section ('page_heading','Editar Pago')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::model($pago, ['route' => ['pagos.update', $pago->id_pago], 'method' => 'PUT']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Datos del Pago')
            @section ('test_panel_body')

                {!! Form::hidden('id_usuario') !!}
                {!! Form::hidden('municipio') !!}

                @include('pago.forms.pago')

                {!! Form::submit('Actualizar Pago', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('js_personalizado')
    {!! Html::script('js/selector-ciudad.js') !!}
@endsection