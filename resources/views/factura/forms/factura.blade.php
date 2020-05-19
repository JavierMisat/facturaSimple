@if($cliente != null)

    <div class="form-group">
        {!! Form::label('nombre_cliente', 'Nombre Cliente') !!}
        {!! Form::text('nombre_cliente',  $cliente->nombre_completo, ['class' => 'form-control', 'readonly' => 'on']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('documento', '# Documento Cliente') !!}
        {!! Form::text('documento', $cliente->documento, ['class' => 'form-control', 'readonly' => 'on']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono', 'Teléfono Cliente') !!}
        {!! Form::text('telefono', $cliente->telefono, ['class' => 'form-control', 'readonly' => 'on']) !!}
    </div>

    {!! Form::hidden('cliente', $cliente->id_cliente) !!}
@else

    <div class="form-group">
        {!! Form::label('nombre_cliente', 'Cliente') !!}

        <div class="input-group">
            <input type="text" autocomplete="off" name="clienteBuscar" id="clienteBuscar"
                   placeholder="Nombre del Cliente" class="form-control typeahead" value="{{ old('clienteBuscar') }}">
            <span class="input-group-btn"><button class="btn btn-default disabled" type="button"><li
                            class="fa fa-search"></li></button></span>
        </div>

    </div>

    <div class="form-group">
        {!! Form::label('documento', '# Documento Cliente') !!}
        {!! Form::text('documento', null, ['class' => 'form-control', 'placeholder' => 'Selecciona un cliente.',  'readonly' => 'on', 'id' => 'documento']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telefono', 'Teléfono Cliente') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Selecciona un cliente.', 'readonly' => 'on', 'id' => 'telefono']) !!}
    </div>

    {!! Form::hidden('cliente', null, ['id' => 'cliente', 'value' => '']) !!}
@endif


<hr>

<div class="form-group">
    {!! Form::label('cod_factura', 'Código Factura') !!}

    @if($cliente != null)
        {!! Form::text('cod_factura',null, ['class' => 'form-control', 'placeholder' => 'Ingresa el código de la factura..', 'autocomplete' => 'off', 'autofocus' => 'on', 'value' => old('clienteBuscar') ]) !!}
    @else
        {!! Form::text('cod_factura',null, ['class' => 'form-control', 'placeholder' => 'Ingresa el código de la factura..', 'autocomplete' => 'off']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('fecha_corte', 'Fecha de Corte') !!}
    {!! Form::date('fecha_corte',null, ['class' => 'form-control', 'placeholder' => 'Ingresa la fecha de corte del servicio.']) !!}
</div>

<div class="form-group">
    {!! Form::label('fecha_limite_pago', 'Fecha Limite Pago') !!}
    {!! Form::date('fecha_limite_pago',null, ['class' => 'form-control', 'placeholder' => 'Ingresa la fecha limite de pago.']) !!}
</div>


<div class="form-group">
    {!! Form::label('estado', 'Estado factura') !!}
    {!! Form::select('estado', (['' => 'Selecciona el estado de la factura'] + array(0 => 'DEBE', 1 => 'PAGÓ')),null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('valor_pago', 'Valor A pagar') !!}
    {!! Form::text('valor_pago', null , ['class' => 'form-control', 'autocomplete' => 'off', 'value' =>  old('clienteBuscar')  ]) !!}
</div>

<hr>