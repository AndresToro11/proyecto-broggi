<template>
    <div>
        <h1 class="text-center">
            Supervisor
        </h1>
        
        <div class="row text-center mt-4">
            <div class="col">
                <a href="/proyecto_broggi/public/llamada" type="button" class="btn btn-primary">Llamada</a>
            </div>
            <div class="col">
                <a href="/proyecto_broggi/public/grafico" type="button" class="btn btn-primary">Grafico</a>
            </div>
        </div>

        <div class="row text-center mt-4">
            <div class="col">
                <a href="/proyecto_broggi/public/llamada" type="button" class="btn btn-primary">Gestionar expediente</a>
            </div>
            <div class="col">
                <a href="/proyecto_broggi/public/video" type="button" class="btn btn-primary">Estado operadores</a>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component up.')
        }
    }
</script>