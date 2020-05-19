<?php

namespace SistemaGestionSimple\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \SistemaGestionSimple\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \SistemaGestionSimple\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \SistemaGestionSimple\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \SistemaGestionSimple\Http\Middleware\RedirectIfAuthenticated::class,
        'admin' => \SistemaGestionSimple\Http\Middleware\Admin::class,
        'super_admin' => \SistemaGestionSimple\Http\Middleware\SuperAdmin::class,
        'recaudador' => \SistemaGestionSimple\Http\Middleware\Recaudador::class,
        'cliente' => \SistemaGestionSimple\Http\Middleware\Recaudador::class,

    ];
}
