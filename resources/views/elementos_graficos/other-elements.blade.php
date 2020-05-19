@extends ('layouts.dashboard')

@section('page_title')	Other Elements @stop
@section('page_subtitle')
	Bootstrap UI Components
@stop
@section ('page_heading', 'Other Elements')

@section('dashboard-content')
<div class="row">
	<div class="col-lg-8 col-md-6">
		@section ('label_panel_title', 'List Group')
		@section ('label_panel_body')
		<ul class="list-group">
			<li class="list-group-item">Cras justo odio</li>
			<li class="list-group-item">Dapibus ac facilisis in</li>
			<li class="list-group-item">Morbi leo risus</li>
			<li class="list-group-item">Porta ac consectetur ac</li>
			<li class="list-group-item">Vestibulum at eros</li>
		</ul>
		<ul class="list-group">
			<li class="list-group-item">
				<span class="badge">14</span>
				Cras justo odio
			</li>
		</ul>
		<div class="list-group">
			<a href="#" class="list-group-item active">
				Cras justo odio
			</a>
			<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
			<a href="#" class="list-group-item">Morbi leo risus</a>
			<a href="#" class="list-group-item">Porta ac consectetur ac</a>
			<a href="#" class="list-group-item">Vestibulum at eros</a>
		</div>
		<div class="list-group">
			<a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
			<a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
			<a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
			<a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
		</div>
		<div class="list-group">
			<a href="#" class="list-group-item active">
				<h4 class="list-group-item-heading">List group item heading</h4>
				<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
			</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">List group item heading</h4>
				<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
			</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">List group item heading</h4>
				<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
			</a>
		</div>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true,'header'=>true, 'as'=>'label'))
	</div>
	<div class="col-lg-4 col-md-6">
		@section ('label2_panel_title', 'Labels & Badges')
		@section ('label2_panel_body')
		@include('widgets.labels', array( 'value'=> 'labels'))
		@include('widgets.labels', array('class'=>'primary', 'value'=> 'labels'))
		@include('widgets.labels', array('class'=>'success', 'value'=> 'labels'))
		@include('widgets.labels', array('class'=>'info', 'value'=> 'labels'))
		@include('widgets.labels', array('class'=>'warning', 'value'=> 'labels'))
		@include('widgets.labels', array('class'=>'danger', 'value'=> 'labels'))
		<br /><br />
		@include('widgets.badge', array('class'=>'primaryb', 'value'=>'35'))
		@include('widgets.badge', array('class'=>'infob', 'value'=>'67'))
		@include('widgets.badge', array('class'=>'successb', 'value'=>'12'))
		@include('widgets.badge', array('class'=>'dangerb', 'value'=>'39'))	
		@include('widgets.badge', array('class'=>'warningb', 'value'=>'07'))	
		@include('widgets.badge', array('class'=>'violetb', 'value'=>'94'))	
		<span class="badge orangeb"><i class="fa fa-star"></i></span>
		<span class="badge cyanb"><i class="fa fa-certificate"></i></span>
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true,'header'=>true, 'as'=>'label2'))
		@section ('label22_panel_title', 'Carousel')
		@section ('label22_panel_body')
		<div id="carousel-example-generic" class="carousel slide carousel-text" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      Success is not final, failure is not fatal: it is the courage to continue that counts.
			      <div class="carousel-caption">
			       
			      </div>
			    </div>
			    <div class="item">
			      To succeed in life, you need two things: ignorance and confidence.
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div class="item">
			      Success is how high you bounce when you hit bottom.
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			   
			  </div>
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true,'header'=>true, 'as'=>'label22'))

		@section ('carousel_panel_title', 'Carousel')
		@section ('carousel_panel_body')
		<div id="carousel-example-generic2" class="carousel slide carousel-photo" data-ride="carousel2">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic2" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic2" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="{{ url ('/img/img1.jpg') }}" alt="">
					<div class="carousel-caption">

					</div>
				</div>
				<div class="item">
					<img src="{{ url ('/img/img2.jpg') }}" alt="">
					<div class="carousel-caption">

					</div>
				</div>
				<div class="item">
					<img src="{{ url ('/img/img3.jpg') }}" alt="">
					<div class="carousel-caption">

					</div>
				</div>

			</div>
			<a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true,'header'=>true, 'as'=>'carousel'))

		@section ('tooltip_panel_title', 'Tooltip & Popover')
		@section ('tooltip_panel_body')
			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Left Tooltip</button>

			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Top Tooltip</button>
			
			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Bottom Tooltip</button>

			<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Right Tooltip</button>
			
			<hr />
				
			<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			 Left Popover
			</button>

			<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			 Top Popover
			</button>
			
			<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
			sagittis lacus vel augue laoreet rutrum faucibus.">
			 Bottom Popover
			</button>

			<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			 Right Popover
			</button>
		@endsection
		@include('widgets.panel', array('class'=>'success tool', 'controls'=>true,'header'=>true, 'as'=>'tooltip'))
	</div>
</div>

@stop
