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

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>

        <div class=" sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/logoBroggi.png') }}" alt="Nada" width="60px" height="60px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item m-4">
                                <a class="nav-link active" aria-current="page" href="{{ url('/expedientes') }}">Expedientes</a>
                            </li>
                            <li class="nav-item m-4">
                                <a class="nav-link active" aria-current="page" href="{{ url('/grafico') }}">Gráficos</a>
                            </li>
                            <li class="nav-item m-4">
                                <a class="nav-link active" aria-current="page" href="{{ url('/admin') }}">Administración</a>
                            </li>
                            <li class="nav-item m-4">
                                <a class="nav-link active" aria-current="page" href="{{ url('/mapa') }}">Mapa</a>
                            </li>
                            <li class="nav-item m-4">
                                <a class="nav-link active" aria-current="page" href="{{ url('/llamada') }}">Llamada</a>
                            </li>
                            <li class="nav-item m-4">
                                <a class="nav-link active" aria-current="page" href="{{ url('/operadores') }}">Operadores</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="app" class="container">
            @yield('contenido')
        </div>

        <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
