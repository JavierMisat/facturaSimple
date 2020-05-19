<div class="row">
    <div class="col-md-12">
        <div class="well wellb">
            <div class="invoice">
                <div class="row invoice-logo">
                    <div class="col-md-6 dashy-left">
                        <a href="/pagos/usuario/"><i class="fa fa fa-angle-double-left fa-3x"></i><span class="text text-muted">&nbsp; {{$usuario->nombre_completo}}</span></a>
                        <span class="label label-warning">TIENE EN TOTAL {{$usuario->pagosUsuario()->count()}} PAGO(S)</span>
                    </div>
                    <div class="col-md-6 dashy-right">
                        <p class="text-dark">
                            Nit. 900457160-7
                            / {{$usuario->created_at->now()->formatLocalized('%a %d %b %Y' )}} <br/>
                            <small class="text-light">Comunicate vive y disfruta de una manera Simple.</small>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <h4>Datos de Recaudador:</h4>

                        <div class="well">
                            <div class="row">

                                <div class="col-xs-5 col-md-4">
                                    <figure>
                                        <img class="img-responsive img-thumbnail" style="width: 150px;"
                                             src="{{ isset($usuario->foto) ? "/perfiles/{$usuario->foto}" : "/perfiles/default.png" }}"
                                             alt="{{$usuario->nombre_completo}}">
                                    </figure>
                                </div>
                                <div class="clearfix visible-xs-block"></div>

                                <div class="col-md-6">
                                    <address>

                                        <strong class="text-dark"><i class="fa fa-user">&nbsp;&nbsp;{{$usuario->nombre_completo}}</i></strong>
                                        <br>

                                        @if($usuario->telefono != null)
                                            <span class="fa fa-phone">
                                                <a href="tel:{{$usuario->telefono}}  ">{{$usuario->telefono}}</a></span>
                                            <br>
                                        @endif

                                        <span class="fa fa-inbox"> <a
                                                    href="mailto:{{$usuario->email}}">{{$usuario->email}}</a></span>
                                        <br>

                                        <a href="/municipios/{{$usuario->municipioUsuario->id_municipio}}"> <span class="fa fa-map-marker"> {{$usuario->municipioUsuario->descripcion}}
                                                - {{$usuario->departamentoUsuario->descripcion}}</span></a>
                                        <br>

                                        <span class="fa fa-user"> <strong
                                                    class="text-dark">Dado de alta el:</strong></span>
                                        {{$usuario->created_at->formatLocalized('%a %d %b %Y' )}}
                                        <br>

                                        <span class="fa fa-file-text"> <strong
                                                    class="text-dark">Pagos registrados :</strong></span>
                                        <span class="badge warningb">{{$usuario->pagosUsuario->count()}}</span>
                                        <br>

                                        <span class="fa fa-calendar-o"> <strong class="text-dark">Ultimo pago registrado :</strong></span>
                                        <a href="/pagos/{{$usuario->pagosUsuario->last()->id_pago}}">#{{$usuario->pagosUsuario->last()->cod_factura}}</a>
                                        <br>

                                    </address>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6"></div>

                    <div class="col-md-4 pull-right payment-detals-wrap">
                        <h4>Detalles de último Pago:</h4>
                        <ul class="list-unstyled invoice-details padding-bottom-30 padding-top-10 text-dark">
                            <li>
                                <strong>Código Pago:</strong>
                                #{{$usuario->pagosUsuario->last()->cod_factura}}
                            </li>
                            <li>
                                <strong>Registrada el:</strong> <span class="label label-info">{{$usuario->pagosUsuario->last()->created_at->formatLocalized('%a %d %b %Y')}}
                                    a las {{$usuario->pagosUsuario->last()->created_at->format('h:i:s A')}}</span>
                            </li>

                            @if($usuario->pagosUsuario->last()->updated_at->ne($usuario->pagosUsuario->last()->created_at))
                                <li>
                                    <strong>Actualizada el:</strong> <span class="label label-primary">{{$usuario->pagosUsuario->last()->created_at->formatLocalized('%a %d %b %Y')}}
                                        a las {{$usuario->pagosUsuario->last()->updated_at->format('h:i:s A')}}</span>
                                </li>
                            @endif
                            <li>
                                <strong>Comentarios:</strong>
                                <span class="fa fa-comment-o"> {{$usuario->pagosUsuario->last()->comentarios}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr/>

                    @include('pago.modal')
                    @include('alertas.exito')
                    <div class="row">
                        <div class="col-md-12">
                            @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'pago'))
                            @section ('htable_panel_title','Pago'.$usuario->nombre_completo)
                            @section ('htable_panel_body')
                                @include('usuario.datos.pagos', array('class'=>'table-hover', 'pagos' => $usuario->pagosUsuario()->OrderBy('created_at', 'DESC')->paginate(5)))
                            @endsection
                            @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
                        </div>
                    </div>

                @section('js_personalizado')
                    {!! Html::script('js/crud/resumen_usuario.js') !!}
                @endsection

                <hr/>
                <div class="row">
                    <div class="col-sm-12 invoice-block">
                        <a href="/usuarios/{{ $usuario->id_usuario }}/edit/" class="btn btn-rounded btn-primary btn-o hidden-print pull-right">
                            Editar Usuario <i class="fa fa-pencil-square-o"></i>
                        </a> &nbsp;&nbsp;&nbsp;
                        <a onclick="javascript:window.print();"
                           class="btn btn-o btn-bordered btn-primary hidden-print pull-right">
                            Imprimir Rendimiento De Usuario <i class="fa fa-print"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>