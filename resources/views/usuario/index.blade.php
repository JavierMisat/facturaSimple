@extends ('plantillas.dashboard')

@section('page_title') Gestionar Usuarios @stop

@section('page_subtitle')
    Crea, elimina y agrega usuarios de manera fácil.
@stop

@section ('page_heading','Gestionar Usuarios')

@section('dashboard-content')
    @include('usuario.modal')
    @include('alertas.exito')
    <div class="row">
        <div class="col-md-12">
            @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'Se ha eliminado correctamente al usuario'))
            @include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'Error, no se puede borrar usuarios con recaudos asociados'))
            @section ('htable_panel_title','Usuarios del sistema')
            @section ('htable_panel_body')
                @include('usuario.usuarios', array('class'=>'table-hover', 'usuario' => $usuarios))
            @endsection
            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>
    </div>
@stop

@section('js_personalizado')
    {!! Html::script('js/crud/usuarios.js') !!}
@endsection