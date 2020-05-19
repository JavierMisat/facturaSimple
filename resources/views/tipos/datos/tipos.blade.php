<div id="tipos">
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Id Tipo</th>
            <th>Descripción</th>
            <th>Clientes de Este Tipo</th>
            @if(Auth::user()->rol == SistemaGestionSimple\Usuario::SUPER_ADMIN)
                <th>Operaciones</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($tipos as $tipo)

            <tr>
                <td>{{$tipo->id_tipo}}</td>
                <td>{{$tipo->descripcion}}</td>
                <td><span class="badge dangerb"><strong>{{$tipo->clientesTipoCliente()->count()}}</strong></span></td>

                @if(Auth::user()->rol == SistemaGestionSimple\Usuario::SUPER_ADMIN)
                    <td>
                        @if(Auth::user()->rol == SistemaGestionSimple\Usuario::SUPER_ADMIN)

                            @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Eliminar / Editar', 'rounded'=>true, 'submenu'=> array(
                            'lists' =>array('name' => 'Editar', 'link' => "/tipos/{$tipo->id_tipo}/edit"),
                                      array('name' => 'Eliminar', 'onclick' => 'seleccionEliminar(this)', 'id' => $tipo->id_tipo, 'data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm', 'link' => '#'),
                                  )))
                        @endif

                    </td>
                @endif


            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $tipos->render() !!}
</div>

