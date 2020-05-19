<?php

namespace SistemaGestionSimple;

use Clicknow\Money\Money;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use SistemaGestionSimple\Cliente;

class Factura extends Model
{
    use SoftDeletes;

    protected $table = 'facturas';
    protected $primaryKey = 'id_factura';
    protected $fillable = [
        'cod_factura',
        'cliente',
        'usuario',
        'fecha_corte',
        'fecha_limite_pago',
        'fecha_pago',
        'valor_pago',
        'estado',
    ];


    public function clienteFactura()
    {
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    public function setValorPagoAttribute($numero)
    {
        $numero = str_replace(',', '', $numero);
        $this->attributes['valor_pago'] = floatval($numero);

    }

    public function scopeConsultaMultipleFacturas($query, $busqueda)
    {

        return $query->where('cod_factura', 'LIKE', "%$busqueda%")
            ->orWhere('fecha_corte', 'LIKE', "% $busqueda%")
            ->orWhere('fecha_limite_pago', 'LIKE', "%$busqueda%")
            ->orWhere('fecha_pago', 'LIKE', "%$busqueda%")
            ->orWhere('valor_pago', 'LIKE', "%$busqueda%")
            ->orWhere('estado', 'LIKE', "%$busqueda%")
            ->orderBy('id_factura', 'DESC');

    }

}
