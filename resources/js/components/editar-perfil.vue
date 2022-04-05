<template>
    <div>
        <!-- <div class="container-center-horizontal"> -->
            <div class="editar-perfil-operador">
                <div class="editar-perfil-operador-editar-perfil valign-text-middle gothica1-normal-black-28px"> <!-- FIXME: Editar perfil -->
                    Editar perfil
                </div>
                <div class="editar-perfil-operador-datos-personales-container">
                    <div class="datos-personales valign-text-middle gothica1-normal-black-21px"> <!-- FIXME: Datos personales -->
                    Datos personales
                    </div>
                    <div class="editar-perfil-operador-flex-row">
                        <div class="editar-perfil-operador-nick"> <!-- FIXME: Nick -->
                            <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Dirección de correo electrónico
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                    account_box
                                </i>
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </div>
                    <div class="editar-perfil-operador-flex-row-1">
                        <div class="editar-perfil-operador-nombre"> <!-- FIXME: Nombre -->
                            <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Nombre
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                    account_circle
                                </i>
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                        <div class="editar-perfil-operador-apellidos"> <!-- FIXME: Apellidos -->
                            <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Apellidos
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                    account_circle
                                </i>
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="editar-perfil-operador-password-container">
                    <div class="editar-perfil-operador-cambiar-contrasenya valign-text-middle gothica1-normal-black-21px"> <!-- FIXME: Password Section -->
                        Cambiar contraseña
                    </div>
                    <div class="editar-perfil-operador-flex-row-2">
                        <div class="editar-perfil-operador-contrasea-actual"> <!-- FIXME: Contraseña -->
                            <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Contraseña actual
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                                <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                    lock
                                </i>
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                        <div class="editar-perfil-operador-contrasea-nueva"> <!-- FIXME: Contraseña nueva -->
                            <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon">
                                <span class="mdc-text-field__ripple"></span>
                                <span class="mdc-floating-label" id="my-label-id">
                                    Contraseña nueva
                                </span>
                                <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                    lock
                                </i>
                                <span class="mdc-line-ripple"></span>
                            </label>
                        </div>
                    </div>
                    <div class="editar-perfil-operador-flex-row-3">
                        <div class="editar-perfil-operador-aceptar-cambios"> <!-- FIXME: Aceptar cambios -->
                            <button class="mdc-button mdc-button--raised">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">
                                    Aceptar cambios
                                </span>
                            </button>
                        </div>
                        <div class="editar-perfil-operador-cancelar"> <!-- FIXME: Cancelar -->
                            <button class="mdc-button mdc-button--raised">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">
                                    Cancelar
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <span> <!-- FIXME: Personaje -->
                    <img class="degradado" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/degradado@1x.svg"/>
                    <img class="ellipse-1" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/ellipse-1@2x.svg"/>
                    <div class="peep-standing-30">
                        <div class="overlap-group2">
                            <div class="posestandingshirt-3">
                                <div class="overlap-group">
                                    <img class="skin" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/--skin@1x.svg"/>
                                    <img class="shoes" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/---shoes@2x.svg"/>
                                    <img class="top" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/---top@2x.svg"/>
                                    <img class="ink" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/---ink@1x.svg"/>
                                </div>
                            </div>
                            <div class="overlap-group1">
                                <div class="head-short-4">
                                    <div class="overlap-group-1">
                                        <img class="skin-1" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/--skin-1@2x.svg"/>
                                        <img class="hair" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/---hair@2x.svg"/>
                                        <img class="fill-4" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/fill-4@2x.svg"/>
                                        <img class="fill-6" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/fill-6@2x.svg"/>
                                        <img class="ink-1" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/---ink-1@2x.svg"/>
                                    </div>
                                </div>
                                <img class="facial-hair-moustache-7" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/facial-hair-moustache-7@2x.svg"/>
                                <div class="face-old">
                                    <img class="ink-2" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623c426cb5b83dea2f4dc699/img/---ink-2@2x.svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
            </div>
        <!-- </div> -->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                expedientes: [],
                loading: false
            }
        },
        methods:{
        },
        mounted() {
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-nick .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector("editar-perfil-operador-nombre .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-apellidos .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-contrasea-actual .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-contrasea-nueva .mdc-text-field"));
            // mdc.autoInit();
            new mdc.ripple.MDCRipple(document.querySelector(".editar-perfil-operador-aceptar-cambios .mdc-button"));
            // mdc.autoInit();
            new mdc.ripple.MDCRipple(document.querySelector("editar-perfil-operador-cancelar .mdc-button"));
        }
    }
</script>

<style>
    /* FIXME: Main container + tittle */
    .editar-perfil-operador {
    display: flex;
    align-items: flex-start;
    background-color: transparent;
    width: 1920px;
    height: 882px;
    flex-direction: column;
    flex-wrap: wrap;
    }

    .editar-perfil-operador-editar-perfil {
    height: 16px;
    margin-left: 100px;
    margin-top: 50px;
    letter-spacing: 0.15px;
    line-height: 16px;
    top: 222px;
    white-space: nowrap;
    z-index: 4;
    }

    /* FIXME: Datos personales */
    .editar-perfil-operador-datos-personales-container {
    display: flex;
    align-items: flex-start;
    width: 750px;
    height: 179px;
    margin-left: 102px;
    margin-top: 36px;
    flex-direction: column;
    }

    .editar-perfil-operador-datos-personales {
    height: 16px;
    left: 102px;
    letter-spacing: 0.15px;
    line-height: 16px;
    top: 274px;
    white-space: nowrap;
    z-index: 5;
    }

    .editar-perfil-operador-flex-row {
    display: flex;
    align-items: flex-start;
    width: 350px;
    height: 60px;
    margin-top: 18px;
    }

    .editar-perfil-operador-nick {
    height: 60px;
    left: 102px;
    top: 308px;
    width: 350px;
    z-index: 6;
    }

    .editar-perfil-operador-flex-row-1 {
    display: flex;
    align-items: flex-start;
    width: 350px;
    height: 60px;
    margin-top: 25px;
    gap: 50px;
    }

    .editar-perfil-operador-nombre {
    height: 60px;
    left: 102px;
    top: 393px;
    width: 350px;
    z-index: 8;
    }

    .editar-perfil-operador-apellidos {
    height: 60px;
    left: 502px;
    top: 393px;
    width: 350px;
    z-index: 7;
    }

    .editar-perfil-operador-name {
    height: 16px;
    left: 705px;
    letter-spacing: 0.15px;
    line-height: 16px;
    top: 643px;
    white-space: nowrap;
    z-index: 23;
    }

    /* FIXME: Contraseña */
    .editar-perfil-operador-password-container{
    display: flex;
    align-items: flex-start;
    width: 750px;
    height: 179px;
    margin-left: 102px;
    margin-top: 48px;
    flex-direction: column;
    }

    .editar-perfil-operador-flex-row-2 {
    display: flex;
    align-items: flex-start;
    width: 350px;
    height: 60px;
    margin-top: 18px;
    gap: 50px;
    }

    .editar-perfil-operador-cambiar-contrasenya {
    height: 16px;
    left: 102px;
    letter-spacing: 0.15px;
    line-height: 16px;
    top: 274px;
    white-space: nowrap;
    z-index: 5;
    }

    .editar-perfil-operador-contrasea-actual {
    height: 60px;
    left: 102px;
    top: 482px;
    width: 350px;
    z-index: 9;
    }

    .editar-perfil-operador-contrasea-nueva {
    height: 60px;
    left: 502px;
    top: 482px;
    width: 350px;
    z-index: 10;
    }

    /* FIXME: Botones */
    .editar-perfil-operador-flex-row-3 {
    display: flex;
    align-items: flex-start;
    width: 350px;
    height: 60px;
    margin-top: 50px;
    margin-left: 174px;
    gap: 50px;
    }

    .editar-perfil-operador-aceptar-cambios{
    border-radius: 32px;
    height: 36px;
    left: 275px;
    top: 599px;
    width: 141px;
    z-index: 11;
    transition: all 0.2s ease-in-out;
    font-family: var(--font-family-gothic_a1);
    text-transform: none;
    }

    .editar-perfil-operador-aceptar-cambios {
    height: auto !important;
    width: auto !important;
    }

    .editar-perfil-operador-cancelar {
    border-radius: 32px;
    background-color: rgb(207, 0, 0);
    height: 36px;
    left: 552px;
    top: 619px;
    width: 89px;
    z-index: 12;
    transition: all 0.2s ease-in-out;
    font-family: var(--font-family-gothic_a1);
    text-transform: capitalize;
    }

    .editar-perfil-operador-cancelar {
    height: auto !important;
    width: auto !important;
    }

    /* FIXME: Personaje */
    .editar-perfil-operador .degradado {
    height: 630px;
    left: 1197px;
    position: fixed;
    top: 421px;
    width: 491px;
    z-index: 3;
    }

    .editar-perfil-operador .ellipse-1 {
    height: 308px;
    left: 1268px;
    position: fixed;
    top: 291px;
    width: 308px;
    z-index: 2;
    }

    .editar-perfil-operador .peep-standing-30 {
    align-items: flex-end;
    display: flex;
    height: 780px;
    justify-content: flex-end;
    left: 1246px;
    min-width: 280px;
    padding: 37.2px 0;
    position: fixed;
    top: 299px;
    z-index: 1;
    }

    .editar-perfil-operador .overlap-group2 {
    height: 700px;
    position: relative;
    width: 391px;
    }

    .editar-perfil-operador .posestandingshirt-3 {
    align-items: flex-start;
    display: flex;
    height: 593px;
    left: 0;
    min-width: 391px;
    padding: 0 75.7px;
    position: absolute;
    top: 108px;
    }

    .editar-perfil-operador .overlap-group {
    height: 612px;
    margin-top: -15.42px;
    position: relative;
    width: 212px;
    }

    .editar-perfil-operador .skin {
    height: 610px;
    left: 1px;
    position: absolute;
    top: 0;
    width: 209px;
    }

    .editar-perfil-operador .shoes {
    height: 78px;
    left: 0;
    position: absolute;
    top: 532px;
    width: 205px;
    }

    .editar-perfil-operador .top {
    height: 277px;
    left: 11px;
    position: absolute;
    top: 23px;
    width: 200px;
    }

    .editar-perfil-operador .ink {
    height: 600px;
    left: 0;
    position: absolute;
    top: 11px;
    width: 212px;
    }

    .editar-perfil-operador .overlap-group1 {
    height: 134px;
    left: 125px;
    position: absolute;
    top: 0;
    width: 112px;
    }

    .editar-perfil-operador .head-short-4 {
    align-items: flex-start;
    display: flex;
    height: 134px;
    justify-content: flex-end;
    left: 0;
    min-width: 112px;
    padding: 3.0px 9.2px;
    position: absolute;
    top: 0;
    }

    .editar-perfil-operador .overlap-group-1 {
    height: 121px;
    position: relative;
    width: 91px;
    }

    .editar-perfil-operador .skin-1 {
    height: 116px;
    left: 4px;
    position: absolute;
    top: 2px;
    width: 86px;
    }

    .editar-perfil-operador .hair {
    height: 69px;
    left: 7px;
    position: absolute;
    top: 4px;
    width: 83px;
    }

    .editar-perfil-operador .fill-4 {
    height: 1px;
    left: 12px;
    position: absolute;
    top: 24px;
    width: 1px;
    }

    .editar-perfil-operador .fill-6 {
    height: 1px;
    left: 12px;
    position: absolute;
    top: 25px;
    width: 1px;
    }

    .editar-perfil-operador .ink-1 {
    height: 121px;
    left: 0;
    position: absolute;
    top: 0;
    width: 91px;
    }

    .editar-perfil-operador .facial-hair-moustache-7 {
    height: 55px;
    left: 28px;
    position: absolute;
    top: 79px;
    width: 67px;
    }

    .editar-perfil-operador .face-old {
    align-items: flex-end;
    display: flex;
    height: 69px;
    left: 38px;
    min-width: 69px;
    padding: 13.0px 11.4px;
    position: absolute;
    top: 44px;
    }

    .editar-perfil-operador .ink-2 {
    height: 42px;
    width: 45px;
    }

    /* FIXME: Extras */
    .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    width: 350px;
    height: 60px;
    }

    .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: white;
    }
</style>
