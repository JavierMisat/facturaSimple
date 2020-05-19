@extends('layouts.plain')

@section('body')
    <div id="app-container">
        <nav class="navbar navbar-inverse navbar-fixed-top striped-bg" id="top-navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="sidenav-toggle" href="#"><span class="brandbar"><i class="fa fa-bars hidd"></i></a></span>
                    <a class="navbar-brand" href="{{ url ('/') }}"><i class="fa fa-signal"></i>&nbsp;Sistema de Gestión Simple</a>
                    <div class="solution">By Innovamos</div>
                </div>
                <div class="right-admin">
                    <ul>
                        <li class="dropdown hidd">
                            <a href="#" class="dropdown-toggle admin-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <img class="img-circle admin-img" src="{{ url ('img/profile1.jpg') }}" alt="">
                            </a>
                            <ul class="dropdown-menu admin" role="menu">
                                <li role="presentation" class="dropdown-header"> {{Auth::user()->nombre}}</li>
                                <li><a href="{{ url ('profile') }}"><i class="fa fa-info"></i> Perfil</a></li>
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
                            <a href="#" class="dropdown-toggle notoggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <span class="notification"><i class="fa fa-bell-o"></i></span>
                                <b class="badge nobadge">5</b>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg ddown" role="menu">
                                <li role="presentation" class="dropdown-header">Notification</li>
                                <li>
                                    <a href="#" class="notification-wrap">
                                        <div class="notification-media">
			            			<span class="fa-stack fa-lg">
								  		<i class="fa fa-circle fa-stack-2x text-warning"></i>
								  		<i class="fa fa-user fa-stack-1x fa-inverse"></i>
									</span>
                                            <div><span class="label label-danger">Urgent</span></div>
                                        </div>
                                        <div class="notification-info">
                                            <div class="time-info text-muted pull-right">
                                                <small><i class="fa fa-comments"></i> 2 hours ago</small>
                                            </div>
                                            <h5>Heading </h5>
                                            <p>Hey Anna! Sorry for delayed response. I've just finished reading the mail
                                                you sent couple of...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" class="notification-wrap">
                                        <div class="pull-left notification-media">
			            			<span class="fa-stack fa-lg">
								  		<i class="fa fa-circle fa-stack-2x text-primary"></i>
								  		<i class="fa fa-user fa-stack-1x fa-inverse"></i>
									</span>
                                            <div><span class="label label-info">New</span></div>
                                        </div>
                                        <div class="notification-info">
                                            <div class="time-info text-muted pull-right">
                                                <small><i class="fa fa-comments"></i> 23rd Dec 2014</small>
                                            </div>
                                            <h5>Heading </h5>
                                            <p>Hey Anna! Sorry for delayed response. I've just finished reading the mail
                                                you sent couple of...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle admin-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <img class="img-circle admin-img" src="{{ url ('img/profile1.jpg') }}" alt="">&nbsp;&nbsp;&nbsp;<span
                                        class="add">
							@if(Auth::user()->rol == 1)
                                        Administrador
                                    @else
                                        Recaudador
                                    @endif
                                    <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu admin" role="menu">
                                <li role="presentation" class="dropdown-header">{{Auth::user()->nombre}}</li>
                                <li><a href="{{ url ('profile') }}"><i class="fa fa-info"></i> Perfil</a></li>
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
                        <li role="presentation" class="active"><a href="#menu"><i class="fa fa-bars"></i></a></li>
                        <li role="presentation"><a href="#charts"><i class="fa fa-line-chart"></i></a></li>
                        <li role="presentation"><a href="#notification"><i class="fa fa-bell-o"></i></a></li>
                    </ul>
                    <div class="">
                        <div class="tab-content-scroller tab-content sidebar-section-wrap">
                            <div role="tabpanel" class="tab-pane active" id="menu">
                                <div class="photo-container text-center">
                                    <a href="{{ url ('profile') }}">
                                        <img src="{{ url ('img/profile1.jpg') }}" alt=""
                                             class="img-circle dash-profile"/>
                                    </a>
                                    <div class="t-p">
                                        <a href="{{ url ('profile') }}">{{Auth::user()->nombre}}</a>
                                    </div>
                                </div>
                                <div class="section-heading">Panel Administrativo</div>
                                <ul class="nav sidebar-nav ">
                                    <li {{ (Request::is('/') ? 'class=active' : '') }} ><a href="{{ url ('') }}"><i
                                                    class="fa fa-home"></i> Inicio</a>
                                    </li>
                                    <li class="sidenav-dropdown {{ (Request::is('*ui-element/*') ? 'show-subnav' : '') }}">
                                        <a class="subnav-toggle" href="javascript:;"><i class="fa fa-toggle-off"></i> UI
                                            Elements <i
                                                    class="fa fa-angle-down {{ (Request::is('*ui-element/*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>
                                        <ul class="nav sidenav-sub-menu">
                                            <li {{ (Request::is('*buttons') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/buttons') }}"><i
                                                            class="fa fa-circle-o"></i> Button</a></li>
                                            <li {{ (Request::is('*dropdown') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/dropdown') }}"><i
                                                            class="fa fa-arrows-v"></i> Dropdown</a></li>
                                            <li {{ (Request::is('*labels') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/other-elements') }}"><i
                                                            class="fa fa-flag-o"></i> Other Elements</a></li>
                                            <li {{ (Request::is('*breadcrumbs') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/breadcrumbs') }}"><i
                                                            class="fa fa-exchange"></i> Breadcrumbs & Pagination</a>
                                            </li>
                                            <li {{ (Request::is('*progressbars') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/progressbars') }}"><i
                                                            class="fa fa-angle-double-right"></i> Progressbars</a></li>
                                            <li {{ (Request::is('*alerts') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/alerts') }}"><i
                                                            class="fa fa-warning"></i> Alerts</a></li>
                                            <li {{ (Request::is('*modal') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/modal') }}"><i
                                                            class="fa fa-square-o"></i> Modal</a></li>
                                            <li {{ (Request::is('*collapse') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/collapse') }}"><i
                                                            class="fa fa-align-justify"></i> Collapse</a></li>
                                            <li {{ (Request::is('*typography') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/typography') }}"><i
                                                            class="fa fa-pencil"></i> Typography</a></li>
                                            <li {{ (Request::is('*icons') ? 'class=active' : '') }}><a
                                                        href="{{ url ('ui-element/icons') }}"><i
                                                            class="fa fa-cc-visa"></i> Icons</a></li>
                                        </ul>
                                    </li>
                                    <li {{ (Request::is('*panel') ? 'class=active' : '') }}><a
                                                href="{{ url ('panel') }}"><i class="fa fa-bookmark-o"></i> Panel</a>
                                    </li>
                                    <li {{ (Request::is('*table') ? 'class=active' : '') }}><a
                                                href="{{ url ('table') }}"><i class="fa fa-table"></i> Table</a></li>
                                    <li {{ (Request::is('*grid') ? 'class=active' : '') }}><a href="{{ url ('grid') }}"><i
                                                    class="fa fa-th-large"></i> Grid</a></li>
                                    <li class="sidenav-dropdown {{ (Request::is('*messages/*') ? 'show-subnav' : '') }}">
                                        <a class="subnav-toggle" href="#"><i class="fa fa-pencil"></i> Mail <i
                                                    class="fa fa-angle-down fa-angle-down {{ (Request::is('*messages/*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>
                                        <ul class="nav sidenav-sub-menu">
                                            <li {{ (Request::is('*inbox') ? 'class=active' : '') }}><a
                                                        href="{{ url ('messages/inbox') }}"><i class="fa fa-inbox"></i>
                                                    Inbox</a></li>
                                            <li {{ (Request::is('*compose') ? 'class=active' : '') }}><a
                                                        href="{{ url ('messages/compose') }}"><i
                                                            class="fa fa-pencil-square-o"></i> Compose</a></li>

                                        </ul>
                                    </li>
                                    <li class="sidenav-dropdown {{ (Request::is('*form/*') ? 'show-subnav' : '') }}">
                                        <a class="subnav-toggle" href="#"><i class="fa fa-file-text-o"></i> Forms <i
                                                    class="fa fa-angle-down fa-angle-down {{ (Request::is('*form/*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>
                                        <ul class="nav sidenav-sub-menu">
                                            <li {{ (Request::is('*elements') ? 'class=active' : '') }}><a
                                                        href="{{ url ('form/elements') }}"><i class="fa fa-edit"></i>
                                                    Elememts</a></li>
                                            <li {{ (Request::is('*components') ? 'class=active' : '') }}><a
                                                        href="{{ url ('form/components') }}"><i
                                                            class="fa fa-keyboard-o"></i> Components</a></li>
                                        </ul>
                                    </li>
                                    <li class="sidenav-dropdown {{ (Request::is('*chart/*') ? 'show-subnav' : '') }}">
                                        <a class="subnav-toggle" href="#"><i class="fa fa-area-chart"></i> Charts <i
                                                    class="fa fa-angle-down fa-angle-down {{ (Request::is('*chart/*') ? 'fa-flip-vertical' : '') }} pull-right"></i></a>
                                        <ul class="nav sidenav-sub-menu">
                                            <li {{ (Request::is('*mcharts') ? 'class=active' : '') }}><a
                                                        href="{{ url ('chart/chartjs') }}"><i
                                                            class="fa fa-line-chart"></i> Chart.js</a></li>
                                            <li {{ (Request::is('*c3charts') ? 'class=active' : '') }}><a
                                                        href="{{ url ('chart/c3charts') }}"><i
                                                            class="fa fa-bar-chart"></i> C3.js</a></li>
                                        </ul>
                                    </li>
                                    <li {{ (Request::is('*invoice') ? 'class=active' : '') }}>
                                        <a href="{{ url ('messages/invoice') }}"><i class="fa fa-newspaper-o"></i>
                                            Invoice</a>
                                    </li>
                                    <li {{ (Request::is('*calendar') ? 'class=active' : '') }} ><a
                                                href="{{ url ('calendar') }}"><i class="fa fa-calendar"></i>
                                            Calendar</a>
                                    </li>
                                    <li><a href="{{ url ('/auth/login') }}"><i class="fa fa-sign-in"></i> Log In</a>
                                    </li>
                                    <li><a href="{{ url ('/auth/register') }}"><i class="fa fa-user-plus"></i> Sign
                                            Up</a>
                                    </li>
                                    <li><a href="{{ url ('404') }}"><i class="fa fa-exclamation-circle"></i> 404
                                            Page</a>
                                    </li>
                                    <li><a href="{{ url ('blank') }}"><i class="fa fa-file-o"></i> Blank Page</a>
                                    </li>
                                    <li><a href="{{ url ('docs') }}"><i class="fa fa-file-o"></i> Docs</a>
                                    </li>
                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="charts">
                                <div class="section-heading">Charts</div>
                                <div class="section-content text-center">
                                    <h4>Today's View</h4>
                                    <div class="chart-container">
                                        <div id="sidebar-piechart"></div>
                                    </div>
                                    <h4>Today's Signups</h4>
                                    <div class="chart-container2">
                                        <div id="sidebar-barchart"></div>
                                    </div>
                                    <hr class="lighter">
                                    <div class="transaction">
                                        <h4 class="eft">Today's Signups</h4>
                                        @include('widgets.progress', array('class'=> '', 'value'=>'67.34%', 'badge'=>true))
                                        @include('widgets.progress', array('class'=> 'success', 'value'=>'87.95%', 'badge'=>true))
                                        @include('widgets.progress', array('class'=> 'warning', 'value'=>'27.64%', 'badge'=>true))
                                        @include('widgets.progress', array('class'=> 'danger', 'value'=>'12', 'badge'=>true))
                                    </div>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane" id="notification">
                                <div class="section-heading">Notifications</div>
                                <div class="notification-info">
                                    <ul class="notif-ul">
                                        <li>
                                            <a href="" class="notification-wrap">
                                                <div class="notification-media">
							            			<span class="fa-stack fa-lg">
												  		<i class="fa fa-circle fa-stack-2x text-warning"></i>
												  		<i class="fa fa-user fa-stack-1x fa-inverse"></i>
													</span>
                                                    <div><span class="label label-danger">Urgent</span></div>
                                                </div>
                                                <div class="notification-info">
                                                    <div class="time-info">
                                                        <small><i class="fa fa-comments"></i> 2 hours ago</small>
                                                    </div>
                                                    <h5>Heading </h5>
                                                    <p>Hey Anna! Sorry for delayed response. I've just finished reading
                                                        the mail you sent couple of...</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li><a href="" class="notification-wrap">
                                                <div class="pull-left notification-media">
						            			<span class="fa-stack fa-lg">
											  		<i class="fa fa-circle fa-stack-2x text-primary"></i>
											  		<i class="fa fa-user fa-stack-1x fa-inverse"></i>
												</span>
                                                    <div><span class="label label-info">New</span></div>
                                                </div>
                                                <div class="notification-info">
                                                    <div class="time-info">
                                                        <small><i class="fa fa-comments"></i> 23rd Dec 2014</small>
                                                    </div>
                                                    <h5>Heading </h5>
                                                    <p>Hey Anna! Sorry for delayed response. I've just finished reading
                                                        the mail you sent couple of...</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
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
                            style="color:#00afe8;"> HelpDevs </span></a>
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

