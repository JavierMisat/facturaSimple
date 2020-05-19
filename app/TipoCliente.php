<?php

namespace SistemaGestionSimple;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $table = 'tipo_clientes';
    protected $primaryKey = 'id_tipo';
    protected $fillable = ['descripcion'];

    public function clientesTipoCliente()
    {
        return $this->hasMany(Cliente::class, 'tipo_cliente');
    }
}
