@extends ('plantillas.dashboard')

@section('page_title')    Editando Cliente | {{$cliente->nombre}} @stop

@section('page_subtitle')
    Actualizando los datos del cliente : <strong>{{$cliente->nombre}}</strong>
@stop

@section ('page_heading','Editando Cliente')

@section('dashboard-content')
    @include('alertas.request')
    {!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id_cliente], 'method' => 'PUT', 'files' => true ]) !!}
    <div class="row col-sm-offset-3">
        <div class="col-md-8">
            @section ('test_panel_title', 'Modificar datos de cliente')
            @section ('test_panel_body')

                @include('cliente.forms.cliente')

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