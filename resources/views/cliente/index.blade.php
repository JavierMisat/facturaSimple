@extends ('plantillas.dashboard')

@section('page_title') Gestionar Clientes @stop

@section('page_subtitle')
    Crea, elimina y agrega clientes de manera fácil.
@stop

@section ('page_heading','Gestionar Clientes')

@section('dashboard-content')
    @include('cliente.modal')
    @include('alertas.exito')
    <div class="row">
        <div class="col-md-12">
            @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'Se ha eliminado correctamente el cliente'))
            @include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'Error, no se puede borrar clientes con facturas asociadas.'))
            @section ('htable_panel_body')
                @include('cliente.forms.buscador')

                @if($clientes->count() > 0)

                    <div class="pull-right" id="registrosEncontrados">
                        <span class="label label-default pull-right" style="font-size: 17px;">{{ $numClientes }}
                            CLIENTES ENCONTRADOS</span>
                    </div>
                    @include('cliente.listaClientes', array('class'=>'table-hover', 'cliente' => $clientes))

                @else

                    <h2 class="text-center padder"><i class="fa fa- fa-users fa-1x"></i> Aún no hay clientes
                        registrados.</h2>

                @endif


            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>
    </div>

@stop

@section('js_personalizado')
    {!! Html::script('js/crud/clientes.js') !!}
@endsection