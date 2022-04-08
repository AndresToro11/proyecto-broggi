<template>
    <div>
        <h1 class="expedientes-title gothica1-normal-black-28px">
            Expedientes
        </h1>
        <div class="expedientes-container">
            <div class="expediente-file" data-open="expedientes-modalScreen" @click="modalVisible"> <!-- TODO: File --onProcess  -->
                <div class="window-expediente-container"> <!-- FIXME: ELEMENTS -->
                    <div class="window-expediente-shadow"></div>
                    <div class="window-expediente-shadow-onProcess"></div>
                    <div class="window-expediente"></div>
                </div>
                <div class="expedientes-info gothica1-normal-black-21px"> <!-- FIXME: INFO -->
                    <div class="expedientes-flex-row">
                        <div class="expedientes-expediente valign-text-middle">
                            Expediente
                        </div>
                        <div class="expedientes-number valign-text-middle">
                            00000001
                        </div>
                    </div>
                    <div class="expedientes-flex-row-1">
                        <div class="expedientes-operador valign-text-middle">
                            Operador
                        </div>
                        <div class="expedientes-name-profile valign-text-middle">
                            Andrés Toro
                        </div>
                    </div>
                    <div class="expedientes-flex-row-2">
                        <div class="expedientes-fecha valign-text-middle">
                            Fecha
                        </div>
                        <div class="expedientes-date valign-text-middle">
                            13/10/2022
                        </div>
                    </div>
                    <div class="expedientes-flex-row-3">
                        <div class="expedientes-hora valign-text-middle">
                            Hora
                        </div>
                        <div class="expedientes-text valign-text-middle">
                            22:34
                        </div>
                    </div>
                    <div class="expedientes-flex-row-4">
                        <div class="expedientes-estado valign-text-middle">
                            Estado
                        </div>
                        <div class="onProcess">
                            <div class="icon">
                                <div class="vector-container">
                                    <img class="vector" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6240b3148dae3cfde23e0d81/img/vector@2x.png"/>
                                </div>
                            </div>
                            <span class="material-icons">
                                schedule
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expediente-file" data-open="expedientes-modalScreen" @click="modalVisible"> <!-- TODO: File --immobilized  -->
                <div class="window-expediente-container">
                    <div class="window-expediente-shadow"></div>
                    <div class="window-expediente-shadow-inmobilized"></div>
                    <div class="window-expediente"></div>
                </div>
                <div class="expedientes-info gothica1-normal-black-21px">
                    <div class="expedientes-flex-row">
                        <div class="expedientes-expediente valign-text-middle">
                            Expediente
                        </div>
                        <div class="expedientes-number valign-text-middle">
                            00000001
                        </div>
                    </div>
                    <div class="expedientes-flex-row-1">
                        <div class="expedientes-operador valign-text-middle">
                            Operador
                        </div>
                        <div class="expedientes-name-profile valign-text-middle">
                            Andrés Toro
                        </div>
                    </div>
                    <div class="expedientes-flex-row-2">
                        <div class="expedientes-fecha valign-text-middle">
                            Fecha
                        </div>
                        <div class="expedientes-date valign-text-middle">
                            13/10/2022
                        </div>
                    </div>
                    <div class="expedientes-flex-row-3">
                        <div class="expedientes-hora valign-text-middle">
                            Hora
                        </div>
                        <div class="expedientes-text valign-text-middle">
                            22:34
                        </div>
                    </div>
                    <div class="expedientes-flex-row-4">
                        <div class="expedientes-estado valign-text-middle">
                            Estado
                        </div>
                        <div class="immobilized">
                            <div class="icon">
                                <div class="vector-container">
                                    <img class="vector" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624ac280c692872ebb3335be/img/vector-10@2x.svg"/>
                                </div>
                            </div>
                            <span class="material-icons">
                                do_disturb_on
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expediente-file" data-open="expedientes-modalScreen" @click="modalVisible"> <!-- TODO: File --requested  -->
                <div class="window-expediente-container">
                    <div class="window-expediente-shadow"></div>
                    <div class="window-expediente-shadow-requested"></div>
                    <div class="window-expediente"></div>
                </div>
                <div class="expedientes-info gothica1-normal-black-21px">
                    <div class="expedientes-flex-row">
                        <div class="expedientes-expediente valign-text-middle">
                            Expediente
                        </div>
                        <div class="expedientes-number valign-text-middle">
                            00000001
                        </div>
                    </div>
                    <div class="expedientes-flex-row-1">
                        <div class="expedientes-operador valign-text-middle">
                            Operador
                        </div>
                        <div class="expedientes-name-profile valign-text-middle">
                            Andrés Toro
                        </div>
                    </div>
                    <div class="expedientes-flex-row-2">
                        <div class="expedientes-fecha valign-text-middle">
                            Fecha
                        </div>
                        <div class="expedientes-date valign-text-middle">
                            13/10/2022
                        </div>
                    </div>
                    <div class="expedientes-flex-row-3">
                        <div class="expedientes-hora valign-text-middle">
                            Hora
                        </div>
                        <div class="expedientes-text valign-text-middle">
                            22:34
                        </div>
                    </div>
                    <div class="expedientes-flex-row-4">
                        <div class="expedientes-estado valign-text-middle">
                            Estado
                        </div>
                        <div class="requested">
                            <div class="icon">
                                <div class="vector-container">
                                    <img class="vector" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624ac280c692872ebb3335be/img/vector-10@2x.svg"/>
                                </div>
                            </div>
                            <span class="material-icons">
                                ios_share
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expediente-file" data-open="expedientes-modalScreen" @click="modalVisible"> <!-- TODO: File --closed  -->
                <div class="window-expediente-container">
                    <div class="window-expediente-shadow"></div>
                    <div class="window-expediente-shadow-closed"></div>
                    <div class="window-expediente"></div>
                </div>
                <div class="expedientes-info gothica1-normal-black-21px">
                    <div class="expedientes-flex-row">
                        <div class="expedientes-expediente valign-text-middle">
                            Expediente
                        </div>
                        <div class="expedientes-number valign-text-middle">
                            00000001
                        </div>
                    </div>
                    <div class="expedientes-flex-row-1">
                        <div class="expedientes-operador valign-text-middle">
                            Operador
                        </div>
                        <div class="expedientes-name-profile valign-text-middle">
                            Andrés Toro
                        </div>
                    </div>
                    <div class="expedientes-flex-row-2">
                        <div class="expedientes-fecha valign-text-middle">
                            Fecha
                        </div>
                        <div class="expedientes-date valign-text-middle">
                            13/10/2022
                        </div>
                    </div>
                    <div class="expedientes-flex-row-3">
                        <div class="expedientes-hora valign-text-middle">
                            Hora
                        </div>
                        <div class="expedientes-text valign-text-middle">
                            22:34
                        </div>
                    </div>
                    <div class="expedientes-flex-row-4">
                        <div class="expedientes-estado valign-text-middle">
                            Estado
                        </div>
                        <div class="closed">
                            <div class="icon">
                                <div class="vector-container">
                                    <img class="vector" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624ac280c692872ebb3335be/img/vector-6@2x.svg"/>
                                </div>
                            </div>
                            <span class="material-icons">
                                cancel
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expediente-file" data-open="expedientes-modalScreen" @click="modalVisible"> <!-- TODO: File --accepted  -->
                <div class="window-expediente-container">
                    <div class="window-expediente-shadow"></div>
                    <div class="window-expediente-shadow-accepted"></div>
                    <div class="window-expediente"></div>
                </div>
                <div class="expedientes-info gothica1-normal-black-21px">
                    <div class="expedientes-flex-row">
                        <div class="expedientes-expediente valign-text-middle">
                            Expediente
                        </div>
                        <div class="expedientes-number valign-text-middle">
                            00000001
                        </div>
                    </div>
                    <div class="expedientes-flex-row-1">
                        <div class="expedientes-operador valign-text-middle">
                            Operador
                        </div>
                        <div class="expedientes-name-profile valign-text-middle">
                            Andrés Toro
                        </div>
                    </div>
                    <div class="expedientes-flex-row-2">
                        <div class="expedientes-fecha valign-text-middle">
                            Fecha
                        </div>
                        <div class="expedientes-date valign-text-middle">
                            13/10/2022
                        </div>
                    </div>
                    <div class="expedientes-flex-row-3">
                        <div class="expedientes-hora valign-text-middle">
                            Hora
                        </div>
                        <div class="expedientes-text valign-text-middle">
                            22:34
                        </div>
                    </div>
                    <div class="expedientes-flex-row-4">
                        <div class="expedientes-estado valign-text-middle">
                            Estado
                        </div>
                        <div class="accepted">
                            <div class="icon">
                                <div class="vector-container">
                                    <img class="vector" src="https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/624ac280c692872ebb3335be/img/vector-4@2x.svg"/>
                                </div>
                            </div>
                            <span class="material-icons">
                                check_circle_outline
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expedientes-modal" id="expedientes-modalScreen"> <!-- TODO: Modal -->
                <div class="expedientes-modal-window">
                    <header class="expedientes-modal-header">
                        <div class="expedientes-x" id="close-modal" data-close="expedientes-modalScreen" @click="modalInvisible">
                            <span class="material-icons">
                                close
                            </span>
                        </div>
                    </header>
                    <div class="modal-information gothica1-normal-black-21px">
                        <!-- <div class="modal-flex-row"> FIXME: Expediente -->
                        <div class="expediente-modal valign-text-middle">
                                Expediente
                        </div>
                        <!-- </div> -->
                        <div class="modal-flex-row-1"> <!-- FIXME: Codigo de la llamada -->
                            <div class="codigo-modal">
                                Codigo de la llamada:
                            </div>
                            <div class="info-codigo-modal">
                                00000001
                            </div>
                        </div>
                        <div class="modal-flex-row-2"> <!-- FIXME: Provincia -->
                            <div class="provincia-modal valign-text-middle">
                                Provincia:
                            </div>
                            <div class="info-provincia-modal valign-text-middle">
                                Lleida
                            </div>
                        </div>
                        <div class="modal-flex-row-3"> <!-- FIXME: Municipio -->
                            <div class="municipio-modal valign-text-middle">
                                Municipio
                            </div>
                            <div class="info-municipio-modal valign-text-middle">
                                Agramunt
                            </div>
                        </div>
                        <div class="modal-flex-row-4"> <!-- FIXME: Fuera de Catalunya -->
                            <div class="fuera-Catalunya-modal valign-text-middle">
                                Fuera de Catalunya:
                            </div>
                            <div class="info-fuera-Catalunya-modal valign-text-middle">
                                No
                            </div>
                        </div>
                        <div class="modal-flex-row-5"> <!-- FIXME: Incidente -->
                            <div class="incidente-modal valign-text-middle">
                                Incidente:
                            </div>
                            <div class="info-incidente-modal valign-text-middle">
                                Derrumbamiento de un edificio
                            </div>
                        </div>
                        <div class="modal-flex-row-6"> <!-- FIXME: Direccion -->
                            <div class="direccion-modal valign-text-middle">
                                Direccion:
                            </div>
                            <div class="info-direccion-modal valign-text-middle">
                                SQY
                            </div>
                        </div>
                        <div class="modal-flex-row-7"> <!-- FIXME: Duracion de la llamada -->
                            <div class="duracion-modal valign-text-middle">
                                Duracion de la llamada:
                            </div>
                            <div class="info-duracion-modal valign-text-middle">
                                00:04:31
                            </div>
                        </div>
                        <div class="modal-flex-col"> <!-- FIXME: Nota comun -->
                            <div class="modal-flex-row-8">
                                <div class="notaComun-modal valign-text-middle">
                                    Nota comun:
                                </div>
                            </div>
                            <div class="modal-flex-row-9">
                                <div class="info-notaComun-modal valign-text-middle">
                                    Lorem fistrum va usté muy cargadoo papaar papaar hasta luego Lucas. Ahorarr tiene musho peligro a wan sexuarl de la pradera diodenoo torpedo no te digo trigo por no llamarte Rodrigor a wan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        mounted() {
            new mdc.select.MDCSelect(document.querySelector(".expedientes-status-select .mdc-select"));
        },
        methods:{
            modalVisible() {
                const openEls = document.querySelector("[data-open]");
                const modalId = openEls.dataset.open;
                const isVisible = "is-visible";
                document.getElementById(modalId).classList.add(isVisible);
            },
            modalInvisible() {
                const closeEls = document.querySelector("[data-close]");
                const modalIdClose = closeEls.dataset.close;
                const isVisible = "is-visible";
                document.getElementById(modalIdClose).classList.remove(isVisible);
            },
            modalOut(){
                const closeEls = document.querySelector("[data-close]");
                const modalIdClose = closeEls.dataset.close;
                const isVisible = "is-visible";
                document.getElementById(modalIdClose).classList.remove(isVisible);
                document.addEventListener("click", e => {
                    if (e.target == document.querySelector(".modal.is-visible")) {
                    document.querySelector(".modal .is-visible [data-close]").click();
                    }
                });
                document.addEventListener("keyup", e => {
                    if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
                    document.querySelector(".modal .is-visible [data-close]").click();
                    }
                });
            },
        }
    }
</script>

<style>
    .expedientes-title {
    display: flex;
    align-items: flex-start;
    height: 16px;
    width: 158px;
    margin-left: 100px;
    margin-top: 50px;
    letter-spacing: 0.15px;
    line-height: 16px;
    /* top: 222px; */
    white-space: nowrap;
    z-index: 4;
    }
    /* Modal: */
    /* Modal: */
    /* Modal: */
    /* Modal: */
    /* Modal: */
    .expedientes-modal{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    background: rgba(0, 0, 0, 0.800);
    cursor: pointer;
    visibility: hidden;
    opacity: 0;
    transition: all 0.35s ease-in;
    }

    .expedientes-modal-window {
    width: 1104px;
    height: 526px;
    border-radius: 32px;
    background: white;
    cursor: default;
    z-index: 99;
    }

    #close-modal {
    cursor: pointer;
    background: transparent;
    border: none;
    outline: none;
    font-size: inherit;
    color: black;
    margin-left: 1040px;
    margin-top: 18px;
    }

    .expedientes-modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    }

    .expedientes-x {
    align-items: flex-start;
    background-color: transparent;
    display: flex;
    width: 32px;
    }

    .expedientes-modal .is-visible {
    visibility: visible;
    opacity: 1;
    }

    .x span {
    color: black;
    font-size: 32px;
    }

    .expediente-modal {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    white-space: nowrap;
    font-size: 28px;
    margin-left: 40px
    }

    .modal-flex-row-1 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }

    .modal-flex-row-2 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }

    .modal-flex-row-3 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }

    .modal-flex-row-4 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }

    .modal-flex-row-5 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }

    .modal-flex-row-6 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }

    .modal-flex-row-7 {
    height: 16px;
    width: 411px;
    letter-spacing: 1.25px;
    line-height: 16px;
    flex-wrap: wrap;
    gap: 4px;
    margin-left: 40px;
    margin-top: 53px;
    }
    /* Modal: */
    /* Modal: */
    /* Modal: */
    /* Modal: */
    /* Modal: */
    .expedientes-container {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: flex-start;
    align-content: flex-start;
    row-gap: 50px;
    column-gap: 115px;
    margin-left: 102px;
    margin-right: 102px;
    z-index: inherit;
    }

    .expediente-file {
    height: 279px;
    margin-top: 45px;
    position: relative;
    width: 488px;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .expediente-file:hover {
    transform: scale(1.1);
    }

    .expedientes-info {
    align-items: flex-start;
    display: flex;
    height: 180px;
    width: 414px;
    left: 37px;
    position: absolute;
    top: 32px;
    }

    .expedientes-flex-row {
    align-items: flex-start;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 188px;
    flex-direction: row;
    width: 414px;
    height: 16px;
    }

    .expedientes-flex-row-1 {
    align-items: flex-start;
    margin-top: 25px;
    margin-left: -412px;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 183px;
    flex-direction: row;
    width: 414px;
    height: 16px;
    }

    .expedientes-flex-row-2 {
    align-items: flex-start;
    margin-top: 75px;
    margin-left: -412px;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 227px;
    flex-direction: row;
    width: 414px;
    height: 16px;
    }

    .expedientes-flex-row-3 {
    align-items: flex-start;
    margin-top: 125px;
    margin-left: -412px;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 300px;
    flex-direction: row;
    width: 414px;
    height: 16px;
    }

    .expedientes-flex-row-4 {
    align-items: flex-start;
    margin-top: 175px;
    margin-left: -412px;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 270px;
    flex-direction: row;
    width: 414px;
    height: 32px;
    }

    /* .expedientes-status-select {
    display: inline-flex;
    margin-top: 10px;
    } */

    /* .mdc-select__anchor {
    width: 52px; */
    /* min-width: 0; */
    /* flex: 1 1 auto; */
    /* position: relative; */
    /* box-sizing: border-box;
    overflow: hidden;
    outline: none;
    cursor: pointer;
    } */

    .mdc-select--filled:not(.mdc-select--disabled) .mdc-select__anchor {
    background-color: white;
    }

    /* .mdc-select--filled .mdc-select__anchor {
    height: 32px;
    display: flex;
    align-items: baseline;
    } */

    .window-expediente-container {
    background-image: url(https://anima-uploads.s3.amazonaws.com/projects/623709b3985fbcb0a0170895/releases/6241fd8a3766e1a6c59e7341/img/window-expediente-blur-8@2x.svg);
    background-size: 100% 100%;
    height: 279px;
    left: 0;
    position: absolute;
    top: 0;
    width: 488px;
    }

    .window-expediente-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    height: 269px;
    left: 5px;
    position: absolute;
    top: 5px;
    width: 478px;
    }

    .window-expediente-shadow-onProcess {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px var(--onProcess);
    height: 269px;
    left: 5px;
    position: absolute;
    top: 5px;
    width: 478px;
    }

    .window-expediente-shadow-inmobilized {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px var(--immobilized);
    height: 269px;
    left: 5px;
    position: absolute;
    top: 5px;
    width: 478px;
    }

    .window-expediente-shadow-requested {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px var(--requested);
    height: 269px;
    left: 5px;
    position: absolute;
    top: 5px;
    width: 478px;
    }

    .window-expediente-shadow-closed {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px var(--closed);
    height: 269px;
    left: 5px;
    position: absolute;
    top: 5px;
    width: 478px;
    }

    .window-expediente-shadow-accepted {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px var(--accepted);
    height: 269px;
    left: 5px;
    position: absolute;
    top: 5px;
    width: 478px;
    }

    .window-expediente {
    background-color: white;
    border-radius: 39.43px;
    height: 274px;
    left: 5px;
    position: absolute;
    top: 3px;
    width: 478px;
    }

    .expedientes-title {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    margin-left: 102px;
    margin-top: 24px;
    white-space: nowrap;
    }

    .expedientes-expediente {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    white-space: nowrap;
    }

    .expedientes-operador {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .expedientes-fecha {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .expedientes-hora {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .expedientes-estado {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .expedientes-number {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    min-width: 105px;
    white-space: nowrap;
    }

    .expedientes-name-profile {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    min-width: 129px;
    white-space: nowrap;
    }

    .expedientes-date {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    min-width: 121px;
    white-space: nowrap;
    }

    .expedientes-text {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    min-width: 61px;
    white-space: nowrap;
    }

    .onProcess {
    align-items: flex-start;
    background-color: white;
    display: flex;
    margin-right: 2.3px;
    margin-top: 20px;
    min-width: 26px;
    }

    .onProcess {
    height: auto !important;
    width: auto !important;
    }

    .onProcess span {
    color: var(--onProcess);
    margin-top: -5px;
    font-size: 32px;
    }

    .immobilized {
    align-items: flex-start;
    background-color: white;
    display: flex;
    margin-right: 2.3px;
    margin-top: 20px;
    min-width: 26px;
    }

    .immobilized {
    height: auto !important;
    width: auto !important;
    }

    .immobilized span {
    color: var(--immobilized);
    margin-top: -5px;
    font-size: 32px;
    }

    .requested {
    align-items: flex-start;
    background-color: white;
    display: flex;
    margin-right: 2.3px;
    margin-top: 20px;
    min-width: 26px;
    }

    .requested {
    height: auto !important;
    width: auto !important;
    }

    .requested span {
    color: var(--requested);
    margin-top: -5px;
    font-size: 32px;
    }

    .closed {
    align-items: flex-start;
    background-color: white;
    display: flex;
    margin-right: 2.3px;
    margin-top: 20px;
    min-width: 26px;
    }

    .closed {
    height: auto !important;
    width: auto !important;
    }

    .closed span {
    color: var(--closed);
    margin-top: -5px;
    font-size: 32px;
    }

    .accepted {
    align-items: flex-start;
    background-color: white;
    display: flex;
    margin-right: 2.3px;
    margin-top: 20px;
    min-width: 26px;
    }

    .accepted {
    height: auto !important;
    width: auto !important;
    }

    .accepted span {
    color: var(--accepted);
    margin-top: -5px;
    font-size: 32px;
    }

    .icon {
    align-items: flex-start;
    display: flex;
    height: 26px;
    padding: 1.8px 1.8px;
    width: 26px;
    }

    .vector-container {
    height: 22px;
    position: relative;
    width: 22px;
    }

    .vector {
    height: 1px;
    left: 11px;
    position: absolute;
    top: 11px;
    width: 1px;
    }
</style>
