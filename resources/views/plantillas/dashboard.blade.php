@extends('plantillas.plain')

@section('body')
    <div id="app-container">
        <nav class="navbar navbar-inverse navbar-fixed-top striped-bg" id="top-navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="sidenav-toggle" href="#"><span class="brandbar"><i
                                    class="fa fa-bars hidd"></i></span></a></span>
                    <a class="navbar-brand" href="{{ url ('/admin') }}"><i class="fa fa-signal"></i>&nbsp;Pagos
                        Simple</a>
                    <div class="solution">By HelpDevs</div>
                </div>
                <div class="right-admin">
                    <ul>
                        <li class="dropdown hidd">
                            <a href="#" class="dropdown-toggle admin-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">

                                <img class="img-circle admin-img"
                                     src="{{ isset(Auth::user()->foto) ? '/perfiles/'.Auth::user()->foto : url('/perfiles/default.png') }}"
                                     alt="{{Auth::user()->nombre}}">

                            </a>
                            <ul class="dropdown-menu admin" role="menu">
                                <li role="presentation" class="dropdown-header"> {{Auth::user()->nombre}}</li>

                                @if(Auth::user()->rol != SistemaGestionSimple\Usuario::RECAUDADOR)

                                    <li><a href="{{ url ('perfil') }}"><i class="fa fa-info"></i> Perfil</a></li>

                                @elseif(Auth::user()->rol == SistemaGestionSimple\Usuario::RECAUDADOR && Auth::user()->pagosUsuario->count() > 0)

                                    <li><a href="{{ url ('usuarios/'.Auth::user()->id_usuario) }}"><i
                                                    class="fa fa-info"></i> Perfil</a></li>

                                @else
                                    <li><a href="#"><i class="fa fa-info"></i> Perfil</a></li>

                                @endif


                                <li><a href="{{ url ('/auth/logout') }}"><i class="fa fa-power-off"></i> Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right top-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle notoggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <span><i class="fa fa-circle text-primary"></i></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="padder-h-xs">
                                    <table class="table color-swatches-table text-center no-m-b">
                                        <tr>
                                            <td>
                                                <a href="javascript:;" data-theme="green" class="theme-picker">
                                                    <i class="fa fa-circle fa-2x green-base"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="javascript:;" data-theme="blue" class="theme-picker">
                                                    <i class="fa fa-circle fa-2x blue-base"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="javascript:;" data-theme="red" class="theme-picker">
                                                    <i class="fa fa-circle fa-2x red-base"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="javascript:;" data-theme="orange" class="theme-picker">
                                                    <i class="fa fa-circle fa-2x orange-base"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" id="boxed-layout"><i class="fa fa-expand-toggle fa-tp"></i></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle admin-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <img class="img-circle admin-img"
                                     src="{{ isset(Auth::user()->foto) ? '/perfiles/'.Auth::user()->foto : url('/perfiles/default.png') }}"
                                     alt="{{Auth::user()->nombre}}">&nbsp;&nbsp;&nbsp;<span class="add">
							            {{Auth::user()->rolUsuario->descripcion}}
                                    <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu admin" role="menu">
                                <li role="presentation" class="dropdown-header">{{Auth::user()->nombre}}</li>


                                @if(Auth::user()->rol != SistemaGestionSimple\Usuario::RECAUDADOR)

                                    <li><a href="{{ url ('perfil') }}"><i class="fa fa-info"></i> Perfil</a></li>

                                @elseif(Auth::user()->rol == SistemaGestionSimple\Usuario::RECAUDADOR && Auth::user()->pagosUsuario->count() > 0)

                                    <li><a href="{{ url ('usuarios/'.Auth::user()->id_usuario) }}"><i
                                                    class="fa fa-info"></i> Perfil</a></li>

                                @else
                                    <li><a href="#"><i class="fa fa-info"></i> Perfil</a></li>

                                @endif


                                <li><a href="{{ url ('/auth/logout') }}"><i class="fa fa-power-off"></i> Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="striped-bg" id="sidenav">
            <div role="tabpanel" id="navTabs">
                <div class="sidebar-controllers">
                    <ul class="nav nav-tabs nav-justified sidebar-top-nav" role="tablist">

                    </ul>
                    <div class="">
                        <div class="tab-content-scroller tab-content sidebar-section-wrap">
                            <div role="tabpanel" class="tab-pane active" id="menu">
                                <div class="photo-container text-center">

                                    @if(Auth::user()->rol != SistemaGestionSimple\Usuario::RECAUDADOR)

                                        <a href="{{ url ('perfil') }}">
                                            <img src="{{ isset(Auth::user()->foto) ? '/perfiles/'.Auth::user()->foto : url('/perfiles/default.png') }}"
                                                 alt="" class="img-circle dash-profile"/>
                                        </a>


                                    @elseif(Auth::user()->rol == SistemaGestionSimple\Usuario::RECAUDADOR && Auth::user()->pagosUsuario->count() > 0)

                                        <a href="{{ url ('usuarios/'.Auth::user()->id_usuario) }}">
                                            <img src="{{ isset(Auth::user()->foto) ? '/perfiles/'.Auth::user()->foto : url('/perfiles/default.png') }}"
                                                 alt="" class="img-circle dash-profile"/>
                                        </a>
                                    @else
                                        <a href="#">
                                            <img src="{{ isset(Auth::user()->foto) ? '/perfiles/'.Auth::user()->foto : url('/perfiles/default.png') }}"
                                                 alt="" class="img-circle dash-profile"/>
                                        </a>
                                    @endif


                                    <div class="t-p">


                                        @if(Auth::user()->rol != SistemaGestionSimple\Usuario::RECAUDADOR)

                                            <a href="{{ url ('perfil') }}">{{Auth::user()->nombre}}</a>

                                        @elseif(Auth::user()->rol == SistemaGestionSimple\Usuario::RECAUDADOR && Auth::user()->pagosUsuario->count() > 0)

                                            <a href="{{ url ('usuarios/'.Auth::user()->id_usuario) }}">{{Auth::user()->nombre}}</a>

                                        @else
                                            <a href="#">{{Auth::user()->nombre}}</a>

                                        @endif

                                    </div>
                                </div>
                                <div class="section-heading">Panel Administrativo</div>
                                <ul class="nav sidebar-nav ">
                                    <li {{ (Request::is('/') ? 'class=active' : '') }} >
                                        <a href="{{ url ('/admin') }}"><i class="fa fa-home"></i> Inicio</a>
                                    </li>

                                    @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
                                        <li class="sidenav-dropdown {{ (Request::is('*usuarios*') || Request::is('*roles*') ? 'show-subnav' : '') }}">
                                            <a class="subnav-toggle" href="javascript:;"><i class="fa fa-users"></i>
                                                Usuarios del Sistema <i
                                                        class="fa fa-angle-down {{ (Request::is('*usuarios*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>
                                            <ul class="nav sidenav-sub-menu">

                                                <li {{ (Request::is('*usuarios') ? 'class=active' : '') }}><a
                                                            href="{{ url ('usuarios') }}"><i class="fa fa-edit"></i>
                                                        Gestionar Usuarios</a></li>

                                                <li {{ (Request::is('*roles') ? 'class=active' : '') }}><a
                                                            href="{{ url ('roles') }}"><i class="fa fa-unlock-alt"></i>
                                                        Roles & Permisos</a></li>

                                                <li {{ (Request::is('*create') ? 'class=active' : '') }}><a
                                                            href="{{ url ('usuarios/create') }}"><i
                                                                class="fa fa-user"></i>
                                                        Registrar Usuario</a></li>
                                            </ul>
                                        </li>
                                    @endif

                                    @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)

                                    <li class="sidenav-dropdown {{ (Request::is('*cliente*') ||  Request::is('*tipos*') ? 'show-subnav' : '') }}">
                                        <a class="subnav-toggle" href="javascript:;"><i class="fa fa-briefcase"></i>
                                            Clientes <i
                                                    class="fa fa-angle-down {{ (Request::is('*clientes*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>

                                        <ul class="nav sidenav-sub-menu">
                                                <li {{ (Request::is('*clientes') ? 'class=active' : '') }}><a
                                                            href="{{ url ('clientes') }}">
                                                        <i class="fa fa-list-alt"></i>Listado Clientes</a></li>

                                                <li {{ (Request::is('*clientes/tipos') || Request::is('*tipos/create*') ? 'class=active' : '') }}>
                                                    <a
                                                            href="{{ url ('clientes/tipos') }}"><i
                                                                class="fa fa-map-marker"></i>Tipos Cliente</a>
                                                </li>

                                            <li {{ (Request::is('clientes/create') ? 'class=active' : '') }}><a
                                                        href="{{ url ('clientes/create') }}"><i
                                                            class="fa fa-user-plus"></i>Registrar Cliente</a></li>

                                        </ul>

                                    </li>
                                    @endif


                                    @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
                                        <li class="sidenav-dropdown {{ (Request::is('facturas*') ? 'show-subnav' : '') }}">

                                            <a class="subnav-toggle" href="javascript:;"><i
                                                        class="fa fa-file-text-o"></i>
                                                Facturas <i
                                                        class="fa fa-angle-down {{ (Request::is('*facturas*') ? 'fa-flip-vertical' : '') }} pull-right">

                                                </i></a>

                                            <ul class="nav sidenav-sub-menu">
                                                <li {{ (Request::is('*facturas') ? 'class=active' : '') }}><a
                                                            href="{{ url ('facturas') }}"><i
                                                                class="fa fa-list"></i>Listado Facturas</a></li>

                                                <li {{ (Request::is('*create') ? 'class=active' : '') }}><a
                                                            href="{{ url ('facturas/create') }}"><i
                                                                class="fa fa-file-o"></i> Registrar Facturas</a>
                                                </li>

                                            </ul>
                                        </li>
                                    @endif


                                    <li class="sidenav-dropdown {{ (Request::is('*pagos*') || Request::is('*municipios*')  ? 'show-subnav' : '') }}">
                                        <a class="subnav-toggle" href="javascript:;"><i class="fa fa-money"></i>
                                            Pagos <i
                                                    class="fa fa-angle-down {{ (Request::is('*pagos*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>

                                        <ul class="nav sidenav-sub-menu">
                                            @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
                                                <li {{ (Request::is('*pagos') ? 'class=active' : '') }}><a
                                                            href="{{ url ('pagos') }}"><i
                                                                class="fa fa-pencil-square-o"></i>Ver Pagos</a></li>
                                                <li {{ (Request::is('*usuario') ? 'class=active' : '') }}><a
                                                            href="{{ url ('pagos/usuario') }}"><i
                                                                class="fa fa-user"></i>Pagos
                                                        X Usuario</a></li>
                                                <li {{ (Request::is('*municipio') ? 'class=active' : '') }}><a
                                                            href="{{ url ('pagos/municipio') }}"><i
                                                                class="fa fa-map-marker"></i>Pagos X Municipio</a>
                                                </li>
                                            @endif

                                            <li {{ (Request::is('*create') ? 'class=active' : '') }}><a
                                                        href="{{ url ('pagos/create') }}"><i
                                                            class="fa  fa-file-powerpoint-o"></i> Registrar Pago</a>
                                            </li>
                                        </ul>

                                    </li>


                                    <li {{ (Request::is('*calendario') ? 'class=active' : '') }} ><a
                                                href="{{ url ('calendario') }}"><i class="fa fa-calendar"></i>
                                            Calendario <span class="label label-warning">En desarrollo</span></a>

                                    <li {{ (Request::is('*fallas') ? 'class=active' : '') }} ><a
                                                href="{{ url ('fallas') }}"><i class="fa fa-cogs"></i> Reporte de fallas
                                            <span class="label label-info">Próximamente </span></a>

                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="body-container">
            @if (trim($__env->yieldContent('page_heading')))
                <div class="page-title clearfix">
                    <div class="pull-left">
                        <h1>@yield('page_heading')</h1>
                        <small class="subtitle">@yield ('page_subtitle')</small>
                    </div>
                    <ol class="breadcrumb pull-right">
                        <li class="active">@yield('page_heading')</li>
                        <li><a href="{{ url ('') }}"><i class="fa fa-tachometer"></i></a></li>
                    </ol>
                </div>
        @endif
        <!-- <div class="statswrap">
				@yield ('stats')
                </div> -->
            <div class="conter-wrapper">
                @yield('dashboard-content')
            </div>

            <div id="footer-wrap" class="footer">
                Todos los derechos reservados © {{ date('Y')  }} <a href="http://innovamos.co" target="_new"
                                                                    style="font-weight: bold;font-size:15px;"><span
                            style="color:#333;">Desarrollado por </span><span
                            style="color:#00afe8;"> Innovamos </span></a>
                <span class="pull-right">
					<a href="https://www.facebook.com/simplecomunicaciones/" target="_blank"><i
                                class="fa fa-facebook-square"></i></a>
					<a href="https://plus.google.com/+Simplecomunicaciones" target="_blank">&nbsp;<i
                                class="fa fa-google-plus-square"></i></a>
				</span>
            </div>
        </div>
    </div>

@stop

@section('js')

    @parent

    <script type="text/javascript">

        $(function () {

            // Sidebar Charts

            // Pie Chart
            var chart3 = c3.generate({
                bindto: '#sidebar-piechart',
                data: {

                    // iris data from R
                    columns: [
                        ['1', 36],
                        ['2', 54],
                        ['3', 12],
                    ],
                    type: 'pie',
                    onclick: function (d, i) {
                        console.log("onclick", d, i);
                    },
                    onmouseover: function (d, i) {
                        console.log("onmouseover", d, i);
                    },
                    onmouseout: function (d, i) {
                        console.log("onmouseout", d, i);
                    }
                },
                color: {
                    pattern: ['#06c5ac', '#3faae3', '#ee634c', '#6bbd95', '#f4cc0b', '#9b59b6', '#16a085', '#c0392b']
                },
                pie: {
                    expand: true
                },
                size: {
                    width: 140,
                    height: 140
                },
                tooltip: {
                    show: false
                }

            });

            // Bar Chart
            var chart6 = c3.generate({
                bindto: '#sidebar-barchart',
                data: {
                    columns: [
                        ['data1', 30, 200, 100, 400, 250, 310, 90, 125, 50]
                    ],
                    type: 'bar'
                },
                bar: {
                    width: {
                        ratio: 0.8
                    }
                },
                size: {
                    width: 200,
                    height: 120
                },
                tooltip: {
                    show: false
                },
                color: {
                    pattern: ['#06c5ac', '#3faae3', '#ee634c', '#6bbd95', '#f4cc0b', '#9b59b6', '#16a085', '#c0392b']
                },
                axis: {
                    y: {
                        show: false,
                        color: '#ffffff'
                    }
                }
            });

            // Sidebar Tabs
            $('#navTabs .sidebar-top-nav a').click(function (e) {
                e.preventDefault()
                $(this).tab('show');

                setTimeout(function () {
                    $('.tab-content-scroller').perfectScrollbar('update');
                }, 10);

            });

            $('.subnav-toggle').click(function () {
                $(this).parent('.sidenav-dropdown').toggleClass('show-subnav');
                $(this).find('.fa-angle-down').toggleClass('fa-flip-vertical');

                setTimeout(function () {
                    $('.tab-content-scroller').perfectScrollbar('update');
                }, 500);

            });

            $('.sidenav-toggle').click(function () {
                $('#app-container').toggleClass('push-right');

                setTimeout(function () {
                    $('.tab-content-scroller').perfectScrollbar('update');
                }, 500);

            });

            // Boxed Layout Toggle
            $('#boxed-layout').click(function () {

                $('body').toggleClass('box-section');

                var hasClass = $('body').hasClass('box-section');

                $.get('/api/change-layout?layout=' + (hasClass ? 'boxed' : 'fluid'));

            });

            $('.tab-content-scroller').perfectScrollbar();

            $('.theme-picker').click(function () {
                changeTheme($(this).attr('data-theme'));
            });

        });

        function changeTheme(theme) {

            $('<link>')
                .appendTo('head')
                .attr({type: 'text/css', rel: 'stylesheet'})
                .attr('href', '/css/app-' + theme + '.css');

            $.get('api/change-theme?theme=' + theme);
        }


    </script>

@stop

@section('js_personalizado')
    @if(Auth::user()->rol == \SistemaGestionSimple\Usuario::ADMIN)
        <script src="//js.pusher.com/3.0/pusher.min.js"></script>
        <script>
            var pusher = new Pusher("{{env("PUSHER_KEY")}}");
            var channel = pusher.subscribe('canal_notificaciones');
            channel.bind('NotificacionEvent', function (data) {
                alert(data.text);
            });
        </script>
    @endif
@endsection