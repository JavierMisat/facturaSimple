<div id="municipios">
    <table class="table {{ $class }}">
        <thead>
        <tr>
            <th>Departamento</th>
            <th>Municipio</th>
            <th>Total de pagos recaudados</th>
            <th>Ultimo recaudo de municipio</th>
            <th>Fecha último recaudo</th>
            <th>Operaciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($municipios as $municipio)
            <tr>
                <td><span class="label label-default">{{$municipio->departamentoMunicipio->descripcion}}</span></td>

                <td><a href="/municipios/{{$municipio->id_municipio}}"><span class="fa fa-map-marker">&nbsp;&nbsp;{{$municipio->descripcion}}</span></a></td>

                <td><a href="/municipios/{{$municipio->id_municipio}}"><span class="badge violetb">{{$municipio->pagosMunicipio->count()}} Pagos</span></a></td>

                <td><a href="/pagos/{{$municipio->pagosMunicipio->last()->id_pago}}"><span class="fa fa-file-text"></span>&nbsp;&nbsp;#{{$municipio->pagosMunicipio->last()->cod_factura}}</a></td>

                <td>{{$municipio->pagosMunicipio->last()->created_at->formatLocalized('%a %d %b %Y')}} a las {{$municipio->pagosMunicipio->last()->created_at->format('h:i:s A')}}</td>

                <td><a  href="/municipios/{{$municipio->id_municipio}}" class="btn btn-primary  btn-bordered ">Ver Detalle De Pagos</a></td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {!! $municipios->render() !!}
</div>

