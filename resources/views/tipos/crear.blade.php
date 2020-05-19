@extends ('plantillas.dashboard')

@section('page_title')  Registrar "Tipo de Cliente" @stop

@section('page_subtitle')
   Registrar nuevo "Tipo de Cliente"
@stop

@section ('page_heading','Registrar Tipo de Cliente')

@section('dashboard-content')
    @include('alertas.request')
    {!! Form::open(['route' => 'tipos.store', 'method' => 'POST']) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">

            @include('alertas.exito')

            @section ('test_panel_title', 'Ingresa los datos')
            @section ('test_panel_body')

                @include('tipos.forms.tipos')

                {!! Form::submit('Registrar', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

        </div>
    </div>
    {!! Form::close() !!}
@stop
