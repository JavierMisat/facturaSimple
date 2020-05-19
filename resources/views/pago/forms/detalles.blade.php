<div class="row">
    <div class="col-md-12">
        <div class="well wellb">
            <div class="invoice">
                <div class="row invoice-logo">
                    <div class="col-md-6 dashy-left">
                        <a href="/"><i class="fa fa-file-text-o fa-2x"></i><span class="text text-muted">&nbsp; # {{$pago->cod_factura}}</span></a>
                    </div>
                    <div class="col-md-6 dashy-right">
                        <p class="text-dark">
                            Nit. 900457160-7
                            / {{$pago->created_at->now()->formatLocalized('%a %d %b %Y' )}} <br/>
                            <small class="text-light">Comunicate vive y disfruta de una manera Simple.</small>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <h4>Datos de recaudador:</h4>

                        <div class="well">
                            <div class="row">

                                <div class="col-xs-5 col-md-4">
                                    <figure>
                                        <img class="img-responsive img-thumbnail" style="width: 150px;"
                                             src="{{ isset($pago->usuarioPago->foto) ? "/perfiles/{$pago->usuarioPago->foto}" : "/perfiles/default.png" }}"
                                             alt="{{$pago->usuarioPago->nombre}}">
                                    </figure>
                                </div>
                                <div class="clearfix visible-xs-block"></div>

                                <div class="col-md-6">
                                    <address>

                                        <strong class="text-dark"><a href="/usuarios/{{$pago->usuarioPago->id_usuario}}"><i class="fa fa-user">&nbsp;&nbsp;{{$pago->usuarioPago->nombre_completo}}</i></a></strong>
                                        <br>

                                        @if($pago->usuarioPago->telefono != null)
                                            <span class="fa fa-phone"> <a
                                                        href="tel:{{$pago->usuarioPago->telefono}}  ">{{$pago->usuarioPago->telefono}}</a></span>
                                            <br>
                                        @endif

                                        <span class="fa fa-inbox"> <a
                                                    href="mailto:{{$pago->usuarioPago->email}}">{{$pago->usuarioPago->email}}</a></span>
                                        <br>

                                        <a href="/municipios/{{$pago->usuarioPago->municipioUsuario->id_municipio}}"> <span class="fa fa-map-marker"> {{$pago->usuarioPago->municipioUsuario->descripcion}}
                                                - {{$pago->usuarioPago->departamentoUsuario->descripcion}}</span></a>
                                        <br>

                                        <span class="fa fa-user"> <strong
                                                    class="text-dark">Dado de alta el:</strong></span>
                                        {{\Carbon\Carbon::parse($pago->usuarioPago->created_at)->formatLocalized('%a %d %b %Y' )}}
                                        <br>

                                        <span class="fa fa-file-text"> <strong
                                                    class="text-dark">Pagos registradas :</strong></span>
                                        <span class="badge warningb"><a href="/usuarios/{{$pago->usuarioPago->id_usuario}}" style="color: #F3F3F3;">{{$pago->usuarioPago->pagosUsuario->count()}}</a></span>
                                        <br>

                                        <span class="fa fa-calendar-o"> <strong class="text-dark">Ultimo pago registrado :</strong></span>
                                        <a href="/pagos/{{$pago->usuarioPago->pagosUsuario->last()->id_pago}}">#{{$pago->usuarioPago->pagosUsuario->last()->cod_}}</a>
                                        <br>

                                    </address>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6"></div>

                    <div class="col-md-4 pull-right payment-detals-wrap">
                        <h4>Detalles de Pago:</h4>
                        <ul class="list-unstyled invoice-details padding-bottom-30 padding-top-10 text-dark">
                            <li>
                                <strong>Código Pago:</strong>
                                #{{$pago->cod_factura}}
                            </li>
                            <li>
                                <strong>Registrada el:</strong> <span class="label label-info">{{$pago->created_at->formatLocalized('%a %d %b %Y')}}
                                    a las {{$pago->created_at->format('h:i:s A')}}</span>
                            </li>

                            @if($pago->updated_at->ne($pago->created_at))
                                <li>
                                    <strong>Actualizada el:</strong> <span class="label label-primary">{{$pago->created_at->formatLocalized('%a %d %b %Y')}}
                                        a las {{$pago->updated_at->format('h:i:s A')}}</span>
                                </li>
                            @endif
                            <li>
                                <strong>Comentarios:</strong>
                                <span class="fa fa-comment-o"> {{$pago->comentarios}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-sm-12 invoice-block">
                        <a href="/pagos/{{ $pago->id_pago }}/edit/" class="btn btn-rounded btn-primary btn-o hidden-print pull-right">
                            Editar Pago <i class="fa fa-pencil-square-o"></i>
                        </a> &nbsp;&nbsp;&nbsp;
                        <a onclick="javascript:window.print();"
                           class="btn btn-o btn-bordered btn-primary hidden-print pull-right">
                            Imprimir Pago <i class="fa fa-print"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>