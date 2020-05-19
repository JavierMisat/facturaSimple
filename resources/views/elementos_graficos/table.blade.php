@extends('layouts.dashboard')

@section('page_title')
	Tables
@stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section('page_heading')
	Tables
@stop
@section('dashboard-content')
    
<div class="row">
	<div class="col-md-6">
		@section ('table_panel_title','Regular Table')
		@section ('table_panel_body')
		@include('widgets.table', array('class'=>''))
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'elementos_graficos.table'))
	</div>
	<div class="col-md-6">
		@section ('btable_panel_title','Bordered Table')
		@section ('btable_panel_body')
		@include('widgets.table', array('class'=>'table-bordered'))
		@endsection
		@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'btable'))
	</div>
</div>
	
<div class="row">
	<div class="col-md-6">
	@section ('stable_panel_title','Striped Table')
		@section ('stable_panel_body')
		@include('widgets.table', array('class'=>'table-striped'))
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'stable'))
	</div>
	<div class="col-md-6">
		@section ('htable_panel_title','Hover Table')
		@section ('htable_panel_body')
		@include('widgets.table', array('class'=>'table-hover'))
		@endsection
		@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
	</div>
</div>
	
<div class="row">
	<div class="col-md-6">
	@section ('ctable_panel_title','Condensed Table')
		@section ('ctable_panel_body')
		@include('widgets.table', array('class'=>'table-condensed'))
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true, 'header'=>true, 'as'=>'ctable'))
	</div>
	<div class="col-md-6">
		@section ('atable_panel_title','Condensed, Bordered, Striped Table')
		@section ('atable_panel_body')
		@include('widgets.table', array('class'=>'table-condensed table-bordered table-striped'))
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'header'=>true, 'as'=>'atable'))
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		@section ('cotable_panel_title','Coloured Table')
		@section ('cotable_panel_body')
			<table class="table table-bordered white">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<tr class="success">
						<td>John</td>
						<td>john@gmail.com</td>
						<td>London, UK</td>
					</tr>
					<tr class="info">
						<td>Andy</td>
						<td>andy@gmail.com</td>
						<td>Merseyside, UK</td>
					</tr>
					<tr class="warning">
						<td>Frank</td>
						<td>frank@gmail.com</td>
						<td>Southampton, UK</td>
					</tr>
					<tr class="danger">
						<td>Rickie</td>
						<td>rickie@gmail.com</td>
						<td>Burnley, UK</td>
					</tr>
				</tbody>
			</table>	
		@endsection
		@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'cotable'))
	</div>
</div>
@stop