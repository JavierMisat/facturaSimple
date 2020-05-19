<div class="row">
    <div class="col-md-12">
        <div class="well wellb">
            <div class="invoice">
                <div class="row invoice-logo">
                    <div class="col-md-6 dashy-left">
                        <a href="/"><i class="fa fa-map-marker fa-2x"></i><span class="text text-muted">&nbsp;Municipio de {{$municipio->descripcion}} <span class="label label-warning"><strong> {{$municipio->pagosMunicipio->count()}} PAGO(S)</strong></span></span></a>
                    </div>
                    <div class="col-md-6 dashy-right">
                        <p class="text-dark">
                            <strong>Departamento de {{$municipio->departamentoMunicipio->descripcion}}</strong>
                            <br>
                            <small class="text-light">Comunicate vive y disfruta de una manera Simple.</small>
                        </p>
                    </div>
                </div>
                <hr>

                <div class="row col-md-12">
                    <div class=" col-md-12  center-block">
                        @section ('tabs_panel_title', "Pago{$municipio->descripcion}")
                        @section ('tabs_panel_body')
                            <div role="tabpanel">
                                <ul class="nav nav-tabs tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#pagos" aria-controls="home"
                                                                              role="tab" data-toggle="tab"><i
                                                    class="fa fa-file-text"></i>&nbsp;Pagos</a></li>
                                    <li role="presentation"><a href="#recaudadores" aria-controls="profile" role="tab"
                                                               data-toggle="tab"><i class="fa fa-user"></i>&nbsp;Recaudadores</a>
                                    </li>
                                </ul>
                                <div class="tab-content panel-body">

                                    <div role="tabpanel" class="tab-pane active" id="pagos">
                                            @include('municipio.datos.pagos', ['pagos' => $municipio->pagosMunicipio()->OrderBy('created_at', 'DESC')->paginate(5), 'class' => 'primary'])
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="recaudadores">

                                        @include('municipio.datos.usuarios', ['usuarios' => $municipio->usuariosMunicipio])

                                    </div>

                                </div>
                            </div>
                        @endsection
                        @include('widgets.panel', array('class'=>'info', 'controls'=>true, 'header'=>true, 'as'=>'tabs'))
                    </div>
                </div>


                <hr/>

                <div class="row">
                    <div class="col-sm-12 invoice-block">
                        <a href="/pagos/edit/" class="btn btn-rounded btn-primary btn-o hidden-print pull-right">
                            Editar Pago <i class="fa fa-pencil-square-o"></i>
                        </a> &nbsp;&nbsp;&nbsp;
                        <a onclick="javascript:window.print();"
                           class="btn btn-o btn-bordered btn-primary hidden-print pull-right">
                            Imprimir Informe de Municipio <i class="fa fa-print"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>