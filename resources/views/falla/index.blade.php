@extends ('plantillas.dashboard')

@section('page_title')	Reporte de fallas de servicio @stop

@section('page_subtitle')
    Reporte de fallas en el servicio
@stop

@section ('page_heading','Reporte de Daños & Fallas')

@section('dashboard-content')

@section ('panel4_panel_title', 'En construcción')
@section ('panel4_panel_body')
   <h2 class="text-center padder"><i class="fa fa- fa-code fa-1x"></i> Módulo en desarrollo, disponible proximamente...</h2>
@endsection
@include('widgets.panel', array('controls'=>true, 'class'=>'info', 'header'=> true, 'as'=>'panel4'))

@stop
