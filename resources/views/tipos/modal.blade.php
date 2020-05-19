<div class="modal fade bs-example-modal-sm" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Eliminar Tipo de Usuario</h4>
            </div>
            <div class="modal-body">
                   {!! Form::token() !!}
                ¿ Deseas elminar este "Tipo de Usuario" ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-rounded" id="id_tipo" onclick="eliminar(this)">Eliminar</button>
            </div>
        </div>
    </div>
</div>
