<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>

	<meta charset="utf-8"/>

	<title>Sistema de Gestion Simple | @yield('page_title')
	</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta content="" name="description"/>
	<meta content="Simple Comunicaciones S.A.S" name="author"/>

	<link rel="stylesheet" href="{{ asset("css/vendor.css") }}" />
	<link rel="stylesheet" href="{{ asset("css/app-".(\Session::has('theme') ? \Session::get('theme') : 'blue').".css") }}" />

	@yield('css')
</head>
<body class="page-header-fixed page-quick-sidebar-over-content {{ \Session::get('layout') == 'boxed' ? 'box-section' : '' }}">

	@yield('body')

	<script src="{{ asset("js/vendor.js") }}" type="text/javascript"></script>
	<script src="{{ asset("vendor/ckeditor/ckeditor.js") }}" type="text/javascript"></script>
	<script src="{{ asset("js/app.js") }}" type="text/javascript"></script>

	@yield('js')

	@yield('js_personalizado')

</body>
</html>