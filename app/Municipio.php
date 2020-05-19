<?php

namespace SistemaGestionSimple;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey = 'id_municipio';
    protected $fillable = ['descripcion'];

    public static function municipios($id_departamento)
    {
        return Municipio::where('id_departamento', '=', $id_departamento)
            ->get();
    }

    public function usuariosMunicipio()
    {
        return $this->hasMany(Usuario::class, 'municipio');
    }

    public function clientesMunicipio()
    {
        return $this->hasMany(Cliente::class, 'municipio');
    }

    public function pagosMunicipio()
    {
        return $this->hasMany(Pago::class, 'municipio');
    }

    public function departamentoMunicipio()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
}

