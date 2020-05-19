@extends('plantillas.dashboard')

@section('page_title') Calendario Completo @stop
@section('page_subtitle') Muy pronto reporte de rendimiento por días... @stop
@section('page_heading') Calendario de rendimiento @stop


{{-- Define calendar_panel_title section --}}
@section('calendar_panel_title', 'Calendario General')

{{-- Define calendar_panel_body section --}}
@section('calendar_panel_body')
    <div id="calendar1"></div>
@endsection

{{-- Fill dashboard-content --}}
@section('dashboard-content')
    @include('widgets.panel', array(
        'class' => 'primary',
        'controls'=>true,
        'header'=>true,
        'as'=>'calendar'
    ))
@stop

@section('js')

    @parent

    <script type="text/javascript">

        // page is now ready, initialize the calendar...

        $('#calendar1').fullCalendar({
            eventClick: function (calEvent, jsEvent, view) {

                alert('Event: ' + calEvent.title);
                alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                alert('View: ' + view.name);

            }
        });

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
        $('.fc-toolbar h2').text(months[(new Date).getMonth()] + " de " + (new Date).getFullYear());
    </script>

@stop