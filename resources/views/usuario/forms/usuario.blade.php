<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un nombre.']) !!}
</div>

<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un apellido.']) !!}
</div>


<div class="form-group">
    {!! Form::label('email', 'Correo') !!}
    <div class="input-group mb-10">
        <span class="input-group-addon">@</span>
        {!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un email.']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono') !!}
    {!! Form::tel('telefono',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un teléfono o celular.', 'autocomplete' => 'off']) !!}
</div>

<div class="form-group">
    {!! Form::label('departamento', 'Departamento') !!}
    {!! Form::select('departamento', $departamentos, null, ['class' => 'form-control', 'id' => 'departamento']) !!}
</div>

<div class="form-group">
    {!! Form::label('municipio', 'Municipio') !!}
    {!! Form::select('municipio', $municipios, null, ['class' => 'form-control', 'id' => 'municipio']) !!}
</div>


<div class="form-group">
    {!! Form::label('rol', 'Rol de usuario') !!}
    {!! Form::select('rol',(['' => 'Selecciona un Rol'] + $roles), null, ['class' => 'form-control']) !!}

</div>

<div class="form-group">
    <div class="col-sm-10">
        {!! Form::label('foto',isset($usuario->foto) ? 'Actualizar Foto' : 'Aregar Foto' ) !!}
        {!! Form::file('foto', ['class' => 'form-control']) !!}
    </div>

    <label for="inputEmail3" class="col-sm-2 control-label">
        <figure class="text-center">
            <img class="img-responsive img-thumbnail" style="width: 100px;"
                 src="{{ isset($usuario->foto) ? '/perfiles/'.$usuario->foto : url('/perfiles/default.png') }}"
                 alt="{{ isset($usuario->foto) ? $usuario->nombre : 'Simple Comunicaciones Logo Defecto' }}">
            <figcaption>{{ isset($usuario->foto) ? 'Foto Actual' : 'Foto por defecto'}}</figcaption>

        </figure>

    </label>

</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa una contraseña.']) !!}
</div>
<hr/>