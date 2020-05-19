@extends ('plantillas.dashboard')

@section('page_title')  Editar Rol @stop

@section('page_subtitle')
    Editar rol.
@stop

@section ('page_heading','Actualización de Rol')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::model($rol, ['route' => ['roles.update', $rol->id_rol], 'method' => 'PUT']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Actualizar datos de Rol')
            @section ('test_panel_body')

                @include('rol.forms.rol')

                {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop
