@extends ('plantillas.plain')

<div class="back">

    @yield ('errors')

    <div class="login-outer">
        <div class="login-wrap">
            <div class="login-left striped-bg text-center">
                <a href="{{ url('/') }}" class="logo-lg">
                    <i class="fa fa-signal"></i> Sistema de facturas
                </a>
                <div class="slogan">Simple Comunicaciones S.A.S</div>
            </div>

            <div class="login-right striped-bg">
                @yield('page-content')
            </div>
        </div>
    </div>

</div>
