@extends ('plantillas.login')
@section('page_title')	Forgot Password @stop
@section('left_content') Welcome to the Dashy Admin Theme @stop

@section('errors')
@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

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
	<div class="heading">Forgot your password?</div>
	<div class="input">
		<form class="form-horizontal" role="form" method="POST" action="{{ url ('/password/email') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="login-input-group">
				<span class="login-input-group-addon" id="basic-addon1"><i class="fa fa-at fa-fw"></i></span>
				<input type="email" class="form-control" name="email" placeholder="enter email here" value="{{ old('email') }}">
			</div>
			
			<button type="submit" class="btn btn-default btn-lg submit">Send link</button>
		</form>				
			
	</div>
	<div class="rightFooter">
		<a href="{{ url ('/') }}">Back to home</a>
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