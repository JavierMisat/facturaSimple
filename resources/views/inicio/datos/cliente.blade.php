<div class="row">
    <div class="col-md-12">
        <div class="well wellb">
            <div class="invoice">
                <div class="row invoice-logo">
                    <div class="col-md-6 dashy-left">
                        <a href="{{ url('/') }}"><i class="fa fa fa-angle-double-left fa-3x"></i></a> <span
                                class="text text-muted">&nbsp; {{$cliente->nombre_completo}}</span>
                        <span class="label label-warning">TIENE EN TOTAL {{$cliente->facturasCliente()->count()}}
                            FACTURA(S)</span>
                    </div>
                    <div class="col-md-6 dashy-right">
                        <p class="text-dark">
                            Nit. 900457160-7
                            / {{$cliente->created_at->now()->formatLocalized('%a %d %b %Y' )}} <br/>
                            <small class="text-light">Comunicate vive y disfruta de una manera Simple.</small>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <h4>Datos del CLIENTE:</h4>

                        <div class="well">
                            <div class="row">

                                <div class="col-xs-5 col-md-4">
                                    <figure>
                                        <img class="img-responsive img-thumbnail" style="width: 150px;"
                                             src="/perfiles/default.png" alt="{{$cliente->nombre_completo}}">
                                    </figure>
                                </div>
                                <div class="clearfix visible-xs-block"></div>

                                <div class="col-md-6">
                                    <address>

                                        <strong class="text-dark"><i
                                                    class="fa fa-user">&nbsp;&nbsp;{{$cliente->nombre_completo}}</i></strong>
                                        <br>

                                        @if($cliente->telefono != null)
                                            <span class="fa fa-phone">
                                                <a href="tel:{{$cliente->telefono}}  ">{{$cliente->telefono}}</a></span>
                                            <br>
                                        @endif

                                        <span class="fa  fa-tags"> <strong>Tipo Cliente:</strong></span>
                                        {{$cliente->tipoCliente->descripcion}}
                                        <br>


                                        <span class="fa fa-user"> <strong
                                                    class="text-dark">Dado de alta el:</strong></span>
                                        {{$cliente->created_at->formatLocalized('%a %d %b %Y' )}}
                                        <br>

                                        <span class="fa fa-map-marker">
                                        {{$cliente->municipioCliente->descripcion}}
                                            - {{$cliente->departamentoCliente->descripcion}} </span>
                                        <br>

                                        <span class="fa fa-user"> <strong
                                                    class="text-dark">Dado de alta el:</strong></span>
                                        {{$cliente->created_at->formatLocalized('%a %d %b %Y' )}}
                                        <br>

                                        <span class="fa fa-file-text"> <strong
                                                    class="text-dark">Facturas registradas :</strong></span>
                                        <span class="badge warningb">{{$cliente->facturasCliente->count()}}</span>
                                        <br>

                                        <span class="fa fa-calendar-o"> <strong class="text-dark">Ultima factura registrada :</strong></span>
                                        #{{$cliente->facturasCliente->last()->cod_factura or null}}
                                        <br>

                                    </address>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6"></div>

                    <div class="col-md-4 pull-right payment-detals-wrap">
                        <h4>Estado de Cuenta:</h4>
                        <ul class="list-unstyled invoice-details padding-bottom-30 padding-top-10 text-dark">

                            @if($cliente->facturasCliente()->where('estado', 0)->count() == 1)
                                <div class="alert alert-warning " role="alert">

                                    <li>
                               <span class="fa fa-share-square-o"> <strong
                                           class="text-dark">ESTADO CLIENTE:</strong></span>
                                        <span class="label label-default fa fa-meh-o fa-3x"
                                              style="font-size: 1em;font-weight: 100;"> PAGO PENDIENTE</span>
                                    </li>
                                    <li>
                               <span class="fa fa-money"> <strong
                                           class="text-dark">Saldo total X pagar :</strong></span>
                                        <span class="label label-default"
                                              style="font-size: 1em;font-weight: 200;">{{ Clicknow\Money\Money::COP(str_replace('.', '', $cliente->facturasCliente->where('estado', 0)->sum('valor_pago')))  }}</span>

                                    </li>

                                </div>

                            @elseif($cliente->facturasCliente()->where('estado', 0)->count() > 1)
                                <div class="alert alert-danger " role="alert">
                                    <li>
                               <span class="fa fa-share-square-o"> <strong
                                           class="text-dark">ESTADO CLIENTE:</strong></span>
                                        <span class="label label-default fa fa-frown-o"
                                              style="font-size: 1em;font-weight: 100;"> CLIENTE EN MORA</span>
                                    </li>

                                    <li>
                               <span class="fa fa-file-text"> <strong
                                           class="text-dark">Facturas X Pagar :</strong></span>
                                        <span class="label label-default "
                                              style="font-size: 1em"> {{$cliente->facturasCliente->where('estado', 0)->count()}}</span>
                                    </li>
                                    <li>
                               <span class="fa fa-file-text"> <strong
                                           class="text-dark">Saldo total X pagar :</strong></span>
                                        <span class="label label-default"
                                              style="font-size: 1em">{{ Clicknow\Money\Money::COP(str_replace('.', '', $cliente->facturasCliente->where('estado', 0)->sum('valor_pago')))  }}</span>

                                    </li>

                                    <li>
                                    <span class="fa fa-file-text"> <strong
                                                class="text-dark">Última factura vencida:</strong></span>
                                        <span class="label label-default"
                                              style="font-size: 1em">#{{$cliente->facturasCliente->where('estado', 0)->last()->cod_factura or null}}</span>
                                    </li>
                                </div>

                            @elseif($cliente->facturasCliente()->where('estado', 1)->count() > 0)

                                <div class="alert alert-success  alert-dismissable " role="alert">
                                    <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong>CLIENTE AL DÍA</strong>
                                </div>

                            @else

                                <div class="alert alert-info  alert-dismissable " role="alert">
                                    <i class="fa fa-warning"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong>CLIENTE SIN FACTURAS ASOCIADAS</strong>
                                </div>
                            @endif

                        </ul>
                    </div>
                </div>
                <hr/>

                @include('factura.modal')
                @include('alertas.exito')

                <div class="row">
                    <div class="col-md-12">

                        @if($cliente->facturasCliente->count() > 0)
                            @include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'Se eliminó la factura del cliente'))
                            @section ('htable_panel_title','Historial de Facturas')
                        @section ('htable_panel_body')
                            @include('inicio.datos.facturas', array('class' =>'table-hover', 'facturas' => $cliente->facturasCliente()->OrderBy('created_at', 'DESC')->paginate(5)))
                        @endsection
                        @include('widgets.panel', array('class'=>'primary', 'controls'=>true, 'header'=>true, 'as'=>'htable'))
                        @else
                            <h2 class="text-center padder"><i class="fa fa- fa-file-archive-oe fa-1x"></i> Aún no
                                tienes facturas registradas. </h2>
                        @endif

                    </div>
                </div>


                @section('js_personalizado')
                    {!! Html::script('js/crud/estado_cuenta.js') !!}
                @endsection

                <hr/>
                <div class="row">
                    <div class="col-sm-12 invoice-block">

                        <a onclick="javascript:window.print();"
                           class="btn btn-o btn-bordered btn-primary hidden-print pull-right">
                            Imprimir Estado de Cliente <i class="fa fa-print"></i>
                        </a>

                            <button onclick="location.href='{{ url('/') }}'"
                               class="btn btn-rounded btn-gray btn-o hidden-print pull-right">
                                <i class="fa fa-arrow-left"></i> Regresar
                            </button> &nbsp;&nbsp;&nbsp;

                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>