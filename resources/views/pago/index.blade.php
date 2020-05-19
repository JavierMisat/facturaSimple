@extends ('plantillas.dashboard')

@section('page_title') Gestionar Pagos @stop

@section('page_subtitle')
    Filtra y controla el registro de pagos.
@stop

@section ('page_heading','Lista Total de Pagos')

@section('dashboard-content')

    @if($pagos->count() > 0)

        @include('pago.modal')
        @include('alertas.exito')
        <div class="row">
            <div class="col-md-12">
                @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'pago'))
                @section ('htable_panel_title','Pagos Registrados')
                @section ('htable_panel_body')
                    @include('pago.datos.pagos', array('class'=>'table-hover', 'pagos' => $pagos))
                @endsection
                @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
            </div>
        </div>

@section('js_personalizado')
    {!! Html::script('js/crud/pagos.js') !!}
@endsection

@else
    @section ('panel1_panel_title', 'Aún no hay Pagos')
@section ('panel1_panel_body')

    <h2 class="text-center padder">Opps! todavía no se ha registrado el primera pago, pero tú, {{Auth::user()->nombre}},  puedes ser el primero. </h2>

    <div class="panel-btn">
        <a href="/pagos/create" class="btn btn btn-warning btn-bordered    center-block" style="max-width: 500px;font-size: 1.3em;">Haz clic aquí para registrar tu primer pago</a>
    </div>
@endsection
@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'header'=>true, 'as'=>'panel1'))

@endif

@stop

