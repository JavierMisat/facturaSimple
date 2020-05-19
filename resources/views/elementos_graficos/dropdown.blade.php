@extends('layouts.dashboard')

@section('page_title')
Dropdown 
@stop
@section('page_subtitle')
Bootstrap UI Components
@stop

@section('page_heading','Dropdown Buttons')
@section('dashboard-content')

<div class="row">
	<div class="col-sm-12">
		@section ('mbutton_panel_title','Navbar')
		@section ('mbutton_panel_body')
		<h4>Default Style</h4>
		<nav class="navbar navbar-default display-default">
		<div class="container-fluid">
		    <div class="navbar-header">
	  		    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    	</button>
		        <a class="navbar-brand" href="#">Brand</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Link</a></li>
			        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
		        	</li>
		        </ul>
		        <form class="navbar-form navbar-left" role="search">
			        <div class="form-group">
			            <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
		        </form>
		        <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Link</a></li>
			        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
			        </li>
		        </ul>
		    </div>
		</div>
		</nav>
		<h4>Inverted Style</h4>
		<nav class="navbar navbar-inverse display-default">
			<div class="container-fluid">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        </button>
		     		<a class="navbar-brand" href="#">Brand</a>
		    	</div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
						</li>
					</ul>
			        <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
			       		<button type="submit" class="btn btn-default">Submit</button>
			        </form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
						</li>
					</ul>
			    </div>
			</div>
		</nav>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'as'=>'mbutton', 'header'=>true))
	</div>
</div> 
<div class="row">
	<div class="col-sm-12">
		@section ('mbutton56_panel_title','Regular Dropdown')
		@section ('mbutton56_panel_body')
			@include('widgets.dropdown-button', array('value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		
		<hr />
			@include('widgets.dropdown-button', array('value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		
		<hr />
			@include('widgets.dropdown-button', array('value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'as'=>'mbutton56', 'header'=>true))
	</div>
</div>	
<div class="row">
	<div class="col-sm-12">
		@section ('mbutton52_panel_title','Split-Button Dropdown')
		@section ('mbutton52_panel_body')
			@include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		
		<hr />
			@include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		
		<hr />
			@include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		@endsection
		@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'as'=>'mbutton52', 'header'=>true))
	</div>
</div>	
<div class="row">
	<div class="col-sm-12">
		@section ('mbutton72_panel_title','Dropup')
		@section ('mbutton72_panel_body')
			@include('widgets.dropdown-button', array('up'=>true, 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'primary', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'success', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'warning', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'danger', 'value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		
		<hr />
			@include('widgets.dropdown-button', array('up'=>true, 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'primary', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'success', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'warning', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'danger', 'value'=>'Custom value', 'rounded'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		
		<hr />
			@include('widgets.dropdown-button', array('up'=>true, 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'primary', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'success', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'warning', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'danger', 'value'=>'Custom value', 'bordered'=>true, 'submenu'=> array( 'lists' => array(
			'name' => 'test1', 'link' => '#'))))
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'as'=>'mbutton72', 'header'=>true))
	</div>
</div>
@stop


