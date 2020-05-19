@extends ('layouts.dashboard')

@section('page_title')	Progressbar @stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section('page_heading','Progressbar')
@section('dashboard-content')

<div class="row">
	<div class="col-md-6">
		@section ('progress_panel_title','Progress Bars')
		@section ('progress_panel_body')
		<h4>Regular</h4>
		@include('widgets.progress', array('class'=> '', 'value'=>'47'))

		<h4>With label</h4>
		@include('widgets.progress', array('class'=> '', 'value'=>'63', 'badge'=>true))
		<h4>Stacked</h4>
		@include('widgets.stacked-progress', array('class1'=>'progress-bar-danger progress-bar-striped', 'value1'=> '13', 'class2'=>'progress-bar-warning', 'value2'=> '23','class3'=>'progress-bar-success', 'value3'=> '39'))
		@endsection
		@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'header'=>true, 'as'=>'progress'))
	</div>
	<div class="col-md-6">
		@section ('cprogress_panel_title','Contextual Progressbars')
		@section ('cprogress_panel_body')
		@include('widgets.progress', array('class'=> 'success', 'value'=>'97'))
		@include('widgets.progress', array('class'=> 'primary', 'value'=>'63'))
		@include('widgets.progress', array('class'=> 'info', 'value'=>'52'))
		@include('widgets.progress', array('class'=> 'warning', 'value'=>'31'))
		@include('widgets.progress', array('class'=> 'danger', 'value'=>'16'))
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'cprogress'))
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		@section ('sprogress_panel_title','Striped Progresbars')
		@section ('sprogress_panel_body')
		@include('widgets.progress', array('class'=> 'success', 'striped'=> true, 'value'=>'97'))
		@include('widgets.progress', array('class'=> 'info', 'striped'=> true, 'value'=>'52'))
		@include('widgets.progress', array('class'=> 'primary', 'striped'=> true, 'value'=>'62'))
		@include('widgets.progress', array('class'=> 'warning', 'striped'=> true, 'value'=>'31'))
		@include('widgets.progress', array('class'=> 'danger', 'striped'=> true, 'value'=>'16'))
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'sprogress'))
	</div>
	<div class="col-md-6">
		@section ('stprogress_panel_title','Animated Progresbars')
		@section ('stprogress_panel_body')
		@include('widgets.progress', array('animated'=> true, 'value'=>'65'))
		@include('widgets.progress', array('class'=>'success', 'animated'=> true, 'value'=>'92'))
		@include('widgets.progress', array('class'=>'info', 'animated'=> true, 'value'=>'77'))
		@include('widgets.progress', array('class'=>'warning', 'animated'=> true, 'value'=>'34'))
		@include('widgets.progress', array('class'=>'danger', 'animated'=> true, 'value'=>'22'))

		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true, 'header'=>true, 'as'=>'stprogress'))
	</div>
</div>
@stop