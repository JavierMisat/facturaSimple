<?php

namespace SistemaGestionSimple;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pago extends Model
{
    use SoftDeletes;

    const LIMITE_COMENTARIO = 30;

    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';

    protected $fillable = ['id_usuario', 'cod_factura', 'comentarios', 'municipio'];

    protected $dates = ['deleted_at'];

    public static function getpagosUsuarios()
    {
        return DB::table('usuarios')
            ->join('pagos', 'usuarios.id_usuario', '=', 'pagos.id_usuario')
            ->join('municipios', 'usuarios.municipio', '=', 'municipios.id_municipio')
            ->join('roles', 'usuarios.rol', '=', 'roles.id_rol')
            ->select('usuarios.*', 'pagos.*', 'pagos.created_at as fecha_pago',
                'municipios.descripcion as municipio', 'roles.descripcion as rol')
            ->orderBy('fecha_pago', 'desc')
            ->paginate(10);
    }

    public function usuarioPago(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function municipioPago()
    {
        return $this->belongsTo(Municipio::class, 'municipio');
    }

}
