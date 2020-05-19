@extends ('plantillas.dashboard')

@section('page_title')  Registrar Rol @stop

@section('page_subtitle')
   Registrar nuevo rol
@stop

@section ('page_heading','pago')

@section('dashboard-content')
    @include('alertas.request')
    {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Ingresa los datos')
            @section ('test_panel_body')

                @include('rol.forms.rol')

                {!! Form::submit('Crear Rol', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop
