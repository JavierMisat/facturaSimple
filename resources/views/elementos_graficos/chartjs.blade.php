@extends ('layouts.dashboard')

@section('page_title')	Charts @stop
@section('page_subtitle')Chartjs Chart Components @stop
@section( 'page_heading', 'Chartjs Charts')

@section('dashboard-content')

	<div class="row">
		<div class="col-md-6">
			@section ('chartjs1_panel_title','Line Chart')
			@section ('chartjs1_panel_body')
				<div><canvas id="cline"></canvas></div>
			@endsection
			@include('widgets.panel', array('class'=>'primary', 'controls'=>true,'header'=>true, 'as'=>'chartjs1'))
		</div>
		<div class="col-md-6">
			@section ('chartjs2_panel_title','Bar Chart')
			@section ('chartjs2_panel_body')
				<div><canvas id="cbar"></canvas></div>
			@endsection
			@include('widgets.panel', array('class'=>'warning', 'controls'=>true,'header'=>true, 'as'=>'chartjs2'))
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			@section ('chartjs3_panel_title','Donut Chart')
			@section ('chartjs3_panel_body')
				<div><canvas class ="round" id="cdonut"></canvas></div>
			@endsection
			@include('widgets.panel', array('class'=>'success', 'controls'=>true,'header'=>true, 'as'=>'chartjs3'))
		</div>
		<div class="col-md-6">
			@section ('chartjs4_panel_title','Pie Chart')
			@section ('chartjs4_panel_body')
				<div><canvas class ="round" id="cpie"></canvas></div>
			@endsection
			@include('widgets.panel', array('class'=>'danger', 'controls'=>true,'header'=>true, 'as'=>'chartjs4'))
		</div>
	</div>

@endsection

@section('js')
	@parent
	<script type="text/javascript">

		var data1 = {
		    labels: ["January", "February", "March", "April", "May", "June", "July"],
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(6, 197, 172, 0.3)",
		            strokeColor: "rgba(6, 197, 172, 1))",
		            pointColor: "rgba(6, 197, 172, 1))",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(6, 197, 172, 1))",
		            data: [65, 59, 80, 81, 56, 55, 40]
		        },
		        {
		            label: "My Second dataset",
		            fillColor: "rgba(213, 125, 109, 0.3)",
		            strokeColor: "rgba(213, 125, 109, 1)",
		            pointColor: "rgba(213, 125, 109, 1)",
		            pointStrokeColor: "#fff",
		            pointHighlightFill: "#fff",
		            pointHighlightStroke: "rgba(213, 125, 109, 1)",
		            data: [28, 48, 40, 19, 86, 27, 90]
		        }
		    ]
		};

		var cline = document.getElementById("cline").getContext("2d");
        new Chart(cline).Line(data1, {
            responsive: true
        });

        var data2 = [
		    {
		        value: 220,
		        color:"#A2D19E",
		        highlight: "rgba(162, 209, 158, 0.9)",
		        label: "Success"
		    },
		    {
		        value: 70,
		        color: "#D57D6D",
		        highlight: "rgba(213, 125, 109, 0.9)",
		        label: "Danger"
		    },
		    {
		        value: 100,
		        color: "#80B1CB",
		        highlight: "rgba(128, 177, 203, 0.9)",
		        label: "Info"
		    }
		]
		var cpie = document.getElementById("cpie").getContext("2d");
        new Chart(cpie).Pie(data2, {
            responsive: true
        });

        var data3 = [
		    {
		        value: 100,
		        color:"#06C5AC",
		        highlight: "rgba(6, 197, 172, 0.9)",
		        label: "Primary"
		    },
		    {
		        value: 50,
		        color: "#D57D6D",
		        highlight: "rgba(213, 125, 109, 0.9)",
		        label: "Danger"
		    },
		    {
		        value: 50,
		        color: "#80B1CB",
		        highlight: "rgba(128, 177, 203, 0.9)",
		        label: "Info"
		    },
		    {
		        value: 100,
		        color: "#E8B769",
		        highlight: "rgba(232, 183, 105, 0.9)",
		        label: "Warning"
		    }
		]
		var cdonut = document.getElementById("cdonut").getContext("2d");
        new Chart(cdonut).Doughnut(data3, {
            responsive: true,
            animateScale: true
        });

        var data4 = {
		    labels: ["January", "February", "March", "April", "May", "June", "July"],
		    datasets: [
		        {
		            label: "My First dataset",
		            fillColor: "rgba(162, 209, 158, 0.5)",
		            strokeColor: "rgba(162, 209, 158, 0.9)",
		            highlightFill: "rgba(162, 209, 158, 0.7)",
		            highlightStroke: "rgba(162, 209, 158, 1)",
		            data: [65, 59, 80, 81, 56, 55, 40]
		        },
		        {
		            label: "My Second dataset",
		            fillColor: "rgba(232, 183, 105, 0.5)",
		            strokeColor: "rgba(232, 183, 105, 0.9)",
		            highlightFill: "rgba(232, 183, 105, 0.7)",
		            highlightStroke: "rgba(232, 183, 105, 1)",
		            data: [28, 48, 40, 19, 86, 27, 90]
		        }
		    ]
		};
		var cbar = document.getElementById("cbar").getContext("2d");
        new Chart(cbar).Bar(data4, {
            responsive: true
        });
	</script>

@endsection