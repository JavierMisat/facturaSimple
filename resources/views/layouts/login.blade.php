@extends ('layouts.plain')

<div class="back">
	<div class="errors col-sm-8 col-sm-offset-2">
		@yield ('errors')
	</div>

	<div class="login-outer">
		<div class="login-wrap">
			<div class="login-left striped-bg text-center">
				<a href="{{ url('/') }}" class="logo-lg">
					<i class="fa fa-signal"></i> Sistema de gestión de usuarios
				</a>		
				<div class="slogan">Simple Comunicaciones S.A.S</div>
			</div>
			
			<div class="login-right striped-bg">
				@yield('page-content')
			</div>
		</div>
	</div>
	
</div>
