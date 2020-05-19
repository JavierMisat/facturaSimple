<?php

namespace SistemaGestionSimple;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['descripcion'];
    protected $primaryKey = 'id_departamento';

    public function usuariosDepartamento()
    {
        return $this->hasMany(Usuario::class, 'id_departamento');
    }

    public function clientesDepartamento()
    {
        return $this->hasMany(Cliente::class, 'id_departamento');
    }

    public function municipiosDepartamento()
    {
        return $this->hasMany(Municipio::class, 'id_departamento');
    }

}
