@extends ('plantillas.dashboard')

@section('page_title')  Tipos de Clientes @stop

@section('page_subtitle')
    Tipos de cliente posibles.
@stop

@section ('page_heading','Roles y permisos del sistema')

@section('dashboard-content')
    @include('tipos.modal')
    @include('alertas.exito')
    <div class="row">
        <div class="col-md-12">
            @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'Se ha eliminado el Tipo de Cliente correctamente'))
            @include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'Error, no se puede borrar "Tipos de Clientes", con clientes asociados'))
            @section ('htable_panel_title','Tipos de Cliente')
            @section ('htable_panel_body')
                @include('tipos.datos.tipos', array('class'=>'table-hover', 'tipos' => $tipos))
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>
    </div>
@stop

@section('js_personalizado')
    {!! Html::script('js/crud/tipos.js') !!}
@endsection

