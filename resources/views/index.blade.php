@extends('plantillas.dashboard')

@section('page_title')
    Panel de administración
@stop


@section('dashboard-content')

    <div class="container-fluid home-page">
        <div class="row">
            <div class="col-md-6 calendar-col">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Hola, {{Auth::user()->nombre}}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4 calendar-wrapper">
                                <div class="today">
                                    <h2 class="date"></h2> <span class="month"></span>
                                </div>
                            </div>
                            <div class="col-md-8 calendar-widget">
                                <div id="calendar2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                @section ('panel5_panel_title', 'Registro de pagos Simple Comunicaciones')
                @section ('panel5_panel_body')
                    <img class="img-responsive img-thumbnail pull-right" style="margin-left: 20px;"
                         src="{{ url ('img/internet-pacho-cundinamarca-@x2.png') }}"
                         alt="Simple Comunicaciones S.A.S logotipo">
                    <blockquote>
                        <p class="text-justify tex">Si tiene dudas en el manejo o a encontrado un error en el sistema
                            por favor háganoslo saber a través de la línea celular <a href="tel:3102559239">(310)
                                255-9239</a> o del correo : soporte@simplecomunicaciones.com </p>
                        <small><cite title="Source Title">Comunicate vive y disfruta de una manera Simple</cite></small>
                    </blockquote>
                @endsection
                @include('widgets.panel', array('controls'=>true, 'class'=>'primary', 'header'=>true, 'as'=>'panel5'))
            </div>
        </div>

        @if(Auth::user()->rol != SistemaGestionSimple\Usuario::RECAUDADOR)


            <div>

                <div class="row">
                    <div class="col-md-4">
                        @include('widgets.stat', array('icon'=> 'money', 'header'=> 'N° Total de pagos ingresados', 'value'=>  isset($pagos->last()->cod_factura) ? $pagos->count() : 'No hay pagos aún.' , 'link'=> isset($pagos->last()->cod_factura) ? '/pagos/': '', 'color'=>'info'))
                    </div>

                    <div class="col-md-4">
                        @include('widgets.stat', array('icon'=> 'file-text-o', 'header'=> 'N° Facturas pendientes de pago.', 'value'=>  \SistemaGestionSimple\Factura::where('estado', 0)->count() > 0 ? \SistemaGestionSimple\Factura::where('estado', 0)->count() : 'No hay facturas pendientes' , 'link'=> isset($pagos->last()->cod_factura) ? '/facturas/' : '', 'color'=>'danger'))
                    </div>

                    <div class="col-md-4">
                        @include('widgets.stat', array('icon'=> 'user-times', 'header'=> 'N° Clientes con pagos pendientes.', 'value'=>  \SistemaGestionSimple\Factura::where('estado', 0)->distinct('cliente')->groupBy('cliente')->count('cliente') > 0 ? \SistemaGestionSimple\Factura::where('estado', 0)->distinct('cliente')->count('cliente')  : 'No hay facturas pendientes' , 'link'=> isset($pagos->last()->cod_factura) ? '/clientes/' : '', 'color'=>'danger'))
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        @include('widgets.stat', array('icon'=> 'users', 'header'=> 'Recaudadores registrados', 'value'=>  $usuarios->where('rol',2)->count(), 'link'=>'/usuarios/', 'color'=>'warning'))
                    </div>

                    <div class="col-md-4">
                        @include('widgets.stat', array('icon'=> 'user-plus', 'header'=> 'Clientes Registrados', 'value'=>  \SistemaGestionSimple\Cliente::all()->count(), 'link'=>'/clientes/', 'color'=>'success'))
                    </div>
                </div>

            </div>


        @elseif(Auth::user()->rol == SistemaGestionSimple\Usuario::RECAUDADOR && Auth::user()->pagosUsuario->count() > 0)
            <div>
                <div class="row">
                    <div class="col-md-6">
                        @include('widgets.stat', array('icon'=> 'file-text', 'header'=> 'Acceso rápido a registro de pagos.', 'value'=>  'Pago', 'link' => '/pagos/create/' , 'color'=>'info'))
                    </div>

                    <div class="col-md-6">
                        @include('widgets.stat', array('icon'=> 'user', 'header'=> 'Ver mi rendimiento.', 'value'=>  'Ver tus pagos', 'link' => '/usuarios/'.Auth::user()->id_usuario , 'color'=>'warning'))

                    </div>
                </div>
                @else
                    <div>
                        <div class="row">
                            <div class="col-md-12">
                                @include('widgets.stat', array('icon'=> 'file-text', 'header'=> 'Acceso rápido a registro de pagos.', 'value'=>  'Registrar Pago', 'link' => '/pagos/create/' , 'color'=>'info'))
                            </div>
                        </div>

                        @endif


                    </div>

                    @stop

                @section('js')

                    @parent

                    <script>

                        $(function () {

                            // Activate Calendar

                            $('#calendar2').fullCalendar({});


                            // Set the date
                            $('.today .date').text((new Date).getDate());

                            var months = [
                                "Enero",
                                "Febrero",
                                "Marzo",
                                "Abril",
                                "Mayo",
                                "Junio",
                                "Julio",
                                "Agosto",
                                "Septiembre",
                                "Octubre",
                                "Noviembre",
                                "Diciembre"
                            ];

                            $('.today .month').text(months[(new Date).getMonth()]);

                        });
                    </script>


@endsection