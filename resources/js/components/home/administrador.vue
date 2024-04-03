<template>
    <div>
        <h1 class="text-center">
            Administrador
        </h1>
        
        <div class="row text-center mt-4">
            <div class="col">
                <a href="/proyecto-broggi/public/expedientes" type="button" class="btn btn-primary">Gestionar expediente</a>
            </div>
            <div class="col">
                <a href="/proyecto-broggi/public/grafico" type="button" class="btn btn-primary">Gráfico</a>
            </div>
                        <div class="col">
                <a href="/proyecto-broggi/public/grafico" type="button" class="btn btn-primary">Gestionar usuarios</a>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>