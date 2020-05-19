<div id="roles">
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Id Rol</th>
            <th>Descripción</th>
            <th>Usuarios con el rol</th>
            @if(Auth::user()->rol == SistemaGestionSimple\Usuario::SUPER_ADMIN)
                <th>Operaciones</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($roles as $rol)

            <tr>
                <td>{{$rol->id_rol}}</td>
                <td>{{$rol->descripcion}}</td>
                <td><span class="badge dangerb"><strong>{{$rol->usuariosRol()->count()}}</strong></span></td>


                @if(Auth::user()->rol == SistemaGestionSimple\Usuario::SUPER_ADMIN)
                    <td><a href="/roles/{{$rol->id_rol}}/edit"
                           class="btn btn-lg btn-primary btn-rounded fa fa-pencil-square-o"> Editar</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

