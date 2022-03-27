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
        {{-- Header Operador --}}
        <div class="container-center-horizontal">
            <div class="header screen">
                <span>
                    <div class="header-operador">
                        <div class="overlap-group-operador">
                            <img class="background-operador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/background@1x.png"/>
                            <img class="overlap-group-item-operador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/square-background@1x.png"/>
                            <h1 class="title-operador valign-text-middle gothica1-medium-white-28px">Carta de llamada</h1>
                            <div class="video-interactivo-operador valign-text-middle gothica1-medium-white-28px">Video Interactivo</div>
                            <div class="sergi-prez-jimnez-operador valign-text-middle gothica1-normal-white-18px">Sergi Pérez Jiménez</div>
                            <img class="separate-operador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c8fba9e2027501296d59a/img/separate@2x.svg"/>
                            <div class="cerrar-sesin-operador valign-text-middle gothica1-normal-white-18px">Cerrar sesión</div>
                            <img class="overlap-group-item-operador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c8fba9e2027501296d59a/img/white-gradient@1x.svg"/>
                        </div>
                    </div>
                </span>
                {{-- Header Supervisor --}}
                <span>
                    <div class="header-supervisor">
                        <div class="overlap-group-supervisor">
                            <img class="overlap-group-item-supervisor" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/square-background@1x.png"/>
                            <img class="overlap-group-item-supervisor" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623f92c8f6a94c4ce7531afa/img/white-gradient-1@1x.svg"/>
                            <h1 class="title-supervisor valign-text-middle gothica1-medium-white-28px">Carta de llamada</h1>
                            <div class="expedientes-supervisor valign-text-middle gothica1-medium-white-28px">Expedientes</div>
                            <div class="grficos-supervisor valign-text-middle gothica1-medium-white-28px">Gráficos</div>
                            <div class="operadores-supervisor valign-text-middle gothica1-medium-white-28px">Operadores</div>
                            <div class="sergi-prez-jimnez-supervisor valign-text-middle gothica1-normal-white-18px">Sergi Pérez Jiménez</div>
                            <img class="separate-supervisor" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623f92c8f6a94c4ce7531afa/img/separate-1@2x.svg"/>
                            <div class="cerrar-sesin-supervisor valign-text-middle gothica1-normal-white-18px">Cerrar sesión</div>
                          </div>
                    </div>
                </span>
                {{-- Header Administrador --}}
                <span>
                    <div class="header-administrador">
                        <div class="overlap-group-administrador">
                            <img class="overlap-group-item-administrador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/square-background@1x.png"/>
                            <img class="overlap-group-item-administrador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624047c85dc258b91591e4d0/img/white-gradient-1@1x.svg"/>
                            <h1 class="title-administrador valign-text-middle gothica1-medium-white-28px">Gestionar expedientes</h1>
                            <div class="grficos-administrador valign-text-middle gothica1-medium-white-28px">Gráficos</div>
                            <div class="gestionar-usuarios-administrador valign-text-middle gothica1-medium-white-28px">Gestionar usuarios</div>
                            <div class="sergi-prez-jimnez-administrador valign-text-middle gothica1-normal-white-18px">Sergi Pérez Jiménez</div>
                            <img class="separate-administrador" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624047c85dc258b91591e4d0/img/separate-1@2x.svg"/>
                            <div class="cerrar-sesin-administrador valign-text-middle gothica1-normal-white-18px">Cerrar sesión</div>
                        </div>
                    </div>
                </span>
            </div>
        </div>
        <div id="app" class="container">
            @yield('contenido')
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

            TODO: /* Header Operador */
            .header .header-operador {
            align-items: flex-end;
            background-color: var(--white);
            display: flex;
            height: 172px;
            min-width: 1920px;
            }

            .header .overlap-group-operador {
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c8fba9e2027501296d59a/img/shadow@1x.svg);
            background-size: 100% 100%;
            height: 198px;
            margin-bottom: -26px;
            position: relative;
            width: 1920px;
            }

            .header .background-operador {
            height: 172px;
            left: 0;
            object-fit: cover;
            position: absolute;
            top: 0;
            width: 1920px;
            }

            .header .overlap-group-item-operador {
            height: 172px;
            left: 0;
            position: absolute;
            top: 0;
            width: 1920px;
            }

            .header .title-operador {
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

            .header .title-operador:hover {
            transform: scale(1.1);
            }

            .header .video-interactivo-operador {
            height: 16px;
            left: 1161px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .header .sergi-prez-jimnez-operador {
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

            .header .separate-operador {
            height: 58px;
            left: 1647px;
            position: absolute;
            top: 18px;
            width: 9px;
            }

            .header .cerrar-sesin-operador {
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

            TODO: /* Header Supervisor */
            .header-supervisor {
            align-items: flex-start;
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623f92c8f6a94c4ce7531afa/img/shadow-1@1x.svg);
            background-size: 100% 100%;
            display: flex;
            height: 198px;
            min-width: 1920px;
            z-index: 1;
            }

            .header .overlap-group-supervisor {
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/background@1x.png);
            background-position: 50% 50%;
            background-size: cover;
            height: 172px;
            position: relative;
            width: 1920px;
            }

            .header .overlap-group-item-supervisor {
            height: 172px;
            left: 0;
            position: absolute;
            top: 0;
            width: 1920px;
            }

            .header .title-supervisor {
            cursor: pointer;
            height: 16px;
            left: 265px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
            }

            .header .title-supervisor:hover {
            transform: scale(1.1);
            }

            .header .expedientes-supervisor {
            height: 16px;
            left: 681px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .header .grficos-supervisor {
            height: 16px;
            left: 1093px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .header .operadores-supervisor {
            height: 16px;
            left: 1454px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .header .sergi-prez-jimnez-supervisor {
            height: 16px;
            left: 1408px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 34px;
            white-space: nowrap;
            }

            .header .separate-supervisor {
            height: 58px;
            left: 1647px;
            position: absolute;
            top: 18px;
            width: 9px;
            }

            .header .cerrar-sesin-supervisor {
            height: 16px;
            left: 1707px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 34px;
            white-space: nowrap;
            }

            TODO: /* Header Administrador */
            .header-administrador {
            align-items: flex-start;
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624047c85dc258b91591e4d0/img/shadow-1@1x.svg);
            background-size: 100% 100%;
            display: flex;
            height: 198px;
            min-width: 1920px;
            z-index: 1;
            }

            .overlap-group-administrador {
            background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/background@1x.png);
            background-position: 50% 50%;
            background-size: cover;
            height: 172px;
            position: relative;
            width: 1920px;
            }

            .overlap-group-item-administrador {
            height: 172px;
            left: 0;
            position: absolute;
            top: 0;
            width: 1920px;
            }

            .title-administrador {
            cursor: pointer;
            height: 16px;
            left: 322px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            transition: all 0.2s ease-in-out;
            white-space: nowrap;
            }

            .title-administrador:hover {
            transform: scale(1.1);
            }

            .grficos-administrador {
            height: 16px;
            left: 901px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .gestionar-usuarios-administrador {
            height: 16px;
            left: 1308px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 139px;
            white-space: nowrap;
            }

            .sergi-prez-jimnez-administrador {
            height: 16px;
            left: 1408px;
            letter-spacing: 1.25px;
            line-height: 16px;
            position: absolute;
            text-shadow: 0px 4px 4px #00000040;
            top: 34px;
            white-space: nowrap;
            }

            .separate-administrador {
            height: 58px;
            left: 1647px;
            position: absolute;
            top: 18px;
            width: 9px;
            }

            .cerrar-sesin-administrador {
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
