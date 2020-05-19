@extends ('plantillas.dashboard')

@section('page_title')	Profile @stop

@section('dashboard-content')
    <div class="home-wrapper">
        <div class="cover-wrapper">
            <div class="cover-photo" style="background-image: url( '{{ url ('img/fondo-portada.jpg') }} ') ;">
                <div class="name-desg">
                    <h3>
                        {{Auth::user()->nombre_completo}}
                        <small>{{Auth::user()->rolUsuario->descripcion}}</small>
                    </h3>
                </div>
            </div>
            <div class="profile-photo-warp">
                <img class="profile-photo img-responsive img-circle" src="{{ isset(Auth::user()->foto) ? '/perfiles/'.Auth::user()->foto : url('/perfiles/default.png') }}" alt="{{Auth::user()->nombre}}">
            </div>
        </div>
        <div class="foobar"></div>

        <div class="conter-wrapper">
            <div >
                <div class="profile-body row" id="profile-items">

                        @include('alertas.request')
                        {!! Form::model(Auth::user(), ['route' => ['usuarios.update', Auth::user()->id_usuario], 'method' => 'PUT', 'files' => true ]) !!}
                        <div class="row col-sm-offset-3">
                            <div class="col-md-8">
                                @section ('test_panel_title', 'Modificar datos de usuario')
                                @section ('test_panel_body')

                                    @include('usuario.forms.usuario',['usuario' => Auth::user()])

                                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary btn-lg col-md-6 col-sm-offset-3']) !!}
                                @endsection
                                @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'test'))

                            </div>
                        </div>
                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop

@section('js_personalizado')
    {!! Html::script('js/selector-ciudad.js') !!}
@endsection


