@extends ('layouts.dashboard')

@section('page_title')	Breadcrumbs and Pagination @stop
@section('page_subtitle')
	Bootstrap UI Components
@stop
@section('page_heading', 'Breadcrumbs and Pagination')

@section('dashboard-content')

<div class="row">
	<div class="col-md-6">
		@section ('panel15_panel_title', 'Breadcrumbs')
		@section ('panel15_panel_body')
		<div class="clearfix">
			<ol class="breadcrumb no-bg no-m-t">
				<li class="active"><i class="fa fa-home"></i></li>
			  	<li><a href="#">Library</a></li>
			  	<li><a href="#">Home</a></li>
			</ol>
		</div>
		<div class="line-h-ex"></div>
		<div class="clearfix">
			<ol class="breadcrumb pull-right no-bg m-t">
				<li><a href="#">Home</a></li>
			  	<li><a href="#">Library</a></li>
			  	<li class="active"><i class="fa fa-home"></i></li>
			</ol>
		</div>
		<div class="line-h-ex"></div>
		<div class="clearfix">
			<ol class="breadcrumb m-t no-m-b">
				<li class="active"><i class="fa fa-home"></i></li>
			  	<li><a href="#">Library</a></li>
			  	<li><a href="#">Home</a></li>
			</ol>
		</div>
		@endsection
		@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'header'=>true, 'as'=>'panel15'))

		@section ('panel17_panel_title', 'Pager')
		@section ('panel17_panel_body')
		<div class="clearfix">
			<ul class="pager no-m-t">
			    <li><a href="#">Previous</a></li>
			    <li><a href="#">Next</a></li>
			</ul>
		</div>

		<div class="line-h-ex"></div>
		
		<div class="clearfix">
			<ul class="pager no-m-b">
			    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
			    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
			</ul>
		</div>

		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'header'=>true, 'as'=>'panel17'))
	</div>
	<div class="col-md-6">
		@section ('panel16_panel_title', 'Pagination')
		@section ('panel16_panel_body')
		<div class="clearfix">
			<ul class="pagination no-m-t">
				<li>
			    	<a href="#" aria-label="Previous">
			        	<span aria-hidden="true">&laquo;</span>
			      	</a>
			    </li>
			    <li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			</ul>
		</div>
		<div class="line-h-ex"></div>
		<div class="clearfix text-center">
			<ul class="pagination">
				<li>
			    	<a href="#" aria-label="Previous">
			        	<span aria-hidden="true">&laquo;</span>
			      	</a>
			    </li>
			    <li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			</ul>
		</div>
		<div class="line-h-ex"></div>
		<div class="clearfix">
			<ul class="pagination pull-right no-m-b">
			    <li>
			    	<a href="#" aria-label="Previous">
			        	<span aria-hidden="true">&laquo;</span>
			      	</a>
			    </li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li>
			      <a href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			</ul>
		</div>
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'panel16'))

		@section ('panel18_panel_title', 'Pagination Sizes')
		@section ('panel18_panel_body')
			<div class="clearfix">
				<ul class="pagination pagination-lg no-m-t">
				    <li>
				    	<a href="#" aria-label="Previous">
				        	<span aria-hidden="true">&laquo;</span>
				      	</a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				</ul>
			</div>
			<div class="line-h-ex"></div>
			<div class="clearfix">
				<ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				</ul>
			</div>
			<div class="line-h-ex"></div>
		
			<div class="clearfix">
				<ul class="pagination pagination-sm no-m-b">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				</ul>
			</div>
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true, 'header'=>true, 'as'=>'panel18'))
	</div>
</div>
@stop