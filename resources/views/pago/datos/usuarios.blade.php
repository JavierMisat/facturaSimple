<div id="usuarios">
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Municipio</th>
            <th>Recaudos de pagos de usuario</th>
            <th>Último Recaudo</th>
            <th>Departamento</th>
            <th>Foto</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td><a href="/usuarios/{{$usuario->id_usuario}}"><i class="fa fa-user">&nbsp;&nbsp;{{$usuario->nombre_completo}}</i></a></td>
                <td><a href="/usuarios/{{$usuario->id_usuario}}"><i class="fa fa-inbox">&nbsp;&nbsp;{{$usuario->email}}</i></a></td>
                <td>{{$usuario->telefono}}</td>
                <td><a href="/municipios/{{$usuario->municipioUsuario->id_municipio}}"><li class="fa fa-map-marker"></li> {{$usuario->municipioUsuario->descripcion}}</a></td>
                <td><a href="/usuarios/{{$usuario->id_usuario}}"><span class="badge warningb"><strong>{{$usuario->pagosUsuario->count()}} PAGOS</strong></span></a></td>
                <td><a href="/pagos/{{$usuario->pagosUsuario->last()->id_pago}}"><span class="fa fa-file-text-o"></span>&nbsp;&nbsp;#{{$usuario->pagosUsuario->last()->cod_factura}} </a></td>
                <td>{{$usuario->departamentoUsuario->descripcion}}</td>
                <td><a href="/usuarios/{{$usuario->id_usuario}}"><img class="img-responsive img-thumbnail" style="width:100px;"
                         src="{{ isset($usuario->foto) ? "/perfiles/$usuario->foto" : "/perfiles/default.png" }}"
                         alt="{{$usuario->nombre}}"></a></td>

            </tr>
        @endforeach
        </tbody>

    </table>
    {!!$usuarios->render()!!}
</div>

