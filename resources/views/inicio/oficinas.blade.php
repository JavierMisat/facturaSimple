@extends ('plantillas.front')

@section('page_title') Nuestras Oficinas @stop

@section('dashboard-content')

    <div class="row">
        <div class="col-md-12">
            @section ('htable_panel_title','Centros de Atención Simple Comunicaciones')
            @section ('htable_panel_body')

                @include('inicio.datos.datosOficinas')

            @endsection
            @include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>

    </div>

@stop

@section('js_personalizado')

    {!! Html::script('js/oficinas.js') !!}
@endsection