@extends ('plantillas.front')

@section('page_title') Consultar Estado de Cuenta @stop

@section('dashboard-content')

    @include('cliente.modal')
    @include('alertas.exito')

    <div class="row">
        <div class="col-md-12">
            @section ('htable_panel_title','Consulta tu estado de cuenta ingresando tu documento')
            @section ('htable_panel_body')
                @include('inicio.forms.buscador')
                <hr />
                <div id="clientes" class="hidden">Resultados de busqueda</div>
                @include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'Error, no se pudo realizar la consulta, intentalo de nuevo más tarde.'))
            @endsection
            @include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>

    </div>

@stop

@section('js_personalizado')
    {!! Html::script('js/crud/motor_busqueda.js') !!}
@endsection