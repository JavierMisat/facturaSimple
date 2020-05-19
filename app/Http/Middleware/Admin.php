<?php

namespace SistemaGestionSimple\Http\Middleware;

use Closure;
use SistemaGestionSimple\Usuario;
use Session;
use Illuminate\Contracts\Auth\Guard;

class Admin
{

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->rol == Usuario::RECAUDADOR){
            Session::flash('mensaje', 'No tiene permisos para realizar esta acción.');
            return redirect('/auth/login');
        }
        return $next($request);
    }
}
