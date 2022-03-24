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
        <input type="hidden" id="anPageName" name="page" value="header" />
        <div class="container-center-horizontal">
            <div class="header screen">
                <div class="header-operador">
                    <div class="overlap-group">
                        <img class="background" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/background@1x.png" />
                        <img class="overlap-group-item" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/square-background@1x.png" />
                        <h1 class="title valign-text-middle gothica1-medium-white-28px">Carta de llamada</h1>
                        <div class="video-interactivo valign-text-middle gothica1-medium-white-28px">Video Interactivo</div>
                        <div class="sergi-prez-jimnez valign-text-middle">Sergi Pérez Jiménez</div>
                        <img class="separate" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c8fba9e2027501296d59a/img/separate@2x.svg" />
                        <div class="cerrar-sesin valign-text-middle">Cerrar sesión</div>
                        <img class="overlap-group-item" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c8fba9e2027501296d59a/img/white-gradient@1x.svg" />
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}">
        </script>

        <style>
            .header {
            align-items: flex-start;
            display: flex;
            height: 198px;
            width: 1920px;
            }

            .header .header-operador {
            align-items: flex-end;
            background-color: var(--white);
            display: flex;
            height: 172px;
            min-width: 1920px;
            }

            .header .overlap-group {
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c8fba9e2027501296d59a/img/shadow@1x.svg);
            background-size: 100% 100%;
            height: 198px;
            margin-bottom: -26px;
            position: relative;
            width: 1920px;
            }

            .header .background {
            height: 172px;
            left: 0;
            object-fit: cover;
            position: absolute;
            top: 0;
            width: 1920px;
            }

            .header .overlap-group-item {
            height: 172px;
            left: 0;
            position: absolute;
            top: 0;
            width: 1920px;
            }

            .header .title {
            cursor: pointer;
            height: 16px;
            left: 521px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
            }

            .header .title:hover {
            transform: scale(1.1);
            }

            .header .video-interactivo {
            height: 16px;
            left: 1161px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .header .sergi-prez-jimnez {
            color: var(--white);
            font-family: var(--font-family-gothic_a1-regular);
            font-size: var(--font-size-xs);
            font-weight: 400;
            height: 16px;
            left: 1408px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 34px;
            white-space: nowrap;
            }

            .header .separate {
            height: 58px;
            left: 1647px;
            position: absolute;
            top: 18px;
            width: 9px;
            }

            .header .cerrar-sesin {
            color: var(--white);
            font-family: var(--font-family-gothic_a1-regular);
            font-size: var(--font-size-xs);
            font-weight: 400;
            height: 16px;
            left: 1707px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 34px;
            white-space: nowrap;
            }
        </style>
    </body>
</html>
