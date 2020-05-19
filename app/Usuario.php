<?php

namespace SistemaGestionSimple;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Storage;

class Usuario extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    const ADMIN = 1;
    const RECAUDADOR = 2;
    const SUPER_ADMIN = 3;
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'foto',
        'telefono',
        'password',
        'departamento',
        'municipio',
        'rol'
    ];

    protected $dates = ['deleted_at'];

    /**s
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($valor)
    {
        if (!empty($valor)) {
            $this->attributes['password'] = bcrypt($valor);
        }
    }

    public function setFotoAttribute($foto)
    {
        $fecha = Carbon::parse(Carbon::now());

        if (!empty($foto)) {

            if (\Storage::exists($this->foto)) {
                \Storage::delete($this->foto);
            }

            $this->attributes['foto'] = $fecha->day . '_' . $fecha->month . '_' . $fecha->year . '_s' . $fecha->second . $foto->getClientOriginalName();
            $nombre = $fecha->day . '_' . $fecha->month . '_' . $fecha->year . '_s' . $fecha->second . $foto->getClientOriginalName();
            \Storage::disk('local')->put($nombre, \File::get($foto));
        }
    }

    public function getNombreCompletoAttribute()
    {
        return $this->attributes['nombre'] . ' ' . $this->attributes['apellido'];
    }


    public function pagosUsuario(){
        return $this->hasMany(Pago::class, 'id_usuario');
    }

    public function rolUsuario()
    {
        return $this->belongsTo(Rol::class, 'rol');
    }

    public function municipioUsuario()
    {
        return $this->belongsTo(Municipio::class, 'municipio');
    }

    public function departamentoUsuario()
    {
        return $this->belongsTo(Departamento::class, 'departamento');
    }


}
