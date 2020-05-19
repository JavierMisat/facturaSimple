 <div class="panel panel-{{ isset($class) ? $class : 'default' }}">
	@if( isset($header))  
	<div class="panel-heading">
		<h3 class="panel-title">@yield ($as . '_panel_title')
			@if( isset($controls))

			<div class="panel-control pull-right hidden">
				<a href="/clientes/asignarfactura/{{$cliente->id_cliente or null}}" class="btn btn-danger btn-sm btn-bordered">Agregar Factura <i class="fa fa-plus-circle"></i></a>
				<a class="panelButton"><i class="fa fa-refresh"></i></a>
				<a class="panelButton"><i class="fa fa-minus"></i></a>
				<a class="panelButton"><i class="fa fa-remove"></i></a>
			</div>
			@endif
		</h3>
	</div>
	@endif

	<div class="panel-body">
		@yield ($as . '_panel_body')
	</div>
	
	@if( isset($footer))
		<div class="panel-footer">@yield ($as . '_panel_footer')</div>
	@endif
</div>

