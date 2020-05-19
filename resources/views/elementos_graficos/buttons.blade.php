@extends('layouts.dashboard')

@section('page_title')
	Buttons
@stop

@section('page_heading','Buttons')
@section('page_subtitle') Bootstrap UI Components @stop

@section('dashboard-content')

<div class="row">
	<div class="col-sm-12">
		@section ('lbutton_panel_title','Buttons')
		@section ('lbutton_panel_body')
		<p>
			@include('widgets.button', array('value'=>'Default Button', 'rounded'=>true))
			@include('widgets.button', array('class'=>'primary', 'value'=>'Primary Button', 'rounded'=>true))
			@include('widgets.button', array('class'=>'success', 'value'=>'Success Button', 'rounded'=>true))
			@include('widgets.button', array('class'=>'info', 'value'=>'Info Button', 'rounded'=>true))
			@include('widgets.button', array('class'=>'warning', 'value'=>'Warning Button', 'rounded'=>true))
			@include('widgets.button', array('class'=>'danger', 'value'=>'Danger Button', 'rounded'=>true))

		</p>
		<hr />
		<p>
			@include('widgets.button', array('value'=>'Default Button'))
			@include('widgets.button', array('class'=>'primary', 'value'=>'Primary Button'))
			@include('widgets.button', array('class'=>'success', 'value'=>'Success Button'))
			@include('widgets.button', array('class'=>'info', 'value'=>'Info Button'))
			@include('widgets.button', array('class'=>'warning', 'value'=>'Warning Button'))
			@include('widgets.button', array('class'=>'danger', 'value'=>'Danger Button'))
		</p>
		<hr />
		<p>
			@include('widgets.button', array('class'=>'info', 'value'=>'Info Button', 'bordered'=>true))
			@include('widgets.button', array('class'=>'primary', 'value'=>'Primary Button', 'bordered'=>true))
			@include('widgets.button', array('class'=>'success', 'value'=>'Success Button', 'bordered'=>true))
			@include('widgets.button', array('class'=>'warning', 'value'=>'Warning Button', 'bordered'=>true))
			@include('widgets.button', array('class'=>'danger', 'value'=>'Danger Button', 'bordered'=>true))

		</p>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'as'=>'lbutton', 'header'=>true))
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		@section ('rbutton_panel_title','Button Sizes')
		@section ('rbutton_panel_body')
		<p>
			@include('widgets.button', array('class'=>'danger', 'size'=>'xs', 'value'=>'Extra Small Button', 'rounded'=>true))<p>
			@include('widgets.button', array('class'=>'success', 'size'=>'sm', 'value'=>'Small Button', 'rounded'=>true))<p>
			@include('widgets.button', array('class'=>'info', 'size'=>'lg', 'value'=>'Large Button', 'rounded'=>true))<p>	
			@include('widgets.button', array('class'=>'warning btn-block', 'value'=>'Block Level Button', 'rounded'=>true))	
		</p>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'as'=>'rbutton', 'header'=>true))
	</div>
	<div class="col-md-8">
		@section ('rrbutton_panel_title','Button Groups')
		@section ('rrbutton_panel_body')
		<p>
			<div class="btn-group" role="group">
				<button type="button" class="btn btn-primary">Primary Button</button>
				<button type="button" class="btn btn-default">Default Button</button>
			</div>
		</p>
		<hr />	
		<h4>Justified Button Groups</h4>
		<p>
			<div class="btn-group btn-group-justified" role="group">
				<div class="btn-group" role="group">
				<button type="button" class="btn btn-primary">Primary </button>
				</div>
				<div class="btn-group" role="group">
				<button type="button" class="btn btn-info">Info</button>
				</div>
				<div class="btn-group" role="group">
				<button type="button" class="btn btn-warning">Warning</button>
				</div>
				<div class="btn-group" role="group">
				<button type="button" class="btn btn-danger">Danger</button>
				</div>
			</div>
		</p>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'as'=>'rrbutton', 'header'=>true))
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		@section ('bbutton_panel_title','Buttons with Icons')
		@section ('bbutton_panel_body')
		<button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-twitter"></i></button>
		<button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-facebook"></i></button>
		<button type="button" class="btn btn-warning btn-rounded">Download&nbsp;&nbsp;<i class="fa fa-download"></i></button>
		<button type="button" class="btn btn-success btn-bordered"><i class="fa fa-plus"></i>&nbsp;&nbsp;View More</button>
		<button type="button" class="btn btn-danger"><i class="fa fa-phone"></i>&nbsp;&nbsp;Call Us!</button>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'as'=>'bbutton', 'header'=>true))
	</div>
</div>
@stop


