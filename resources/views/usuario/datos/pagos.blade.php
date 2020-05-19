<div id="pagos">
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Cod. Pago</th>
            <th>Comentarios</th>
            <th>Fecha Pago</th>
            <th>Hora</th>
            <th>Municipio</th>
           @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
            <th>Operaciones</th>
           @endif
        </tr>
        </thead>
        <tbody>
        @foreach($pagos as $pago)

            <tr>
                <td>
                 
                 @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
                	<a href="/pagos/{{$pago->id_pago}}"><span class="fa fa-file-text"></span>&nbsp;&nbsp;#{{$pago->cod_factura}}</a>

		@else

                	<a href="/pagos/{{$pago->id_pago}}"><span class="fa fa-file-text"></span>&nbsp;&nbsp;#{{$pago->cod_factura}}</a>


                @endif
                
                </td>
                
                @if(strlen($pago->comentarios) > $pago::LIMITE_COMENTARIO)
                    <td>{{substr($pago->comentarios,0, $pago::LIMITE_COMENTARIO)}}
                        <strong>...</strong></td>
                @else
                    <td>{{$pago->comentarios}} </td>
                @endif
                
                
                <td>{{$pago->created_at->formatLocalized('%a %d %b %Y')}}</td>
                <td>{{$pago->created_at->format('h:i:s A')}}</td>

                <td>
                
	                @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
	                    <a href="/municipios/{{$pago->municipioPago->id_municipio}}">
	                        <span class="fa fa-map-marker"></span>&nbsp;&nbsp;{{$pago->municipioPago->descripcion}}
	                        @include('widgets.badge', array('class'=>'warningb', 'value'=> $pago->municipioPago->pagosMunicipio->count()))
	                    </a>
	                
	                @else
	                        <span class="fa fa-map-marker"></span>&nbsp;&nbsp;{{$pago->municipioPago->descripcion}}
	                        @include('widgets.badge', array('class'=>'warningb', 'value'=> $pago->municipioPago->pagosMunicipio->count()))
	                    
	                @endif
                    
                </td>
                @if(Auth::user()->rol != \SistemaGestionSimple\Usuario::RECAUDADOR)
	                <td>
	                    @include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Eliminar / Editar', 'rounded'=>true, 'submenu'=> array(
	                'lists' =>array('name' => 'Editar', 'link' => "/pagos/{$pago->id_pago}/edit"),
				              array('name' => 'Eliminar', 'onclick' => 'seleccionEliminar(this)', 'id' => $pago->id_pago, 'data-toggle' => 'modal', 'data-target' => '.bs-example-modal-sm', 'link' => '#'),
				              array('name' => 'Ver Detalle', 'link' => "/pagos/{$pago->id_pago}")
				          )))
	                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
    <input type="hidden" id="id_usuario" value="{{$pago->usuarioPago->id_usuario}}">
    {!!$pagos->render()!!}
</div>

