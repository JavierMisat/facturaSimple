@extends('layouts.dashboard')

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
                                    <h2 class="date"></h2>  <span class="month"></span>
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
                @section ('panel5_panel_title', 'Registro de facturas Simple Comunicaciones')
                @section ('panel5_panel_body')
                    <blockquote>
                        <p>Si tiene dudas en el manejo o a encontrado un error en el sistema por favor háganoslo saber a través de la línea celular <a href="tel:3102559239">(310) 255-9239</a> o del correo : soporte@simplecomunicaciones.com </p>
                        <small><cite title="Source Title">Comunicate vive y disfruta de una manera Simple</cite> </small>
                    </blockquote>
                @endsection
                @include('widgets.panel', array('controls'=>true, 'class'=>'primary', 'header'=>true, 'as'=>'panel5'))
            </div>
        </div>

        <div>
            <div class="row">
                <div class="col-md-4">
                    @include('widgets.stat', array('icon'=> 'file-text', 'header'=> 'N° total de facturas ingresadas', 'value'=> "$facturas", 'href'=>'#', 'color'=>'info'))
                </div>
                <div class="col-md-4">
                    @include('widgets.stat', array('icon'=> 'users', 'header'=> 'Recaudadores registrados', 'value'=> "$recaudadores", 'href'=>'#', 'color'=>'warning'))
                </div>
                <div class="col-md-4">
                    @include('widgets.stat', array('icon'=> 'calculator', 'header'=> 'pago', 'value'=>  '', 'href'=>'#', 'color'=>'danger'))
                </div>
            </div>
        </div>
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