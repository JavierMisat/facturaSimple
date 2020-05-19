@extends ('plantillas.login')
@section('page_title')	Ingresar @stop
@section('left_content') Bienvenido al sistema de Gestion de Simple @stop

@section('errors')
		@include('alertas.request')
@endsection

@section('page-content')

<div class="heading">Ingresa con tu cuenta</div>
<div class="input">
	<form class="form-horizontal" role="form" method="POST" action="{{ url ('/auth/login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="login-input-group">
			<span class="login-input-group-addon"><i class="fa fa-at fa-fw"></i></span>
			<input type="email" class="form-control" name="email" placeholder="Ingresa tu correo." value="{{ old('email') }}">
		</div>
		<div class="login-input-group">
			<span class="login-input-group-addon"><i class="fa fa-key fa-fw"></i></span>
			<input type="password" class="form-control" placeholder="Ingresa tu password." name="password">
		</div>
		<button type="submit" class="btn btn-default btn-lg submit">ACCEDER</button>
	</form>
</div>
<div class="rightFooter">
	<a href="javascript:;" class="m-l">¿Olvidaste tu contraseña?</a>
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