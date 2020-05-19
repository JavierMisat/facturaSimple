@extends ('plantillas.dashboard')

@section('page_title')    Crear Usuario @stop

@section('page_subtitle')
    Registrar nuevo usuario
@stop

@section ('page_heading','Registro de usuario')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::open(['route' => 'usuarios.store', 'method' => 'POST', 'files' => true ]) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Diligencia los datos del usuario')
            @section ('test_panel_body')

                @include('usuario.forms.usuario')

                {!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}

@stop

@section('js_personalizado')
    {!! Html::script('js/selector-ciudad.js') !!}
@endsection