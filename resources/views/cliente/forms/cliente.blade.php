<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un nombre.']) !!}
</div>

<div class="form-group">
    {!! Form::label('apellido', 'Apellido') !!}
    {!! Form::text('apellido',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un apellido.']) !!}
</div>

<div class="form-group">
    {!! Form::label('correo', 'Correo') !!}
    <div class="input-group mb-10">
        <span class="input-group-addon">@</span>
        {!! Form::email('correo',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un email. (opcional)']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('documento', 'Documento') !!}
    {!! Form::text('documento',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un documento de identidad.']) !!}
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Teléfono') !!}
    {!! Form::tel('telefono',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un teléfono o celular. (opcional)', 'autocomplete' => 'off']) !!}
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion') !!}
    {!! Form::text('direccion',null, ['class' => 'form-control', 'placeholder' => 'Ingresa la dirección.', 'autocomplete' => 'off']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipo_cliente', 'Tipo Cliente') !!}
    {!! Form::select('tipo_cliente',(['' => 'Selecciona un tipo de cliente'] + $tipo_cliente), null, ['class' => 'form-control']) !!}


</div>

<div class="form-group">
    {!! Form::label('departamento', 'Departamento') !!}
    {!! Form::select('departamento', $departamentos, null, ['class' => 'form-control', 'id' => 'departamento']) !!}
</div>

<div class="form-group">
    {!! Form::label('municipio', 'Municipio') !!}
    {!! Form::select('municipio', $municipios, null, ['class' => 'form-control', 'id' => 'municipio']) !!}
</div>


<hr/>