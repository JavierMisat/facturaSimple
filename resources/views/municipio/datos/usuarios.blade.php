<div id="recaudadores">
    <table class="table">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
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
                <td>{{$usuario->nombre}}</td>
                <td>{{$usuario->apellido}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->rolUsuario->descripcion}}</td>
                <td>{{$usuario->municipioUsuario->descripcion}}</td>
                <td>{{$usuario->departamentoUsuario->descripcion}}</td>
                <td><img class="img-responsive img-thumbnail" style="width:100px;"
                         src="{{ isset($usuario->foto) ? "/perfiles/$usuario->foto" : "/perfiles/default.png" }}"
                         alt="{{$usuario->nombre}}"></td>
                <td>

                        <a href="/usuarios/{{$usuario->id_usuario}}/edit" class="btn btn-lg btn-primary btn-rounded fa fa-pencil-square-o"> Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

