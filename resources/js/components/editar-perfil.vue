<template>
    <div>
        <h1>
            Hola caracola, esto es editar perfil
        </h1>
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

</style>
