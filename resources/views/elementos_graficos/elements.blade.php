@extends ('layouts.dashboard')

@section('page_title')	Form Elements @stop
@section('page_subtitle')
Bootstrap Form Components
@stop
@section('page_heading')	Form Elements @stop

@section('dashboard-content')

<div class="row">
	<div class="col-md-6">
		@section ('test_panel_title', 'Default Form')
		@section ('test_panel_body')
			
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button> &nbsp;<span class="loader-inner ball-pulse"><div></div><div></div><div></div></span>
			</form>
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'test'))

	</div>

	<div class="col-md-6">
		@section ('test1_panel_title', 'Horizontal Form')
		@section ('test1_panel_body')
		@include('widgets.loader-block')
			<form class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Sign in</button> &nbsp; 
					</div>
				</div>
			</form>
		@endsection
		@include('widgets.panel', array('class'=>'success', 'controls'=>true, 'header'=>true, 'as'=>'test1'))
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@section ('inline_panel_title', 'Inline Form')
		@section ('inline_panel_body')
			<form class="form-inline">
				<div class="form-group">
					<label for="exampleInputName2">Name</label>
					<input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
				</div>
				<button type="submit" class="btn btn-default">Send invitation</button>
			</form>
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'inline'))
	</div>
	<div class="col-md-6">
		@section ('uinline_panel_title', 'Inline Underline Form')
		@section ('uinline_panel_body')
			<form class="form-inline">
				<div class="form-group">
					<label for="exampleInputName2">Name</label>
					<input type="text" class="form-control underline" id="exampleInputName2" placeholder="Jane Doe">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail2">Email</label>
					<input type="email" class="form-control underline" id="exampleInputEmail2" placeholder="jane.doe@example.com">
				</div>
				<button type="submit" class="btn btn-default">Send invitation</button>
			</form>
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'controls'=>true, 'header'=>true, 'as'=>'uinline'))
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		@section ('underline_panel_title', 'Underline Default Form')
		@section ('underline_panel_body')
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control underline" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control underline" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Remember me
					</label>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'controls'=>true, 'header'=>true, 'as'=>'underline'))

	</div>
	<div class="col-md-6">
		@section ('underline1_panel_title', 'Horizontal Underline Form')
		@section ('underline1_panel_body')
			<form>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control underline" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control underline" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Sign in</button>
					</div>
				</div>
			</form>
		@endsection
		@include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'underline1'))
	</div>
</div>


@stop