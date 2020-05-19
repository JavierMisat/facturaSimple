@extends ('layouts.dashboard')

@section('page_title')	Alerts @stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section ('page_heading','Alerts')

@section('dashboard-content')

@section ('alert1_panel_title','Dismissable Alerts')
@section ('alert1_panel_body')
	@include('widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'check'))
	@include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
	@include('widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'))
	@include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'remove'))
@endsection
@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'alert1'))
<div class="row">
	<div class="col-md-12">
		@section ('alert3_panel_title','Growl Alerts')
		@section ('alert3_panel_body')
			<p>
			@include('widgets.button', array('class'=>'primary primary-growl', 'value'=>'Primary Growl'))

			@include('widgets.button', array('class'=>'info info-growl', 'value'=>'Info Growl'))

			@include('widgets.button', array('class'=>'warning warning-growl', 'value'=>'Warning Growl'))

			@include('widgets.button', array('class'=>'danger danger-growl', 'value'=>'Danger Growl'))
			</p>
			<hr />
			<h4> Growl Positions</h4>
			<p>
			@include('widgets.button', array('class'=>'primary top-left', 'value'=>'Top Left'))

			@include('widgets.button', array('class'=>'info top-right', 'value'=>'Top Right'))

			@include('widgets.button', array('class'=>'danger bottom-left', 'value'=>'Bottom Left'))

			@include('widgets.button', array('class'=>'success bottom-right', 'value'=>'Bottom Right'))

			@include('widgets.button', array('class'=>'primary top-center', 'value'=>'Top Center'))

			@include('widgets.button', array('class'=>'warning bottom-center', 'value'=>'Bottom Center'))
			</p>
		@endsection
		@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'header'=>true, 'as'=>'alert3'))
	</div>
</div>
@stop

@section('js')
	@parent
		<script type="text/javascript">
	
		  $('.primary-growl').click(function(event) {
		        return $.growl({
		      	title: 'Hello!',
		        message: "The kitten is attacking!"
		      });
		    });
		    $('.danger-growl').click(function(event) {
		        return $.growl.error({
		        message: "The kitten is attacking!"
		      });
		    });
		    $('.info-growl').click(function(event) {
		        return $.growl.notice({
		        message: "The kitten is cute!"
		      });
		    });
		    $('.warning-growl').click(function(event) {
		        return $.growl.warning({
		        message: "The kitten is ugly!"
		      });
		    });


		      $('.top-left').click(function(event) {
		        return $.growl.warning({
		      	title: 'Hello!',
		        message: "The kitten is attacking!",
		        location: "tl"
		      });
		    });
		    $('.top-right').click(function(event) {
		        return $.growl({
		        message: "The kitten is attacking!",
		        location: "tr"
		      });
		    });
		    $('.bottom-left').click(function(event) {
		        return $.growl.error({
		        message: "The kitten is cute!",
		        location: "bl"
		      });
		    });
		    $('.bottom-right').click(function(event) {
		        return $.growl.notice({
		        message: "The kitten is ugly!",
		        location: "br"
		      });
		    });
		    $('.top-center').click(function(event) {
		        return $.growl.warning({
		        message: "The kitten is ugly!",
		        location: "tc"
		      });
		    });
		    $('.bottom-center').click(function(event) {
		        return $.growl({
		        message: "The kitten is ugly!",
		        location: "bc"
		      });
		    });
		 
		</script>
@endsection		