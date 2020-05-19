<div id="facturas">


    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Cod. Factura</th>
            <th>Cliente</th>
            <th>Fecha Corte</th>
            <th>Fecha Limite Pago</th>
            <th>Valor Factura</th>
            <th>Estado</th>
            @if(Auth::user()->rol == \SistemaGestionSimple\Usuario::SUPER_ADMIN)
                <th>Operaciones</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
            <tr>

                <td><a href="/facturas/{{ $factura->id_factura }}"> <span class="fa fa-file-text"></span>&nbsp;&nbsp;  #{{$factura->cod_factura or null}} </a> </td>

                <td><a href="/facturas/{{ $factura->id_factura }}">{{$factura->clienteFactura->nombre_completo}} </a></td>

                <td><a href="/facturas/{{ $factura->id_factura }}">{{$factura->fecha_corte or null}} </a></td>

                <td><a href="/facturas/{{ $factura->id_factura }}">{{$factura->fecha_limite_pago or null}} </a></td>

                <td><a href="/facturas/{{ $factura->id_factura }}"><?php echo  \Clicknow\Money\Money::COP($factura->valor_pago)  ?> </a></td>

                @if($factura->estado == 1)
                    <td><span class="label label-primary">PAGÓ</span></td>
                @else
                    <td><span class="label label-danger">DEBE</span></td>
                @endif


                @if(Auth::user()->rol == \SistemaGestionSimple\Usuario::SUPER_ADMIN)
                    <td>
                        @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Eliminar / Editar', 'rounded'=>true, 'submenu'=> array(
                    'lists' =>array('name' => 'Editar', 'link' => "/facturas/{$factura->id_factura}/edit"),
                              array('name' => 'Eliminar', 'onclick' => 'seleccionEliminar(this)', 'id' => $factura->id_factura, 'data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm', 'link' => '#'),
                              array('name' => 'Ver Detalle', 'link' => "/facturas/{$factura->id_factura}")
                          )))
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>

    <input type="hidden" id="id_factura" value="{{ @$factura->id_factura }}">

    {!! $facturas->render() !!}

    <input type="hidden" id="numFacturas" value="{{$numFacturas or 0}}">

</div>

