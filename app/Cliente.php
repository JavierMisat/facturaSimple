<?php

namespace SistemaGestionSimple;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use SistemaGestionSimple\Http\Requests\Request;

class Cliente extends Model
{
    use SoftDeletes;

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'correo',
        'telefono',
        'direccion',
        'departamento',
        'municipio',
        'tipo_cliente'
    ];


    public function getNombreCompletoAttribute()
    {
        return ucfirst( strtolower($this->attributes['nombre']) ) . ' ' . ucfirst(strtolower($this->attributes['apellido']));
    }

    public function facturasCliente(){
        return $this->hasMany(Factura::class, 'cliente');
    }

    public function tipoCliente()
    {
        return $this->belongsTo(TipoCliente::class, 'tipo_cliente');
    }

    public function municipioCliente()
    {
        return $this->belongsTo(Municipio::class, 'municipio');
    }

    public function departamentoCliente()
    {
        return $this->belongsTo(Departamento::class, 'departamento');
    }

    public function getNombreAttribute()
    {
        return   ucfirst(strtolower(($this->attributes['nombre'])));
    }

    public function getApellidoAttribute()
    {
        return  ucfirst( strtolower($this->attributes['apellido']) );
    }


    /**
     * Scope a query to only include users of a given type.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeConsultarCliente($query, $documento)
    {
        return $query->where('documento', $documento)->orderBy('id_cliente', 'DESC')->paginate(1);
    }

    /**
     * Scope a query to only include users of a given type.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeConsultaMultipleClientes($query, $busqueda)
    {
        return $query->where(DB::raw('CONCAT(nombre, " ", apellido)'), 'LIKE', "%$busqueda%")
            ->orWhere('correo', 'LIKE', "%$busqueda%")
            ->orWhere('documento', 'LIKE', "%$busqueda%")
            ->orWhere('telefono', 'LIKE', "%$busqueda%")
            ->orWhere('municipio', 'LIKE', "%$busqueda%")
            ->orWhere('tipo_cliente', 'LIKE', "%$busqueda%")
            ->orderBy('id_cliente', 'DESC');
    }

}
