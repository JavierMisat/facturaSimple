<div id="clientes">
    @if($clientes->count() > 0)
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th># Documento</th>
            <th>Teléfono</th>
            <th>Direccion</th>
            <th>Municipio</th>
            <th>Estado Cliente</th>
            <th>Tipo Cliente</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        @foreach($clientes as $cliente)
            <tbody>
            <tr>

                @if($cliente->facturasCliente->count() > 0)

                    <td>
                        <a href="/estadocuenta/{{ $cliente->id_cliente }}"><strong> {{ $cliente->nombre }} </strong></a>
                    </td>

                    <td>
                        <a href="/estadocuenta/{{ $cliente->id_cliente }}"><strong>    {{ $cliente->apellido }} </strong></a>
                    </td>

                    <td>
                        <a href="/estadocuenta/{{ $cliente->id_cliente }}"><strong>  {{ $cliente->documento }} </strong></a>
                    </td>
                @else

                    <td>
                        {{ $cliente->nombre }}
                    </td>

                    <td>
                        {{ $cliente->apellido }}
                    </td>

                    <td>
                        {{ $cliente->documento }}
                    </td>

                @endif
                <td>
                    @if($cliente->telefono != null)
                        <a href="/estadocuenta/{{ $cliente->id_cliente }}"><i
                                    class="fa fa-phone-square"></i> {{ $cliente->telefono }}
                        </a>
                    @endif
                </td>

                <td>
                    <span class="fa fa-location-arrow"></span>&nbsp;&nbsp;{{ $cliente->direccion }}
                </td>

                <td>
                    <span class="fa fa-map-marker"></span>&nbsp;&nbsp;{{ $cliente->municipioCliente->descripcion }}
                </td>


                @if($cliente->facturasCliente()->where('estado', 0)->count() == 1)

                    <td><span class="label label-warning">PAGO PENDIENTE</span></td>

                @elseif($cliente->facturasCliente()->where('estado', 0)->count() > 1)

                    <td><span class="label label-danger">CLIENTE EN MORA</span></td>

                @elseif($cliente->facturasCliente()->where('estado', 1)->count() > 0)

                    <td><span class="label label-success">CLIENTE AL DÍA</span></td>

                @else
                    <td><span class="label label-info">SIN FACTURAS</span></td>

                @endif


                <td>
                    <span class="label label-default"><strong>{{$cliente->tipoCliente->descripcion}}</strong></span>
                </td>

                <td>
                    <a href="/estadocuenta/{{  $cliente->id_cliente }}"
                           class="btn btn-lg btn-primary btn-rounded fa fa-eye  "> VER DETALLE </a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    @else
        <div class="col-md-10  col-lg-offset-1" id="sinResultados">
            <div class="stat panel striped-bg">
                <div class="row">
                    <div class="col-md-2 bg-danger icon-col striped-bg">
                        <i class="fa fa-warning fa-4x"></i>
                    </div>
                    <div class="col-md-9 text-col">
                        <i class="fa fa-warning fa-5x"></i>
                        <h3>No hay clientes con el número de documento ingresado.</h3>
                        <p>Intenta de nuevo o comunicate con nosotros.</p>
                    </div>
                </div>
            </div> </div>
    @endif
</div>

