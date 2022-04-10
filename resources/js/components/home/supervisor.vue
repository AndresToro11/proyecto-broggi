<template>
    <div>
        <h1 class="supervisor-home-title gothica1-normal-black-28px">
            ¡Bienvenido supervisor!
        </h1>
        <div class="supervisor-home-container-1">
            <div class="supervisor-home-llamada-button">
                <div class="window-supervisor-home-llamada-container">
                    <div class="window-supervisor-home-llamada-shadow"></div>
                    <div class="window-supervisor-llamada-home"></div>
                </div>
                <div class="supervisor-home-llamada-info gothica1-normal-black-21px valign-text-middle">
                    Carta de llamada
                </div>
            </div>
            <div class="supervisor-home-expedientes-button">
                <div class="window-supervisor-home-expedientes-container">
                    <div class="window-supervisor-home-expedientes-shadow"></div>
                    <div class="window-supervisor-expedientes-home"></div>
                </div>
                <div class="supervisor-home-expedientes-info gothica1-normal-black-21px valign-text-middle">
                    Expedientes
                </div>
            </div>
        </div>
        <div class="supervisor-home-container-2">
            <div class="supervisor-home-graficos-button">
                <div class="window-supervisor-home-graficos-container">
                    <div class="window-supervisor-home-graficos-shadow"></div>
                    <div class="window-supervisor-graficos-home"></div>
                </div>
                <div class="supervisor-home-graficos-info gothica1-normal-black-21px valign-text-middle">
                    Graficos
                </div>
            </div>
            <div class="supervisor-home-operadores-button">
                <div class="window-supervisor-home-operadores-container">
                    <div class="window-supervisor-home-operadores-shadow"></div>
                    <div class="window-supervisor-operadores-home"></div>
                </div>
                <div class="supervisor-home-operadores-info gothica1-normal-black-21px valign-text-middle">
                    Operadores
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>

<style>
    .supervisor-home-title {
    display: flex;
    align-items: flex-start;
    height: 16px;
    width: 158px;
    margin-left: 100px;
    margin-top: 50px;
    letter-spacing: 0.15px;
    line-height: 16px;
    white-space: nowrap;
    z-index: 4;
    }

    /* FIXME: Main containers */
    .supervisor-home-container-1 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 250px;
    width: 1920px;
    justify-content: center;
    margin-top: 200px;
    }

    .supervisor-home-container-2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 250px;
    width: 1920px;
    justify-content: center;
    margin-top: 40px;
    }

    /* FIXME: Boton llamada */
    .supervisor-home-llamada-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .supervisor-home-llamada-button:hover {
    transform: scale(1.1);
    }

    .window-supervisor-home-llamada-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-supervisor-llamada-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .supervisor-home-llamada-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }

    /* FIXME: Boton expedientes */
    .supervisor-home-expedientes-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .supervisor-home-expedientes-button:hover {
    transform: scale(1.1);
    }

    .window-supervisor-home-expedientes-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-supervisor-expedientes-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .supervisor-home-expedientes-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }

    /* FIXME: Boton graficos */
    .supervisor-home-graficos-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .supervisor-home-graficos-button:hover {
    transform: scale(1.1);
    }

    .window-supervisor-home-graficos-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-supervisor-graficos-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .supervisor-home-graficos-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }

    /* FIXME: Boton operadores */
    .supervisor-home-operadores-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .supervisor-home-operadores-button:hover {
    transform: scale(1.1);
    }

    .window-supervisor-home-operadores-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-supervisor-operadores-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .supervisor-home-operadores-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }
</style>
