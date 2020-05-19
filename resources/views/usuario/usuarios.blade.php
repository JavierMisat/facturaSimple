<div id="usuarios">
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Rol</th>
            <th>Municipio</th>
            <th>Departamento</th>
            <th>Foto</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>

                <td>
                    @if($usuario->pagosUsuario->count() > 0)

                        <a href="/usuarios/{{$usuario->id_usuario}}"><strong><i
                                        class="fa fa-user"></i>&nbsp;&nbsp;{{$usuario->nombre_completo}}</strong></a>
                    @else
                        <i class="fa fa-user"></i>&nbsp;&nbsp;{{$usuario->nombre_completo}}
                    @endif
                </td>

                <td>
                    @if($usuario->pagosUsuario->count() > 0)

                        <a href="/usuarios/{{$usuario->id_usuario}}"><strong><i
                                        class="fa fa-envelope-o"></i>&nbsp;&nbsp;{{$usuario->email}}</strong></a>
                    @else
                        <i class="fa fa-envelope-o"></i>&nbsp;&nbsp;{{$usuario->email}}
                    @endif
                </td>

                <td>
                    @if($usuario->telefono != null)
                        <a href="tel:{{$usuario->telefono}}"><i class="fa fa-phone-square"></i> {{$usuario->telefono}}
                        </a>
                    @endif
                </td>

                <td>

                    @if($usuario->rolUsuario->id_rol == $usuario::ADMIN)
                        <span class="label label-danger"><strong
                                    class="text-uppercase">{{$usuario->rolUsuario->descripcion}}</strong></span>

                    @elseif($usuario->rolUsuario->id_rol == $usuario::SUPER_ADMIN)
                        <span class="label label-primary"><strong>{{$usuario->rolUsuario->descripcion}}</strong></span>
                    @else
                        <span class="label label-default"><strong>{{$usuario->rolUsuario->descripcion}}</strong></span>
                    @endif

                </td>

                @if($usuario->municipioUsuario->pagosMunicipio->count() > 0)
                    <th>
                        <a href="/municipios/{{$usuario->municipioUsuario->id_municipio}}">
                            <span class="fa fa-map-marker"></span>&nbsp;&nbsp;{{$usuario->municipioUsuario->descripcion}}
                        </a>
                    </th>
                @else
                    <th><span class="fa fa-map-marker"></span>&nbsp;&nbsp;{{$usuario->municipioUsuario->descripcion}}
                    </th>
                @endif

                <td>{{$usuario->departamentoUsuario->descripcion}}</td>


                <td>
                    @if($usuario->pagosUsuario->count() > 0)
                        <a href="/usuarios/{{$usuario->id_usuario}}">
                            <img class="img-responsive img-thumbnail" style="width:100px;"
                                 src="{{ isset($usuario->foto) ? "perfiles/$usuario->foto" : "/perfiles/default.png" }}"
                                 alt="{{$usuario->nombre}}">
                        </a>
                    @else

                        <img class="img-responsive img-thumbnail" style="width:100px;"
                             src="{{ isset($usuario->foto) ? "perfiles/$usuario->foto" : "/perfiles/default.png" }}"
                             alt="{{$usuario->nombre}}">
                    @endif
                </td>


                <td>
                    @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Eliminar / Editar', 'rounded'=>true, 'submenu'=> array(
                'lists' =>array('name' => 'Editar', 'link' => "usuarios/$usuario->id_usuario/edit"),
			              array('name' => 'Eliminar', 'onclick' => 'seleccionEliminar(this)', 'id' => $usuario->id_usuario, 'data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm', 'link' => '#')
			            )))
                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
    {!!$usuarios->render()!!}
</div>

