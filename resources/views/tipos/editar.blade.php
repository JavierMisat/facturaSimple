@extends ('plantillas.dashboard')

@section('page_title')  Actualizando Tipo de Cliente @stop

@section('page_subtitle')
    Editar Tipo de Cliente
@stop

@section ('page_heading','Actualización del Tipo de Cliente')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::model($tipoCliente, ['route' => ['tipos.update', $tipoCliente->id_tipo], 'method' => 'PUT']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Actualizar Datos')
            @section ('test_panel_body')

                @include('tipos.forms.tipos')

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop
