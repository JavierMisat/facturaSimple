@extends ('plantillas.dashboard')

@section('page_title') Municipio de {{$municipio->descripcion}} @stop
@section('page_subtitle')
    Información detallada.
@stop
@section ('page_heading', "Municipio de {$municipio->descripcion}")
@section('dashboard-content')
    @include('municipio.modal')
    @include('alertas.exito')
    @include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'Error, no se puede borrar usuarios con recaudos asociadas.'))
    @include('widgets.alert', array('class'=>'success', 'icon' => 'check-circle', 'dismissable'=>true, 'message'=> 'pago'))

    @include('municipio.panel', ['municipio' => $municipio])

@stop

@section('js_personalizado')
{!! Html::script('js/crud/municipios.js') !!}
@endsection

