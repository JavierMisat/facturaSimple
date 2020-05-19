@extends ('plantillas.dashboard')

@section('page_title') Gestionar Facturas @stop

@section('page_subtitle')
    Crea, elimina y agrega facturas de manera fácil.
@stop

@section ('page_heading','Gestionar Facturas')

@section('dashboard-content')
    @include('factura.modal')
    @include('alertas.exito')
    <div class="row">
        <div class="col-md-12">
            @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'Se ha eliminado correctamente el cliente'))
            @include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'Error, no se puede borrar clientes con facturas asociadas.'))
            @section ('htable_panel_title',"Facturas Registradas ")
            @section ('htable_panel_body')
                @include('factura.forms.buscador')

                @if($facturas->count() > 0)

                    <div class="pull-right" id="registrosEncontrados">
                        <span class="label label-default pull-right" style="font-size: 17px;">{{ $numFacturas or 0 }}
                            FACTURAS ENCONTRADAS</span>
                    </div>
                    @include('factura.datos.listaFacturas', array('class'=>'table-hover', 'facturas' => $facturas))
                @else
                    <h2 class="text-center padder"><i class="fa fa- fa-users fa-1x"></i> Aún no hay facturas
                        registrados.</h2>
                @endif

            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>
    </div>

@stop

@section('js_personalizado')
    {!! Html::script('js/crud/facturas.js') !!}
@endsection