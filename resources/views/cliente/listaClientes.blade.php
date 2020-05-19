<div id="clientes">
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
        <tbody>
        @foreach($clientes as $cliente)
            <tr>

                @if($cliente->facturasCliente->count() > 0)

                    <td>
                        <a href="/clientes/{{$cliente->id_cliente}}"><strong> {{ $cliente->nombre }} </strong></a>
                    </td>

                    <td>
                        <a href="/clientes/{{$cliente->id_cliente}}"><strong>    {{ $cliente->apellido }} </strong></a>
                    </td>

                    <td>
                        <a href="/clientes/{{$cliente->id_cliente}}"><strong>  {{ $cliente->documento }} </strong></a>
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
                        <a href="tel:{{ $cliente->telefono }}"><i
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
                    @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Eliminar / Editar', 'rounded'=>true, 'submenu'=> array(
                'lists' =>array('name' => 'Editar', 'link' => "clientes/$cliente->id_cliente/edit"),
                          array('name' => 'Eliminar', 'onclick' => 'seleccionEliminar(this)', 'id' => $cliente->id_cliente, 'data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm', 'link' => '#'),
                          array('name' => 'Ver Detalle', 'link' => "/clientes/{$cliente->id_cliente}"),
                          array('name' => 'AGREGAR FACTURA', 'link' => "clientes/asignarfactura/{$cliente->id_cliente}"),

                        )))
                </td>

            </tr>

        @endforeach
        </tbody>
    </table>

    {!! $clientes->render() !!}
    <input type="hidden" id="numClientes" value="{{$numClientes}}">
</div>


