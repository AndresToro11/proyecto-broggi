@extends('layouts.plantilla')

@section('contenido')
<div class="offset-lg-3 col-lg-6 mt-5">
    @include('partials.mensajes')
    <div>
        <input type="hidden" id="anPageName" name="page" value="inicio-de-sesion" />
        <div class="container-center-horizontal">
        <div class="inicio-de-sesion screen">
            <img class="background" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623dbabddd12e5a0113de8d8/img/background@1x.png"/>
            <div class="inicio-de-sesin">
                <h1 class="title gothica1-extra-bold-black-48px">
                    Inicio de sesion
                </h1>
            <div class="flex-row"> <!--  No borrar, conservar por margenes -->
            </div>
            <form action="{{ action([App\Http\Controllers\Api\UsuariController::class, 'login']) }}" method="POST">
                @csrf
            <div class="e-mail">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="my-label-id">
                        Dirección de correo electrónico
                    </span>
                         {{-- <input type="mail" class="form-control" id="mail" name="mail" autofocus value="{{ old('mail') }}"> --}}
                    <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" id="mail" name="mail" autofocus value="{{ old('mail') }}" />
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>
            <div class="contrasea">
                <label class="mdc-text-field mdc-text-field--filled">
                    <span class="mdc-text-field__ripple"></span>
                    <span class="mdc-floating-label" id="my-label-id">
                        Contraseña
                    </span>
                    <input type="password" class="form-control" id="contrassenya" name="contrassenya" value="{{ old('contrassenya') }}">
                    {{-- <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" /> --}}
                    <span class="mdc-line-ripple"></span>
                </label>
            </div>
            <div class="crear-cuenta-boton" id="boton">
                <button type="submit" class="mdc-button mdc-button--raised" id="boton">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label">
                        Iniciar sesion
                    </span>
                </button>
            </div>
            </div>
        </div>
        </div>
    </div>



    <!-- <div class="card">
        <div class="card-header bg-secondary text-light">
            Login
        </div>
        <div class="card-body">
            <form action="{{ action([App\Http\Controllers\Api\UsuariController::class, 'login']) }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="mail" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="mail" class="form-control" id="mail" name="mail" autofocus
                            value="{{ old('mail') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contrassenya" class="col-sm-2 col-form-label">Contrasenya</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="contrassenya" name="contrassenya"
                            value="{{ old('contrassenya') }}">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <a href="{{ url('/') }}" class="btn btn-secondary float-right ml-1"><i class="fa fa-times"
                                aria-hidden="true"></i>
                            Cancelar</a>
                        <button type="submit" class="btn btn-primary float-right"><i class="fa fa-check"
                                aria-hidden="true"></i> Aceptar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>-->
</div>
<<<<<<< HEAD
{{-- <script>
=======
<script>
>>>>>>> aitor
    export default {
        mounted() {
            new mdc.textField.MDCTextField(document.querySelector(".e-mail .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".contrasea .mdc-text-field"));
            mdc.autoInit();
            new mdc.ripple.MDCRipple(document.querySelector(".crear-cuenta-boton .mdc-button"));
        }
    }
<<<<<<< HEAD
</script> --}}
=======
</script>
>>>>>>> aitor


@endsection


