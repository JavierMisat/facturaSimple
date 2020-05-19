<div id="pagos">
    <table class="table">
        <thead>
        <tr>
            <th>Cod. Pago</th>
            <th>Comentarios</th>
            <th>Fecha de Pago</th>
            <th>Hora</th>
            <th>Recaudador</th>
            <th>Teléfono Re.</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pagos as $pago)

            <tr>
                <td><a href="/pagos/{{$pago->id_pago}}"><span
                                class="fa fa-file-text"></span>&nbsp;&nbsp;#{{$pago->cod_factura}}</a></td>
                @if(strlen($pago->comentarios) > $pago::LIMITE_COMENTARIO)
                    <td>{{substr($pago->comentarios,0, $pago::LIMITE_COMENTARIO)}}
                        <strong>...</strong></td>
                @else
                    <td>{{$pago->comentarios}} </td>
                @endif
                <td>{{$pago->created_at->formatLocalized('%a %d %b %Y' )}}</td>
                <td>{{$pago->created_at->format('h:i:s A')}}</td>
                <td><a href="/usuarios/{{$pago->usuarioPago->id_usuario}}"><i class="fa fa-user">
                            &nbsp;&nbsp;{{$pago->usuarioPago->nombre_completo}}</i></a></td>
                <td>{{$pago->usuarioPago->telefono}}</td>

                <td>

                    @if($pagos->count() < 2)
                        <a href="/pagos/{{$pago->id_pago}}/edit"
                           class="btn btn-lg btn-primary btn-rounded fa fa-pencil-square-o"> Editar</a>
                    @else
                        @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Eliminar / Editar', 'rounded'=>true, 'submenu'=> array(
                              'lists' =>
                              array('name' => 'Editar', 'link' => "/pagos/{$pago->id_pago}/edit"),
                              array('name' => 'Eliminar', 'onclick' => 'seleccionEliminar(this)', 'id' => $pago->id_pago, 'data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm', 'link' => '#'),
                              array('name' => 'Ver Detalle', 'link' => "/pagos/{$pago->id_pago}")
                              )))
                    @endif

                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
    <span class="tabPagos">
        <input type="hidden" id="id_municipio" value="{{$pago->municipioPago->id_municipio}}">
        {!! $pagos->render() !!}
    </span>

</div>