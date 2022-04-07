<template>
    <div>
        <!-- <input type="hidden" id="anPageName" name="page" value="inicio-de-sesion" /> -->
        <!-- <div class="container-center-horizontal"> -->
        <div class="inicio-de-sesion screen">
            <img class="inicio-de-sesion-background" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/623dbabddd12e5a0113de8d8/img/background@1x.png"/>
            <div class="inicio-de-sesion-inicio-de-sesin">
                <h1 class="inicio-de-sesion-title gothica1-extra-bold-black-48px">
                    Inicio de sesion
                </h1>
                <div class="inicio-de-sesion-flex-row"> <!--  No borrar, conservar por margenes -->
                </div>
                <div class="inicio-de-sesion-e-mail">
                    <label class="mdc-text-field mdc-text-field--filled">
                        <span class="mdc-text-field__ripple"></span>
                        <span class="mdc-floating-label" id="my-label-id">
                            Dirección de correo electrónico
                        </span>
                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                        <span class="mdc-line-ripple"></span>
                    </label>
                </div>
                <div class="inicio-de-sesion-contrasea">
                    <label class="mdc-text-field mdc-text-field--filled">
                        <span class="mdc-text-field__ripple"></span>
                        <span class="mdc-floating-label" id="my-label-id">
                            Contraseña
                        </span>
                        <input type="password" class="mdc-text-field__input" aria-labelledby="my-label-id" />
                        <span class="mdc-line-ripple"></span>
                    </label>
                </div>
                <div class="inicio-de-sesion-crear-cuenta-boton" id="boton">
                    <button class="mdc-button mdc-button--raised" id="boton" >
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label">
                            Iniciar sesion
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>

</template>

 <script>
    export default {
        // methods:{
        //     logearse(){

        //     },
        // },
        mounted() {
            new mdc.textField.MDCTextField(document.querySelector(".inicio-de-sesion-e-mail .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".inicio-de-sesion-contrasea .mdc-text-field"));
            mdc.autoInit();
            new mdc.ripple.MDCRipple(document.querySelector(".inicio-de-sesion-crear-cuenta-boton .mdc-button"));
        }
    }
</script>

<style>
    .inicio-de-sesion {
    /* align-items: flex-start; */
    /* background-color: var(--white); */
    /* display: flex; */
    width: 1920px;
    height: 1080px;
    overflow-block: hidden;
    }

    .inicio-de-sesion-background {
    /* left: 0; */
    object-fit: fill;
    position: fixed;
    /* top: 0; */
    width: 1920px;
    height: 1080px;
    z-index: 1;
    overflow: hidden;
    }

    .inicio-de-sesion-inicio-de-sesin {
    align-items: flex-start;
    background-color: var(--white);
    border-radius: 8px;
    box-shadow: 0px 4px 4px #00000040 , 0px 4px 4px #00000040;
    display: flex;
    flex-direction: column;
    left: 1121px;
    padding: 37px 41px;
    position: fixed;
    top: 186px;
    width: 698px;
    z-index: 2;
    }

    .inicio-de-sesion-title {
    letter-spacing: 0.15px;
    line-height: 24px;
    margin-left: 2px;
    margin-top: 26px;
    min-height: 24px;
    white-space: nowrap;
    }

    inicio-de-sesion-flex-row {
    align-items: center;
    display: flex;
    height: 24px;
    margin-left: 2px;
    margin-top: 17px;
    min-width: 296px;
    }

    .inicio-de-sesion-e-mail {
    height: 64px;
    margin-left: 3px;
    margin-top: 50px;
    width: 360px;
    }

    .inicio-de-sesion-contrasea {
    height: 63px;
    margin-left: 2px;
    margin-top: 23px;
    width: 360px;
    }

    .inicio-de-sesion-crear-cuenta-boton #boton{
    align-self: flex-end;
    border-radius: 32px;
    height: 44px;
    margin-top: 70px;
    margin-left: 486px;
    width: 135px;
    cursor: pointer;
    background-color: #0040FF;
    font-family: var(--font-family-gothic_a1);
    text-transform: none;
    }

    .inicio-de-sesion-inicia-sesin {
    height: auto !important;
    width: auto !important;
    }

    .inicio-de-sesion-e-mail .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    width: 360px;
    }

    .inicio-de-sesion-contrasea .mdc-text-field--focused:not(.mdc-text-field--disabled) .mdc-floating-label {
    color: var(--mdc-theme-primary);
    width: 360px;
    }

    .inicio-de-sesion-crear-cuenta-boton {
    height: auto !important;
    width: auto !important;
    }

    .inicio-de-sesion-e-mail .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: #ffffff;
    width: 360px;
    }

    .inicio-de-sesion-contrasea .mdc-text-field--filled:not(.mdc-text-field--disabled) {
    background-color: #ffffff;
    width: 360px;
    }
</style>
