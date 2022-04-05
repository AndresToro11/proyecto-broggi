<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        {{-- Datos incidentes --}}
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=1920, maximum-scale=1.0" />
        <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png" />
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
        <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
        <link rel="stylesheet" type="text/css" href={{ asset('css/styleguide.css') }} />
        <link rel=" stylesheet" type="text/css" href={{ asset('css/globals.css') }} />

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

    <body onload="" style="margin: 0">
        <div id="app" class="container">
            @yield('contenido')
        </div>

        <script src="{{ asset('js/app.js') }}">
        </script>

        <style>
        </style>
    </body>
</html>
