@extends('layouts.dashboard')

@section('page_title')	Panel @stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section('page_heading') Panel @stop

@section('dashboard-content')
 	<div class="row">
		<div class="col-md-6">
			@section ('panel1_panel_title', 'Primary title')
			@section ('panel1_panel_body')
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<div class="panel-btn">
					@include('widgets.button', array('class'=>'primary pull-right', 'rounded'=>true, 'value'=>'Click here!'))
				</div>
			@endsection
			@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'panel1'))
			
			@section ('panel2_panel_title', 'Danger Panel')
			@section ('panel2_panel_body')
				<h4>Lorem Ipsum</h4>
				<img class="img-responsive img-thumbnail pull-right" src="{{ url ('img/dog.jpg') }}" alt="">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				 proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
			@endsection
			@include('widgets.panel', array('controls'=>true, 'class'=>'danger img-panel', 'header'=>true, 'as'=>'panel2'))
			
			@section ('panel3_panel_title', 'Header')
			@section ('panel3_panel_body')
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
			@endsection
			@section ('panel3_panel_footer', 'Footer')
			@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'header'=>true, 'as'=>'panel3'))
		</div>
		<div class="col-md-6">
			@section ('panel4_panel_title', 'Hello World!')
			@section ('panel4_panel_body')
				<blockquote>Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible. <small> Francis of Assisi </small> </blockquote>
				<blockquote class="pull-right">Don't judge each day by the harvest you reap but by the seeds that you plant.<small>Robert Louis Stevenson</small></blockquote>
			@endsection
			@include('widgets.panel', array('controls'=>true, 'class'=>'info', 'header'=> true, 'as'=>'panel4'))
			
			@section ('panel5_panel_title', 'Warning')
			@section ('panel5_panel_body')
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			@endsection
			@include('widgets.panel', array('controls'=>true, 'class'=>'warning', 'header'=>true, 'as'=>'panel5'))
			
			@section ('panel6_panel_title', 'Default Header')
			@section ('panel6_panel_body')
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			@endsection
			@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'panel6'))
		</div>
	</div>
@stop