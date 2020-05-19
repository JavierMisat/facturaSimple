<?php

namespace SistemaGestionSimple;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    protected $fillable = ['descripcion'];

    public function usuariosRol()
    {
        return $this->hasMany(Usuario::class, 'rol');
    }
}
