<template>
    <div>
        <h1 class="operador-home-title gothica1-normal-black-28px">
            ¡Bienvenido operador!
        </h1>
        <div class="operador-home-container">
            <div class="operador-home-llamada-button">
                <div class="window-operador-home-llamada-container">
                    <div class="window-operador-home-llamada-shadow"></div>
                    <div class="window-operador-llamada-home"></div>
                </div>
                <div class="operador-home-llamada-info gothica1-normal-black-21px valign-text-middle">
                    Carta de llamada
                </div>
            </div>
            <div class="operador-home-tutorial-button">
                <div class="window-operador-home-tutorial-container">
                    <div class="window-operador-home-tutorial-shadow"></div>
                    <div class="window-operador-tutorial-home"></div>
                </div>
                <div class="operador-home-tutorial-info gothica1-normal-black-21px valign-text-middle">
                    Tutorial
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
    .operador-home-title {
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
    .operador-home-container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 250px;
    width: 1920px;
    justify-content: center;
    margin-top: 200px;
    }

    /* FIXME: Boton llamada */
    .operador-home-llamada-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .operador-home-llamada-button:hover {
    transform: scale(1.1);
    }

    .window-operador-home-llamada-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-operador-llamada-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .operador-home-llamada-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }

    /* FIXME: Boton Tutorial */
    .operador-home-tutorial-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .operador-home-tutorial-button:hover {
    transform: scale(1.1);
    }

    .window-operador-home-tutorial-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-operador-tutorial-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .operador-home-tutorial-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }
</style>
