<div class="row">
    <div class="col-md-12">
        <div class="well wellb">
            <div class="invoice">
                <div class="row invoice-logo">
                    <div class="col-md-6 dashy-left">
                        <a href="/"><i class="fa fa-file-text-o fa-2x"></i><span
                                    class="text text-muted">&nbsp; # {{$factura->cod_factura}}</span></a>
                    </div>
                    <div class="col-md-6 dashy-right">
                        <p class="text-dark">
                            Nit. 900457160-7
                            / {{$factura->created_at->now()->formatLocalized('%a %d %b %Y' )}} <br/>
                            <small class="text-light">Comunicate vive y disfruta de una manera Simple.</small>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <h4>Datos del Cliente:</h4>

                        <div class="well">
                            <div class="row">

                                <div class="col-xs-5 col-md-4">
                                    <figure>
                                        <img class="img-responsive img-thumbnail" style="width: 150px;"
                                             src="/perfiles/default.png"
                                             alt="{{$factura->clienteFactura->nombre}}">
                                    </figure>
                                </div>
                                <div class="clearfix visible-xs-block"></div>

                                <div class="col-md-6">
                                    <address>

                                        <strong class="text-dark"><a
                                                    href="/estadocuenta/{{$factura->clienteFactura->id_cliente}}"><i
                                                        class="fa fa-user">&nbsp;&nbsp;{{$factura->clienteFactura->nombre_completo}}</i></a></strong>
                                        <br>

                                        @if($factura->clienteFactura->telefono != null)
                                            <span class="fa fa-phone"> <a
                                                        href="tel:{{$factura->clienteFactura->telefono}}  ">{{$factura->clienteFactura->telefono}}</a></span>
                                            <br>
                                        @endif


                                        <span class="fa fa-map-marker"> {{$factura->clienteFactura->municipioCliente->descripcion}}
                                            - {{$factura->clienteFactura->departamentoCliente->descripcion}}</span>
                                        <br>

                                        <span class="fa fa-user"> <strong
                                                    class="text-dark">Dado de alta el:</strong></span>
                                        {{\Carbon\Carbon::parse($factura->clienteFactura->created_at)->formatLocalized('%a %d %b %Y' )}}
                                        <br>

                                        <span class="fa fa-file-text"> <strong
                                                    class="text-dark">Facturas registradas :</strong></span>
                                        <span class="badge warningb"><a
                                                    href="/clientes/{{$factura->clienteFactura->id_cliente}}"
                                                    style="color: #F3F3F3;">{{$factura->clienteFactura->facturasCliente->count()}}</a></span>
                                        <br>

                                        <span class="fa fa-calendar-o"> <strong class="text-dark">Ultima factura registrada :</strong></span>
                                        <a href="/estadocuenta/detallefactura/{{$factura->clienteFactura->facturasCliente->last()->id_factura}}">#{{$factura->clienteFactura->facturasCliente->last()->cod_factura}}</a>
                                        <br>

                                    </address>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6"></div>

                    <div class="col-md-4 pull-right payment-detals-wrap">
                        <h4>Detalles de Factura:</h4>
                        <ul class="list-unstyled invoice-details padding-bottom-30 padding-top-10 text-dark">
                            <li>
                                <strong>Código Factura:</strong>
                                #{{$factura->cod_factura}}
                            </li>
                            <li>
                                <strong>Registrada el:</strong> <span class="label label-info">{{$factura->created_at->formatLocalized('%a %d %b %Y')}}
                                    a las {{$factura->created_at->format('h:i:s A')}}</span>
                            </li>

                            @if($factura->updated_at->ne($factura->created_at))
                                <li>
                                    <strong>Actualizada el:</strong> <span class="label label-primary">{{$factura->created_at->formatLocalized('%a %d %b %Y')}}
                                        a las {{$factura->updated_at->format('h:i:s A')}}</span>
                                </li>
                            @endif

                            @if($factura->valor_pago)
                                <li>
                                    <strong>Total factura:</strong> <span class="label label-danger" STYLE="font-size: 1em;">{{ \Clicknow\Money\Money::COP($factura->valor_pago) }}</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="col-sm-12 invoice-block">

                        <a onclick="javascript:window.print();"
                           class="btn btn-o btn-lg btn-bordered btn-primary hidden-print pull-right">
                            Imprimir Factura <i class="fa fa-print"></i>
                        </a>

                        <button onclick="location.href='{{ url('estadocuenta/'.$factura->clienteFactura->id_cliente) }}'"
                                class="btn btn-gray btn-lg hidden-print btn-gray pull-left">
                            <i class="fa fa fa-angle-double-left fa-1x"></i> REGRESAR
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>