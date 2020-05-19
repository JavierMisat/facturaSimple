@extends ('plantillas.dashboard')

@section('page_title')    Editando usuario | {{$usuario->nombre}} @stop

@section('page_subtitle')
    Actualizando los datos del usuario : <strong>{{$usuario->nombre}}</strong>
@stop

@section ('page_heading','Editando Usuario')

@section('dashboard-content')
    @include('alertas.request')
    {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id_usuario], 'method' => 'PUT', 'files' => true ]) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">
            @section ('test_panel_title', 'Modificar datos de usuario')
            @section ('test_panel_body')

                @include('usuario.forms.usuario')

                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}

@stop

@section('js_personalizado')
    {!! Html::script('js/selector-ciudad.js') !!}
@endsection