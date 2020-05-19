@extends ('plantillas.dashboard')

@section('page_title') Recaudos X Usuario @stop

@section('page_subtitle')
    Visualiza el rendimiento de cada recaudador.
@stop

@section ('page_heading','Usuarios con pagos registrados')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-12">

            @section ('htable_panel_title','Recaudos X Usuario')
            @section ('htable_panel_body')
                @include('pago.datos.usuarios', array('class'=>'table-hover', 'usuario' => $usuarios))
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>
    </div>
@stop

@section('js_personalizado')
    {!! Html::script('/js/crud/pagos_usuarios.js')!!}
@endsection