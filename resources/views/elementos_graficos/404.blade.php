@extends ('layouts.login')
@section('page_title') 404 @stop
@section('left_content') Oops! La página que estás buscando no existe. @stop

@section('page-content')
	<div class="login-right fright striped-bg">
		<h1 align="center">404</h1>
		<p  class="oops">No se ha encontrado la página. </p>
		<div class="frightFooter">
			<a href="{{ url ('') }}">Regresar a la página principal.</a>
		</div>
	</div>
@stop
