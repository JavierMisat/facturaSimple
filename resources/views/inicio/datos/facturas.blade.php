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
            </tr>
            </thead>
            <tbody>
            @foreach($facturas as $factura)
                <tr>

                  <td><a href="detallefactura/{{ $factura->id_factura }}"> <span class="fa fa-file-text"></span>&nbsp;&nbsp;  #{{$factura->cod_factura or null}} </a> </td>

                    <td><a href="detallefactura/{{ $factura->id_factura }}">{{$factura->clienteFactura->nombre_completo}} </a></td>

                    <td><a href="detallefactura/{{ $factura->id_factura }}">{{$factura->fecha_corte or null}} </a></td>

                    <td><a href="detallefactura/{{ $factura->id_factura }}">{{$factura->fecha_limite_pago or null}} </a></td>

                    <td><a href="detallefactura/{{ $factura->id_factura }}"><?php echo  \Clicknow\Money\Money::COP($factura->valor_pago)  ?> </a></td>

                    @if($factura->estado == 1)
                        <td><span class="label label-primary">PAGÓ</span></td>
                    @else
                        <td><span class="label label-danger">DEBE</span></td>
                    @endif

                </tr>
            @endforeach
            </tbody>
        </table>

        <input type="hidden" id="id_cliente" value="{{ $factura->cliente}}">

        {!! $facturas->render() !!}

</div>

