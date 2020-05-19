@if(count($errors) > 0)
    <div class="errors col-sm-8 col-sm-offset-2">

        <div class="alert alert-danger">
            <strong>Opss!</strong> No hemos podido validar tus datos revisa bien tus credenciales.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endif