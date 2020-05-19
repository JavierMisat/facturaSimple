@extends ('plantillas.dashboard')

@section('page_title')   Crear Cliente @stop

@section('page_subtitle')
    Registrar nuevo cliente
@stop

@section ('page_heading','Registro de cliente')

@section('dashboard-content')
    @include('alertas.request')

    {!! Form::open(['route' => 'clientes.store', 'method' => 'POST', 'files' => true ]) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Diligencia los datos del cliente')
            @section ('test_panel_body')

                {!! Form::hidden('id_usuario', Auth::user()->id_usuario) !!}
                @include('cliente.forms.cliente')

                {!! Form::submit('Crear Cliente', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}

@stop

@section('js_personalizado')
    {!! Html::script('js/selector-ciudad.js') !!}
@endsection