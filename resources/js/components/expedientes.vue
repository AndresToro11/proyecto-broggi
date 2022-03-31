<template>
    <div>
        <h1 class="title valign-text-middle gothica1-normal-black-28px">
            Expedientes
        </h1>
        <div class="margin-container">
            <div class="container">
                <div class="file">
                    <div class="window-expediente-container"> <!-- FIXME: ELEMENTS -->
                        <div class="window-expediente-shadow"></div>
                        <div class="window-expediente"></div>
                    </div>
                    <div class="info gothica1-normal-black-21px"> <!-- FIXME: INFO -->
                        <div class="flex-row">
                            <div class="expediente valign-text-middle">
                                Expediente
                            </div>
                            <div class="number valign-text-middle">
                                00000001
                            </div>
                        </div>
                        <div class="flex-row-1">
                            <div class="operador valign-text-middle">
                                Operador
                            </div>
                            <div class="name-profile valign-text-middle">
                                Andrés Toro
                            </div>
                        </div>
                        <div class="flex-row-2">
                            <div class="fecha valign-text-middle">
                                Fecha
                            </div>
                            <div class="date valign-text-middle">
                                13/10/2022
                            </div>
                        </div>
                        <div class="flex-row-3">
                            <div class="hora valign-text-middle">
                                Hora
                            </div>
                            <div class="text valign-text-middle">
                                22:34
                            </div>
                        </div>
                        <div class="flex-row-4">
                            <div class="estado valign-text-middle">
                                Estado
                            </div>
                            <div class="pendiente">
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
        methods:{
            selectExpedientes(){
                this.loading = true;
                let me = this;
                axios
                    .get('/expedientes')
                    .then(response => {
                        me.expedientes = response.data;
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => this.loading = false);
            }
        },
        mounted() {
            console.log('¡¡Componente expedientes up!!')
            this.selectExpedientes();
        }
    }
</script>

<style>
    .margin-container {
    margin-left: 102px;
    margin-right: 102px;
    z-index: inherit;
    }

    .container {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: flex-start;
    align-content: flex-start;
    row-gap: 50px;
    column-gap: 115px;
    }

    .file {
    height: 279px;
    margin-top: 45px;
    position: relative;
    width: 488px;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .file:hover {
    transform: scale(1.1);
    }

    .info {
    align-items: flex-start;
    display: flex;
    height: 180px;
    width: 414px;
    left: 37px;
    position: absolute;
    top: 32px;
    }

    .flex-row {
    align-items: flex-start;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 188px;
    flex-direction: row;
    width: 414px;
    height: 16px;
    }

    .flex-row-1 {
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

    .flex-row-2 {
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

    .flex-row-3 {
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

    .flex-row-4 {
    align-items: flex-start;
    margin-top: 175px;
    margin-left: -412px;
    display: inline-flex;
    flex-wrap: wrap;
    gap: 270px;
    flex-direction: row;
    width: 414px;
    height: 16px;
    }

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

    .window-expediente {
    background-color: var(--white);
    border-radius: 39.43px;
    height: 274px;
    left: 5px;
    position: absolute;
    top: 3px;
    width: 478px;
    }

    .title {
    height: 16px;
    letter-spacing: 0.15px;
    line-height: 16px;
    margin-left: 102px;
    margin-top: 24px;
    white-space: nowrap;
    }

    .expediente {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    white-space: nowrap;
    }

    .operador {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .fecha {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .hora {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .estado {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    white-space: nowrap;
    }

    .number {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    min-width: 105px;
    white-space: nowrap;
    }

    .name-profile {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    min-width: 129px;
    white-space: nowrap;
    }

    .date {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    min-width: 121px;
    white-space: nowrap;
    }

    .text {
    height: 16px;
    letter-spacing: 1.25px;
    line-height: 16px;
    margin-top: 25px;
    min-width: 61px;
    white-space: nowrap;
    }

    .pendiente {
    align-items: flex-start;
    background-color: var(--white);
    display: flex;
    margin-right: 2.3px;
    margin-top: 20px;
    min-width: 26px;
    }

    .pendiente {
    height: auto !important;
    width: auto !important;
    }

    .pendiente span {
    color: var(--mdc-theme-secondary);
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
