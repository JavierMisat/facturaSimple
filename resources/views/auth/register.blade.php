@extends ('plantillas.login')
@section('page_title') Signup @stop

@section('left_content') Welcome to the Dashy Admin Theme @stop
@section('errors') 
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
@endsection

@section('page-content')
	<div class="heading">Create your Account</div>
	<div class="input">
		<form class="form-horizontal" role="form" method="POST" action="{{ url ('/auth/register') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="login-input-group">
				<span class="login-input-group-addon" id="basic-addon3"><i class="fa fa-user fa-fw"></i></span>
				<input type="text" class="here form-control" placeholder="name" aria-describedby="basic-addon2" name="name" value="{{ old('name') }}">
			</div>
			<div class="login-input-group">
				<span class="login-input-group-addon" id="basic-addon1"><i class="fa fa-at fa-fw"></i></span>
				<input type="email" class="here form-control" placeholder="email" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}">
			</div>
			<div class="login-input-group">
				<span class="login-input-group-addon" id="basic-addon2"><i class="fa fa-key fa-fw"></i></span>
				<input type="password" class="here form-control" placeholder="password" aria-describedby="basic-addon2" name="password">
			</div>
			<div class="login-input-group">
				<span class="login-input-group-addon" id="basic-addon2"><i class="fa fa-key fa-fw"></i></span>
				<input type="password" class="here form-control" placeholder="confirm password" aria-describedby="basic-addon2" name="password_confirmation">
			</div>
			<button type="submit" class="btn btn-default btn-lg submit">Signup</button>

		</form>
	</div>
	<div class="rightFooter">
		<a href="{{ url ('/auth/login') }}">Already have an Account?</a>
	</div>
@stop

@section('js')
	@parent
	<script type="text/javascript">
		$(".alert-danger").click(function(){
	    $(".alert-danger").hide();
	});
	</script>

@endsection