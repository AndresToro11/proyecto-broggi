<template>
    <div>
        <h1 class="administrador-home-title gothica1-normal-black-28px">
            ¡Bienvenido administrador!
        </h1>
        <div class="administrador-home-container-1">
            <div class="administrador-home-expedientes-button">
                <div class="window-administrador-home-expedientes-container">
                    <div class="window-administrador-home-expedientes-shadow"></div>
                    <div class="window-administrador-expedientes-home"></div>
                </div>
                <div class="administrador-home-expedientes-info gothica1-normal-black-21px valign-text-middle">
                    Gestionar expedientes
                </div>
            </div>
            <div class="administrador-home-usuarios-button">
                <div class="window-administrador-home-usuarios-container">
                    <div class="window-administrador-home-usuarios-shadow"></div>
                    <div class="window-administrador-usuarios-home"></div>
                </div>
                <div class="administrador-home-usuarios-info gothica1-normal-black-21px valign-text-middle">
                    Gestionar usuarios
                </div>
            </div>
        </div>
        <div class="administrador-home-container-2">
            <div class="administrador-home-graficos-button">
                <div class="window-administrador-home-graficos-container">
                    <div class="window-administrador-home-graficos-shadow"></div>
                    <div class="window-administrador-graficos-home"></div>
                </div>
                <div class="administrador-home-graficos-info gothica1-normal-black-21px valign-text-middle">
                    Graficos
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
    .administrador-home-title {
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
    .administrador-home-container-1 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 250px;
    width: 1920px;
    justify-content: center;
    margin-top: 200px;
    }

    .administrador-home-container-2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 250px;
    width: 1920px;
    justify-content: center;
    margin-top: 40px;
    }

    /* FIXME: Boton expedientes */
    .administrador-home-expedientes-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .administrador-home-expedientes-button:hover {
    transform: scale(1.1);
    }

    .window-administrador-home-expedientes-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-administrador-expedientes-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .administrador-home-expedientes-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    text-align: center;
    }

    /* FIXME: Boton usuarios */
    .administrador-home-usuarios-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .administrador-home-usuarios-button:hover {
    transform: scale(1.1);
    }

    .window-administrador-home-usuarios-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-administrador-usuarios-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .administrador-home-usuarios-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    text-align: center;
    }

    /* FIXME: Boton graficos */
    .administrador-home-graficos-button {
    width: 288px;
    height: 178px;
    position: relative;
    transition: all 0.2s ease-in-out;
    cursor: pointer;
    }

    .administrador-home-graficos-button:hover {
    transform: scale(1.1);
    }

    .window-administrador-home-graficos-shadow {
    background-color: var(--black-3);
    border-radius: 39.43px;
    box-shadow: 0px 4.93px 4.93px #00000040;
    width: 278px;
    height: 169px;
    left: 5px;
    position: absolute;
    top: 5px;

    }

    .window-administrador-graficos-home {
    background-color: white;
    border-radius: 39.43px;
    width: 278px;
    height: 174px;
    left: 5px;
    position: absolute;
    top: 3px;
    }

    .administrador-home-graficos-info {
    display: flex;
    align-items: center;
    width: 170px;
    height: 56px;
    margin-top: 80px;
    margin-left: 60px;
    position: absolute;
    }
</style>
