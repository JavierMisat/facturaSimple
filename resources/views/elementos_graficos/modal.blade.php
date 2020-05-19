@extends('layouts.dashboard')

@section('page_title')
	Modal
@stop
@section('page_subtitle')
Bootstrap UI Components
@stop
@section('page_heading', 'Modal')

@section('dashboard-content')
	
	@section ('modal1_panel_title', 'Modal')
	@section ('modal1_panel_body')
	<table class="table modal-table">
	<tr>
		<td class="moleft"> Normal Size</td>	
		<td class="moright">
			<button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#myModal">
				View Modal
			</button>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body high-padding text-center">
					This is a demo Modal for confirmation
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary btn-rounded">Confirm</button>
					</div>
				</div>
			</div>
		</div>
		</td>
	</tr>
		<!-- Modal -->
		
	<tr>	
		<td class="moleft"> Large Size</td>	
		<td class="moright">
			<button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#myModal2">
				View Modal
			</button>
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt cumque maiores praesentium earum autem consequuntur sint veritatis sapiente rem iure culpa doloribus, minus alias, atque, iusto dolorem nesciunt. Vel, officia?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit fugiat accusamus dolorum blanditiis, mollitia, esse voluptatibus aperiam nostrum laborum suscipit dolore? Natus voluptatum in earum beatae autem qui rem. Aperiam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium animi eius, aliquam harum in, et consequuntur omnis autem voluptatibus nostrum voluptates hic quaerat explicabo nam dolore! Temporibus mollitia incidunt nulla! 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aliquam, saepe repudiandae. Reiciendis quod, officia eaque eveniet reprehenderit illum ipsa obcaecati, in aut praesentium quam mollitia animi itaque laboriosam delectus?...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary btn-rounded">Confirm</button>
					</div>
				</div>
			</div>
		</div>	
		</td>
	</tr>
	<tr>
		<td class="moleft"> Small Size</td>	
		<td class="moright">


			<button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target=".bs-example-modal-sm">View Modal</button>


			<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti!
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary btn-rounded">Confirm</button>
					</div>
				</div>
			</div>
			</div>


		</td>
	</tr>
	</table>
	@endsection
	@include('widgets.panel', array('class'=>'primary', 'header'=>true, 'as'=>'modal1'))

	
	
@stop