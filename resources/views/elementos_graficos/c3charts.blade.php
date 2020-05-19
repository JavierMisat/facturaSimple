@extends ('layouts.dashboard')

@section('page_title')	Charts @stop
@section('page_subtitle')C3 Chart Components @stop
@section( 'page_heading', 'C3 Charts')

@section('dashboard-content')
	<div class="row">
		<div class="col-md-6">
			@section ('chart1_panel_title','Line Chart')
			@section ('chart1_panel_body')
			@include('widgets.charts.linechart')
			@endsection
			@include('widgets.panel', array('class'=>'primary', 'controls'=>true,'header'=>true, 'as'=>'chart1'))
		</div>
		<div class="col-md-6">
			@section ('chart2_panel_title','Pie Chart')
			@section ('chart2_panel_body')
			@include('widgets.charts.piechart')
			@endsection
			@include('widgets.panel', array('class'=>'warning', 'controls'=>true,'header'=>true, 'as'=>'chart2'))
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			@section ('chart3_panel_title','Donut Chart')
			@section ('chart3_panel_body')
			@include('widgets.charts.donutchart')
			@endsection
			@include('widgets.panel', array('class'=>'success', 'controls'=>true,'header'=>true, 'as'=>'chart3'))
		</div>
		<div class="col-md-6">
			@section ('chart4_panel_title','Area Chart')
			@section ('chart4_panel_body')
			@include('widgets.charts.areachart')
			@endsection
			@include('widgets.panel', array('class'=>'danger', 'controls'=>true,'header'=>true, 'as'=>'chart4'))
		</div>
	</div>
@stop


@section('js')
	@parent
	<script type="text/javascript">


	var chart1 = c3.generate({
	    bindto: '#linechart',
	        data: {
	        columns: [
	            ['data1', 30, 200, 100, 400, 150, 250],
	            ['data2', 50, 20, 10, 40, 15, 25]
	        ]
	    },
	    color: {
	        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
	    }
	});


	var chart2 = c3.generate({
	   bindto: '#piechart',
	    data: {
	         
	        // iris data from R
	        columns: [
	            ['data1', 30],
	            ['data2', 120],
	        ],
	        type : 'pie',
	        onclick: function (d, i) { console.log("onclick", d, i); },
	        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
	        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
	    },
	    color: {
	        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
	    }
	});


	 var chart4 = c3.generate({
	    bindto: '#donutchart',
	    data: {
	        columns: [
	            ['data1', 30],
	            ['data2', 120],
	        ],
	        type : 'donut',
	        onclick: function (d, i) { console.log("onclick", d, i); },
	        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
	        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
	    },
	    donut: {
	        title: "Donut Chart"
	    },
	    color: {
	        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
	    }
	});




	var chart5 = c3.generate({
	    bindto: '#areachart',
	    data: {
	        columns: [
	            ['data1', 200, 240, 300, 70, 10, 0],
	            ['data2', 130, 100, 140, 200, 150, 50]
	        ],
	        types: {
	            data1: 'area',
	            data2: 'area-spline'
	        }
	    },
	    color: {
	        pattern: ['#06c5ac','#3faae3','#ee634c','#6bbd95','#f4cc0b','#9b59b6','#16a085','#c0392b']
	    }
	});


	</script>

@endsection