@extends('layouts.dashboard')

@section('page_title') Calendar @stop
@section('page_subtitle') Bootstrap UI Components @stop
@section('page_heading') Calendar @stop


{{-- Define calendar_panel_title section --}}
@section('calendar_panel_title', 'Full Calendar')

{{-- Define calendar_panel_body section --}}
@section('calendar_panel_body')
	<div id="calendar1"></div>
@endsection

{{-- Fill dashboard-content --}}
@section('dashboard-content') 
	@include('widgets.panel', array(
		'controls'=>true,
		'header'=>true,
		'as'=>'elementos_graficos.calendar'
	))
@stop


@section('js')
	
	@parent
	<script type="text/javascript">

	    // page is now ready, initialize the calendar...

	    $('#calendar1').fullCalendar({
	     eventClick: function(calEvent, jsEvent, view) {

	        alert('Event: ' + calEvent.title);
	        alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
	        alert('View: ' + view.name);
	    }
	    });

	</script>
@stop