<div class="form-group">
    {!! Form::label('cod_factura', 'Cod. factura') !!}
    {!! Form::text('cod_factura',null, ['class' => 'form-control', 'placeholder' => 'Código de la factura']) !!}
</div>

<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios (Opcional)') !!}
    {!! Form::textarea('comentarios',null, ['class' => 'form-control', 'placeholder' => 'Ingresa un comentario']) !!}
</div>

<hr/>