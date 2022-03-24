<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    {{-- Datos incidentes --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=1920, maximum-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/styleguide.css" />
    <link rel="stylesheet" type="text/css" href="../../css/globals.css" />

    <script>
        function loader() {
            var loader = document.createElement("div");
            loader.setAttribute('id', 'div1');
            loader.setAttribute('class', 'spinner-border text-primary');
            loader.setAttribute('role', 'status');
            document.body.appendChild(loader);
        }
    </script>

</head>

<body onload="">
    <nav>
        <div class="nav-wrapper">
            <a href="{{ url('/home') }}" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('/expedientes') }}">Expedientes</a></li>
                <li><a href="{{ url('/grafico') }}">Grafico</a></li>

                <li><a href="">login</a></li>
            </ul>
        </div>
    </nav>
    <div id="app" class="container">
        @yield('contenido')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
