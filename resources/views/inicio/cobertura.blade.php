@extends ('plantillas.front')

@section('page_title') Lugares donde estamos presentes @stop

@section('dashboard-content')

    <div class="row">
        <div class="col-md-12">
            @section ('htable_panel_title','Donde Estamos Presentes')
            @section ('htable_panel_body')

                <div class="col-md-5 col-lg-offset-3" >
                    <div id="map"></div>
                </div>

                @endsection
            @include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
        </div>

    </div>

@stop

@section('js_personalizado')

    {!! Html::script('/js/mapdata.js') !!}

    {!! Html::script('/js/countrymap.js') !!}

    {!! Html::script('/js/quitar-marca.js') !!}
@endsection
