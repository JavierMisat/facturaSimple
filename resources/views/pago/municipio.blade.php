@extends ('plantillas.dashboard')

@section('page_title') Pagos Recaudados X Municipio @stop

@section('page_subtitle')
    Municipios donde está presente Simple Comunicaciones.
@stop

@section ('page_heading','Recaudos X Municipio')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-12">

            @section ('htable_panel_title',$municipios->count().' Municipios Encontrados')
            @section ('htable_panel_body')
                @include('pago.datos.municipios', array('class'=>'table-hover', 'municipios' => $municipios))
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>
    </div>
@stop

@section('js_personalizado')
    {!! Html::script('js/crud/pagos_municipio.js') !!}
@endsection