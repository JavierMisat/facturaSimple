@extends ('plantillas.dashboard')

@section('page_title')  Roles & Permisos @stop

@section('page_subtitle')
    Roles del sistema.
@stop

@section ('page_heading','Roles y permisos del sistema')

@section('dashboard-content')

        @include('pago.modal')
        @include('alertas.exito')
        <div class="row">
            <div class="col-md-12">
                @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'Se ha eliminado el Rol correctamente'))
                @section ('htable_panel_title','Roles Disponibles')
                @section ('htable_panel_body')
                    @include('rol.datos.roles', array('class'=>'table-hover', 'roles' => $roles))
                @endsection
                @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
            </div>
        </div>

@section('js_personalizado')
    {!! Html::script('js/crud/roles.js') !!}
@endsection

@stop