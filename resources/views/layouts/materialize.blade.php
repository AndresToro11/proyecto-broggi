<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>

        <!-- MapBox -->

        <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
        <!-- font awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Materialize CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Materialize JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="{{ url('/home') }}" class="brand-logo"><img src="{{ asset('images/logoBroggi.png') }}" alt="Nada" width="200px" height="45px"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ url('/expedientes') }}">Expedientes</a></li>
                    <li><a href="{{ url('/grafico') }}">Grafico</a></li>
                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                    <li><a href="{{ url('/mapa') }}">Mapa</a></li>
                </ul>
            </div>
        </nav>

        <div id="app" class="container">
            @yield('contenido')
        </div>

        <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>